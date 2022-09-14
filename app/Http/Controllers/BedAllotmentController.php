<?php

namespace App\Http\Controllers;

use App\Bed;
use App\BedAllotment;
use App\Patient;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class BedAllotmentController extends Controller
{
    public function getBedAllotmentsByDate(Request $request)
    {
        if ($request->start && $request->end) {
            //$bedallotments = BedAllotment::all();
            $TS = collect();
            $arr = [];
            foreach (BedAllotment::all() as $bedAllotment) {
                $start_date_time = $bedAllotment->start_date . ' ' . $bedAllotment->start_time;
                $end_date_time = $bedAllotment->end_date . ' ' . $bedAllotment->end_time;
                if (Carbon::parse($request->start)->between($start_date_time, $end_date_time) || Carbon::parse($request->end)->between($start_date_time, $end_date_time)) {
                    array_push($arr, $bedAllotment->bed_id);
                }
            }

            foreach (Bed::all() as $bed) {
                if ($bed->status != 'Unavailable') {
                    if (count($arr) > 0) {
                        for ($i = 0; $i < count($arr); $i++) {
                            if ($bed->id != $arr[$i]) {
                                $TS->push($bed);
                            }
                        }
                    } else {
                        $TS->push($bed);
                    }
                }
            }

            $json = $TS->toJson();
        }

        return response()->json(['html' => $json]);
    }

    public function index()
    {

        return view('bedallotments.list')->with('bedallotments', BedAllotment::all());
    }


    public function create()
    {
        return view('bedallotments.create')->with('beds', Bed::all())->with('patients', User::patient()->get());
    }


    public function store(Request $request)
    {
        BedAllotment::create([
            'bed_id' => $request->bed,
            'patient_id' => $request->patient,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,
            'status' => 'incoming',
        ]);

        // flash message
        session()->flash('success', 'New Bed Allotment Added Successfully.');
        // redirect user
        return redirect(route('bedallotments.index'));
    }


    public function show(BedAllotment $bedallotment)
    {
        return view('bedallotments.show')->with('bedallotment', $bedallotment);
    }


    public function edit(BedAllotment $bedallotment)
    {
        return view('bedallotments.create')->with('beds', Bed::all())->with('patients', Patient::all())->with('bedallotment', $bedallotment);
    }


    public function update(Request $request, BedAllotment $bedallotment)
    {
        $bedallotment->update([
            'bed_id' => $request->bed,
            'patient_id' => $request->patient,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,
            'status' => 'incoming',
        ]);

        // flash message
        session()->flash('success', 'Bed Allotment Updated Successfully.');
        // redirect user
        return redirect(route('bedallotments.index'));
    }


    public function destroy(BedAllotment $bedallotment)
    {
        $bedallotment->delete();

        // flash message
        session()->flash('success', 'Bed Allotment Deleted Successfully.');
        // redirect user
        return redirect(route('bedallotments.index'));
    }
}
