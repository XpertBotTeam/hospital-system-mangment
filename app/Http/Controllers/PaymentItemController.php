<?php

namespace App\Http\Controllers;

use App\PaymentItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentItemController extends Controller
{
    public function getPaymentItemByItemId(Request $request)
    {

        if ($request->id)  {
            $TS = collect();
            $item = PaymentItem::find($request->id);
            $TS->push($item);
            $json = $TS->toJson();
        }
        return response()->json(['html' => $json]);
    }

    public function getPaymentItemByDoctorId(Request $request)
    {

        if ($request->doctor)  {
            $TS = collect();
            $items = DB::table('payment_items')->where('doctor_id', $request->doctor)->where('type', 'Appointment')->get();
            foreach ($items as $item) {
                $TS->push($item);
            }
            //$TS->push($item);
            $json = $TS->toJson();
        }
        return response()->json(['html' => $json]);
    }

    public function index()
    {
        return view('financial.paymentitems.list')->with('paymentitems',PaymentItem::all());

    }

    public function create()
    {
        return view('financial.paymentitems.create');

    }

    public function store(Request $request)
    {

        PaymentItem::create([
            'code' => $request->code,
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'commission' => $request->commission,
            'quantity' => $request->quantity,
        ]);

        // flash message
        session()->flash('success', 'New Item Added Successfully.');
        // redirect user
        return redirect(route('paymentitems.index'));
    }
}
