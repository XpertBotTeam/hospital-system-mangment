<?php

namespace App\Http\Controllers;

use App\Bed;
use App\BedAllotment;
use App\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BedController extends Controller
{

    public function index()
    {
        foreach (BedAllotment::all() as $bedAllotment){

            $start_date_time = $bedAllotment->start_date.' '.$bedAllotment->start_time;
            $end_date_time = $bedAllotment->end_date.' '.$bedAllotment->end_time;

            $bed = $bedAllotment->bed;
            if (Carbon::parse($start_date_time)->lt(now()) && Carbon::parse($end_date_time)->gt(now())){
                $bedAllotment->update([
                    'status'=> 'In Allotment'
                ]);
                $bed->update([
                    'status'=> 'In Allotment'
                ]);
            } else if(Carbon::parse($start_date_time)->lt(now()) && Carbon::parse($end_date_time)->lt(now())) {
                $bedAllotment->update([
                    'status'=> 'Old Allotment'
                ]);
                $bed->update([
                    'status'=> 'available'
                ]);
            } else {
                $bedAllotment->update([
                    'status'=> 'Up Coming Allotment'
                ]);
                $bed->update([
                    'status'=> 'available'
                ]);
            }

        }
        return view('bedallotments.beds.list')->with('beds', Bed::all());
    }


    public function create()
    {
        return view('bedallotments.beds.create')->with('departments',Department::all());
    }


    public function store(Request $request)
    {
        Bed::create([
            'department_id' => $request->department,
            'code' => $request->code,
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        // flash message
        session()->flash('success', 'New Bed Added Successfully.');
        // redirect user
        return redirect(route('beds.index'));
    }


    public function show(Bed $bed)
    {
        return view('bedallotments.beds.show')->with('bed', $bed);

    }


    public function edit(Bed $bed)
    {
        return view('bedallotments.beds.create')->with('departments',Department::all())->with('bed',$bed);
    }


    public function update(Request $request, Bed $bed)
    {
        $bed->update([
            'department_id' => $request->department,
            'code' => $request->code,
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        // flash message
        session()->flash('success', 'Bed Updated Successfully.');
        // redirect user
        return redirect(route('beds.index'));
    }


    public function destroy(Bed $bed)
    {
        $bed->delete();

        // flash message
        session()->flash('success', 'Bed Deleted Successfully.');
        // redirect user
        return redirect(route('beds.index'));
    }
}
