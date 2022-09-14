<?php

namespace App\Http\Controllers;

use App\Diagnosis;
use App\Doctor;
use App\Medicine;
use App\Patient;
use App\Prescription;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PrescriptionController extends Controller
{
    public function index()
    {
        return view('prescriptions.list')->with('prescriptions', Prescription::all());
    }

    public function create()
    {
        return view('prescriptions.create')
            ->with('patients', User::patient()->get())
            ->with('medicines', Medicine::all())
            ->with('doctors', User::doctor()->get());
    }

    public function store(Request $request)
    {
//dd($request->all());
        $prescription = Prescription::create([
            'doctor_id' => $request->doctor,
            'patient_id' => $request->patient,
            'blood_pressure' => $request->blood_pressure,
            'diabetes' => $request->diabetes,
            'symptoms' => $request->symptoms,
            'diagnosis' => $request->diagnosis,
            'advice' => $request->advice,
            'date' => $request->date,
        ]);

        if ($request->medicine){
            foreach ($request->medicine as $m){
                if($m['name'] != null){
                    $prescription->medicines()->create([
                        'name' => $m['name'],
                        'instruction' => $m['instruction'],
                    ], ['instructions' => $m['instruction']]);
                }
            }
        }

        if ($request->medicines_exist){
            foreach ($request->medicines_exist as $m){
                if($m['medicine_exist'] != 'Select Medicine') {
                    $prescription->medicines()->attach($m['medicine_exist'], ['instructions' => $m['medicine_exist_instruction']]);
                }
            }
        }

        // flash message
        session()->flash('success', 'New Prescription Added Successfully.');
        // redirect user
        return redirect(route('prescriptions.index'));
    }

    public function show(Prescription $prescription)
    {
        return view('prescriptions.show')->with('prescription', $prescription);
    }

    public function edit(Prescription $prescription)
    {
       $age = Carbon::parse($prescription->patient->birth_date)->age;
        return view('prescriptions.create')
            ->with('patients', User::patient()->get())
            ->with('doctors', User::doctor()->get())
            ->with('medicines', Medicine::all())
            ->with('age', $age)
            ->with('prescription', $prescription);
    }

    public function update(Request $request, Prescription $prescription)
    {
        $prescription->update([
            'doctor_id' => $request->doctor,
            'patient_id' => $request->patient,
            'blood_pressure' => $request->blood_pressure,
            'diabetes' => $request->diabetes,
            'symptoms' => $request->symptoms,
            'diagnosis' => $request->diagnosis,
            'advice' => $request->advice,
            'date' => $request->date,
        ]);

        $prescription->medicines()->detach();

        if ($request->medicine){
            //$prescription->medicines()->delete();
            //$prescription->medicines()->detach();
            foreach ($request->medicine as $m){
                if($m['name'] != null) {
                    $prescription->medicines()->create([
                        'name' => $m['name'],
                        'instruction' => $m['instruction'],
                    ], ['instructions' => $m['instruction']]);
                }
            }
        }

        if ($request->medicines_exist){
            //$prescription->medicines()->detach();
            foreach ($request->medicines_exist as $m){
                $prescription->medicines()->attach($m['medicine_exist'], ['instructions' => $m['medicine_exist_instruction']]);
            }
        }

        $prescription->update();
        // flash message
        session()->flash('success', 'Prescription Updated Successfully.');
        // redirect user
        return redirect(route('prescriptions.index'));
    }

    public function destroy(Prescription $prescription)
    {
       // $prescription->medicines()->delete();
        $prescription->medicines()->detach();
        $prescription->delete();
        // flash message
        session()->flash('success', 'Prescription Deleted Successfully.');
        // redirect user
        return redirect(route('prescriptions.index'));
    }

}
