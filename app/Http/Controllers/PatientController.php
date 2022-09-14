<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\Patient\CreatePatientRequest;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{
    public function index()
    {
        return view('users.patients.list')->with('patients', User::patient()->get())->with('departments',Department::all());
    }

    public function create()
    {
        return view('users.patients.create')->with('departments',Department::all());
    }

    public function store(CreatePatientRequest $request)
    {
        $pic = $request->picture->store('patients_pictures');

        $patient = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'email' => $request->email,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'emergency' => $request->emergency,
            'blood_group' => $request->blood_group,
            'picture' => $pic,
            'type' => 'patient'
        ]);

        if ($request->departments){
            $patient->departments()->attach($request->departments);
        }

        // flash message
        session()->flash('success', 'New Patient Added Successfully.');
        // redirect user
        return redirect(route('patients.index'));
    }

    public function show(User $patient)
    {
        return view('users.patients.show')
            ->with('appointments', $patient->appointments)
            ->with('casehistories', $patient->casesHistories)
            ->with('documents', $patient->documents)
            ->with('bedallotments', $patient->bedAllotments)
            ->with('prescriptions', $patient->prescriptions)
            ->with('patient', $patient)
            ->with('departments',Department::all());
    }

    public function edit(User $patient)
    {
        return view('users.patients.create')->with('patient', $patient)->with('departments',Department::all());
    }

    public function update(Request $request, User $patient)
    {
        $data = $request->only('first_name', 'last_name', 'national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency', 'blood_group');

        if ($request->hasFile('picture')) {
            $pic = $request->picture->store('patients_pictures');
            Storage::delete($patient->picture);
            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $patient->departments()->sync($request->departments);
        }

        $patient->update($data);
        // flash message
        session()->flash('success', ' Patient Updated Successfully.');
        // redirect user
        return redirect(route('patients.index'));
    }

    public function destroy(User $patient)
    {
        $patient->departments()->detach();
        Storage::delete($patient->picture);
        $patient->delete();
        // flash message
        session()->flash('success', ' Patient Deleted Successfully.');
        // redirect user
        return redirect(route('patients.index'));
    }
}
