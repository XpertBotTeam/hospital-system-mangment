<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\TimeSchedule;
use App\User;
use Illuminate\Http\Request;

class TimeScheduleController extends Controller
{
    public function getTimeByTimeSchedule(Request $request)
    {
        $doctor = User::find($request->doctor_id);
        $timeSchedules = $doctor->timeSchedules;
        $TS = collect();
        foreach ($timeSchedules as $timeSchedule) {
            if ($timeSchedule->week_num == $request->week_num) {
                $TS->push($timeSchedule);
            }
            $json = $TS->toJson();
        }

        return response()->json(['html' => $json]);
    }



    public function createtimeScheduleForDoctor(User $doctor)
    {
        return view('timeschedules.create')->with('doctor', $doctor);
    }

    public function timeSchedulesForDoctor(User $doctor)
    {
        return view('timeschedules.list')->with('doctor', $doctor);
    }

    public function index()
    {
        return view('timeschedules.list')->with('timeschedules', TimeSchedule::all());
    }

    public function create()
    {
        return view('timeschedules.create');
    }

    public function store(Request $request)
    {
        if ($request->week_day == 'saturday') {
            $week_num = 6;
        } elseif ($request->week_day == 'sunday') {
            $week_num = 0;
        } elseif ($request->week_day == 'monday') {
            $week_num = 1;
        } elseif ($request->week_day == 'tuesday') {
            $week_num = 2;
        } elseif ($request->week_day == 'wednesday') {
            $week_num = 3;
        } elseif ($request->week_day == 'thursday') {
            $week_num = 4;
        } elseif ($request->week_day == 'friday') {
            $week_num = 5;
        }

        $timeSchedule = TimeSchedule::create([
            'week_day' => $request->week_day,
            'week_num' => $week_num,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'duration' => $request->duration,
            'user_id' => $request->user,
        ]);

        // flash message
        session()->flash('success', 'New Time Schedule Added Successfully.');
        // redirect user
        return redirect(route('timeschedules.index'));
    }

    public function show(TimeSchedule $timeschedule)
    {
        return view('timeschedules.show')->with('timeschedule', $timeschedule);
    }

    public function edit(TimeSchedule $timeschedule)
    {
        return view('timeschedules.create')->with('timeschedule', $timeschedule);
    }

    public function update(Request $request, TimeSchedule $timeschedule)
    {

        $timeschedule->update([
            'week_day' => $request->week_day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'duration' => $request->duration,
            'user_id' => $request->doctor,
        ]);

        // flash message
        session()->flash('success', 'Time Schedule Updated Successfully.');
        // redirect user
        return redirect(route('timeschedules.index'));
    }

    public function destroy(TimeSchedule $timeschedule)
    {
        $timeschedule->delete();

        // flash message
        session()->flash('success', 'Time Schedule Deleted Successfully.');
        // redirect user
        return redirect(route('timeschedules.index'));
    }


}
