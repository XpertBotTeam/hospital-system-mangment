<?php

namespace App\Http\Controllers;

use App\DayoffSchedule;
use App\Doctor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DayoffScheduleController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->start_date) && isset($request->end_date)){

            $dayoffschedules = DayoffSchedule::whereBetween('date',[$request->start_date,$request->end_date])->get();
            // flash message
            session()->flash('success', 'Day off Schedule Deleted Successfully.');
            // redirect user
            return view('dayoffschedules.list')->with('dayoffschedules', $dayoffschedules);
        }
        //dd($request->start_date);
        return view('timeschedules.dayoffschedules.list')->with('dayoffschedules', DayoffSchedule::all());
    }

    public function create()
    {
        return view('timeschedules.dayoffschedules.create')->with('doctors', User::doctor()->orWhere->patient()->get());
    }

    public function store(Request $request){
        DayoffSchedule::create([
            'user_id' => $request->doctor,
            'date' => $request->date,
        ]);

        // flash message
        session()->flash('success', 'New Day off Schedule Added Successfully.');
        // redirect user
        return redirect(route('dayoffschedules.index'));
    }

    public function show(DayoffSchedule $dayoffschedule)
    {
        return view('timeschedules.dayoffschedules.show')->with('dayoffschedule', $dayoffschedule);
    }

    public function edit(DayoffSchedule $dayoffschedule)
    {
        return view('timeschedules.dayoffschedules.create')
            ->with('doctors', User::doctor()->get())
            ->with('dayoffschedule', $dayoffschedule);
    }

    public function update(Request $request, DayoffSchedule $dayoffschedule)
    {

        $dayoffschedule->update([
            'user_id' => $request->doctor,
            'date' => $request->date,
        ]);

        // flash message
        session()->flash('success', 'Day off Schedule Updated Successfully.');
        // redirect user
        return redirect(route('dayoffschedules.index'));
    }

    public function destroy(DayoffSchedule $dayoffschedule)
    {
        $dayoffschedule->delete();

        // flash message
        session()->flash('success', 'Day off Schedule Deleted Successfully.');
        // redirect user
        return redirect(route('dayoffschedules.index'));
    }

    /*public function filter(Request $request)
    {
        $dayoffschedules = DayoffSchedule::whereBetween('date',[$request->start_date,$request->end_date])->get();
        // flash message
        session()->flash('success', 'Day off Schedule Deleted Successfully.');
        // redirect user
        return view('dayoffschedules.list')->with('dayoffschedules', $dayoffschedules);
    }*/
}
