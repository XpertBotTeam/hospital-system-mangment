<?php

namespace App\Http\Controllers;

use App\Department;
use App\Appointment;
use App\Finance;
use App\Payment;
use App\TimeSchedule;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function getAppointmentsByDate(Request $request)
    {
         if ($request->date) {
            $app = DB::table('appointments')->where('date', $request->date)->get();
            $TS = collect();
            foreach ($app as $a) {
                $TS->push($a);
            }
            $json = $TS->toJson();
        }
        return response()->json(['html' => $json]);
    }

    public function getDoctorsByDepartment(Request $request)
    {

        if ($request->id) {
            $html = '<option value="">Please Select Doctor</option>';
            $department = Department::find($request->id);
            $doctors = $department->doctors;
            foreach ($doctors as $doctor) {

                $html .= '<option value="' . $doctor->id . '">' . $doctor->first_name . ' ' . $doctor->last_name . '</option>';
            }
        }
        return response()->json(['html' => $html]);
    }

    public function index()
    {
        foreach (Appointment::all() as $appointment){

            $date_time = $appointment->date.' '.$appointment->time;
            //$end_date_time = $appointment->end_date.' '.$appointment->end_time;

            //$bed = $appointment->bed;
            if (Carbon::parse($date_time)->lt(now()) && $appointment->status == 'confirmed'){
                $appointment->update([
                    'status'=> 'Treated'
                ]);
            }
            else if(Carbon::parse($date_time)->lt(now()) && $appointment->status == 'pending') {
                $appointment->update([
                    'status'=> 'cancelled'
                ]);
            }
        }
        return view('appointments.list')
            ->with('pendingAppointments', Appointment::where('status','pending')->get())
            ->with('confirmedAppointments', Appointment::where('status','confirmed')->get())
            ->with('cancelledAppointments', Appointment::where('status','cancelled')->get())
            ->with('treatedAppointments', Appointment::where('status','treated')->get())
            ->with('appointments', Appointment::all());
    }

    public function create()
    {
        return view('appointments.create')
            ->with('doctors', User::doctor()->get())
            ->with('patients', User::patient()->get())
            ->with('departments', Department::all())
            ->with('timeschedules', TimeSchedule::all());
    }

    public function store(Request $request)
    {
        if ($request->patient != 0){
            $patient = $request->patient;
        } else {
            $patient = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => 'default@clinic.com',
                'type'=> 'patient'
            ]);
        }
        Appointment::create([
            'patient_id' => $patient->id,
            'doctor_id' => $request->doctor,
            'department_id' => $request->department,
            'date' => $request->date,
            'time' => $request->timeSlots,
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        if ($request->status == 'confirmed'){
            if (strpos($request->commission, '%') !== false ){
                $c = str_replace('%', '', $request->commission);
                $commission = $request->price * $c / 100;
            } else {
                $commission = $request->commission;
            }
            $payment = Payment::create([
                'doctor_id' => $request->doctor,
                'patient_id' => $request->patient,
                'sub_total' => $request->price,
                'taxes' => 0,
                'total' => $request->price,
                'amount_received' => $request->price,
                'amount_to_pay' => 0,
                'doctor_commission' => $commission,
            ]);

            $payment->paymentitems()->attach($request->item, ['payment_item_quantity' => 1]);

            $f = Finance::find(1);
            $t = $f->total_money;
            $f->update([
                'total_money' => $t + $request->price,
            ]);
        }
        // flash message
        session()->flash('success', 'New Appointment Added Successfully.');
        // redirect user
        return redirect(route('appointments.index'));
    }

    public function show(Appointment $Appointment)
    {
        return view('appointments.show')->with('Appointment', $Appointment);
    }

    public function edit(Appointment $Appointment)
    {
        return view('appointments.create')
            ->with('doctors', User::doctor()->get())
            ->with('patients', User::patient()->get())
            ->with('departments', Department::all())
            ->with('timeschedules', TimeSchedule::all())
            ->with('appointment', $Appointment);
    }

    public function update(Request $request, Appointment $Appointment)
    {

        $Appointment->update([
            'patient_id' => $request->patient,
            'doctor_id' => $request->doctor,
            'department_id' => $request->department,
            'date' => $request->date,
            'time' => $request->timeSlots,
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        // flash message
        session()->flash('success', 'Time Schedule Updated Successfully.');
        // redirect user
        return redirect(route('appointments.index'));
    }

    public function destroy(Appointment $Appointment)
    {
        $Appointment->delete();

        // flash message
        session()->flash('success', 'Time Schedule Deleted Successfully.');
        // redirect user
        return redirect(route('appointments.index'));
    }

    public function createAppointmentForDoctor(User $doctor)
    {
        return view('appointments.create')->with('doctor', $doctor);
    }

    public function appointmentsForDoctor(User $doctor)
    {
        return view('appointments.list')->with('doctor', $doctor);
    }

}
