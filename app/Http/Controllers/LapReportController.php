<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\LapReport;
use App\LapTemplate;
use App\Patient;
use App\User;
use Illuminate\Http\Request;

class LapReportController extends Controller
{
    public function getTemplateById(Request $request){
        if($request->id){
            $template = LapTemplate::find($request->id);
        }
        return response()->json(['html' => $template->template]);
    }

    public function index()
    {
        return view('lap.lapreports.list')->with('lapreports',LapReport::all());
    }

    public function create()
    {
        return view('lap.lapreports.create')
            ->with('patients',User::patient()->get())
            ->with('templates',LapTemplate::all())
            ->with('doctors',User::doctor()->get());
    }

    public function store(Request $request)
    {
        LapReport::create([
            'date'=>$request->date,
            'time'=>$request->time,
            'patient_id'=>$request->patient,
            'doctor_id'=>$request->doctor,
            'template_id'=>$request->template,
            'report'=>$request->report,
        ]);
        // flash message
        session()->flash('success', 'New Lap Report Added Successfully.');
        // redirect user
        return redirect(route('lapreports.index'));
    }

    public function show(LapReport $lapreport)
    {
        return view('lap.lapreports.show')->with('lapreport',$lapreport);
    }

    public function edit(LapReport $lapreport)
    {
        return view('lap.lapreports.create')
            ->with('lapreport',$lapreport)
            ->with('patients',User::patient()->get())
            ->with('templates',LapTemplate::all())
            ->with('doctors',User::doctor()->get());
    }

    public function update(Request $request, LapReport $lapreport)
    {
        $lapreport->update([
            'date'=>$request->date,
            'time'=>$request->time,
            'patient_id'=>$request->patient,
            'doctor_id'=>$request->doctor,
            'template_id'=>$request->template,
            'report'=>$request->report,
        ]);
        // flash message
        session()->flash('success', 'Lap Report updated Successfully.');
        // redirect user
        return redirect(route('lapreports.index'));
    }

    public function destroy(LapReport $lapreport)
    {
        $lapreport->delete();
        // flash message
        session()->flash('success', ' Lap Report Deleted Successfully.');
        // redirect user
        return redirect(route('lapreports.index'));
    }
}
