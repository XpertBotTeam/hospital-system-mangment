<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Finance;
use App\Patient;
use App\Payment;
use App\PaymentItem;
use App\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('financial.payments.list')->with('payments',Payment::all());
    }

    public function create()
    {
        return view('financial.payments.create')
            ->with('patients',User::patient()->get())
            ->with('doctors',User::doctor()->get())
            ->with('paymentitems',PaymentItem::all());
    }

    public function store(Request $request)
    {
        if ($request->doctor != 0){
            $doctor = $request->doctor;
            //$total_commission = $request->total_commission;
        } else {
            $doctor = null;
            //$total_commission = 0;
        }

        if ($request->patient != 0){
            $patient = $request->patient;
        } else {
            $patient = null;
        }

        // math operations
        $sub_total = $request->sub_total_price;
        $taxes = $sub_total/10;
        $total = $sub_total+$taxes;

        if (isset($request->amount_received)){
            $amount_received = $request->amount_received;
        } else {
            $amount_received = 0;
        }

        $amount_to_pay = $total - $amount_received;
        $totalcomm = 0;
        for ($c=1;$c<1000;$c++){
            if ($request->input('doctor_commission'.$c)){
                if(strpos($request->input('doctor_commission'.$c), '%') !== false){
                    $comm = str_replace('%','',$request->input('doctor_commission'.$c));
                    $commission = $request->input('total'.$c) * $comm / 100;
                } else {
                    $commission = $request->input('doctor_commission'.$c);
                }
                $totalcomm += $commission;
                //$payment->paymentitems()->attach($request->input('item'.$c), ['payment_item_quantity' => $request->input('qty'.$c)]);
            }
        }

        $payment = Payment::create([
            'doctor_id' => $doctor,
            'patient_id' => $patient,
            'sub_total' => $sub_total,
            'taxes' => $taxes,
            'total' => $total,
            'amount_received' => $amount_received,
            'amount_to_pay' => $amount_to_pay,
            'doctor_commission' => $totalcomm,
        ]);

        $f = Finance::find(1);
        $t = $f->total_money;
        $f->update([
            'total_money' => $t + $amount_received,
        ]);

        for ($c=1;$c<1000;$c++){
            if ($request->input('item'.$c)){
                $payment->paymentItems()->attach($request->input('item'.$c), ['payment_item_quantity' => $request->input('qty'.$c)]);
            }
        }
        // flash message
        //session()->flash('success', 'New Payment Added Successfully.');
        // redirect user
        return view('financial.payments.invoice')->with('payment',$payment);
    }

}
