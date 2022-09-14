<?php

namespace App\Http\Controllers;

use App\CaseHistory;
use App\Patient;
use App\User;
use Illuminate\Http\Request;

class CaseHistoryController extends Controller
{
    public function index()
    {
        return view('casehistories.list')->with('casehistories', CaseHistory::all());

    }

    public function create()
    {
        return view('casehistories.create')
            ->with('patients', User::patient()->get());
    }

    public function store(Request $request)
    {
        CaseHistory::create([
            'patient_id' => $request->patient,
            'date' => $request->date,
            'title' => $request->title,
            'food_allergies' => $request->food_allergies,
            'bleed_tendency' => $request->bleed_tendency,
            'heart_disease' => $request->heart_disease,
            'blood_pressure' => $request->blood_pressure,
            'diabetic' => $request->diabetic,
            'surgery' => $request->surgery,
            'accident' => $request->accident,
            'family_medical_history' => $request->family_medical_history,
            'current_medication' => $request->current_medication,
            'female_pregnancy' => $request->female_pregnancy,
            'breast_feeding' => $request->breast_feeding,
            'health_insurance' => $request->health_insurance,
            'low_income' => $request->low_income,
            'reference' => $request->reference,
            'others' => $request->others,
            'status' => $request->status,
        ]);
        // flash message
        session()->flash('success', 'New Case History Added Successfully.');
        // redirect user
        return redirect(route('casehistories.index'));
    }

    public function show(CaseHistory $casehistory)
    {
        return view('casehistories.show')->with('casehistory', $casehistory);

    }

    public function edit(CaseHistory $casehistory)
    {
        return view('casehistories.create')
            ->with('patients', User::patient()->get())
            ->with('casehistory', $casehistory);
    }

    public function update(Request $request, CaseHistory $casehistory)
    {
        $casehistory->update([
            'patient_id' => $request->patient,
            'date' => $request->date,
            'title' => $request->title,
            'food_allergies' => $request->food_allergies,
            'bleed_tendency' => $request->bleed_tendency,
            'heart_disease' => $request->heart_disease,
            'blood_pressure' => $request->blood_pressure,
            'diabetic' => $request->diabetic,
            'surgery' => $request->surgery,
            'accident' => $request->accident,
            'family_medical_history' => $request->family_medical_history,
            'current_medication' => $request->current_medication,
            'female_pregnancy' => $request->female_pregnancy,
            'breast_feeding' => $request->breast_feeding,
            'health_insurance' => $request->health_insurance,
            'low_income' => $request->low_income,
            'reference' => $request->reference,
            'others' => $request->others,
            'status' => $request->status,
        ]);
        // flash message
        session()->flash('success', 'New Case History Updated Successfully.');
        // redirect user
        return redirect(route('casehistories.index'));
    }

    public function destroy(CaseHistory $casehistory)
    {
        $casehistory->delete();

        // flash message
        session()->flash('success', 'Case History Deleted Successfully.');
        // redirect user
        return redirect(route('casehistories.index'));
    }
}
