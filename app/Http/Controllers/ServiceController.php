<?php

namespace App\Http\Controllers;

use App\Department;
use App\Service;
use App\TimeSchedule;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.list')->with('services', Service::all());
    }

    public function create()
    {
        return view('services.create')->with('departments', Department::all());
    }
    public function store(Request $request){
        Service::create([
            'department_id' => $request->department,
            'name' => $request->name,
            'charge' => $request->charge,
            'doctor_commission' => $request->commission,
        ]);

        // flash message
        session()->flash('success', 'New Service Added Successfully.');
        // redirect user
        return redirect(route('services.index'));
    }

    public function show(Service $service)
    {
        return view('services.show')->with('service', $service);
    }

    public function edit(Service $service)
    {
        return view('services.create')
            ->with('departments', Department::all())
            ->with('service', $service);
    }

    public function update(Request $request, Service $service)
    {

        $service->update([
            'department_id' => $request->department,
            'name' => $request->name,
            'charge' => $request->charge,
            'doctor_commission' => $request->commission,
        ]);

        // flash message
        session()->flash('success', 'Service Updated Successfully.');
        // redirect user
        return redirect(route('services.index'));
    }

    public function destroy(Service $service)
    {

        $service->delete();

        // flash message
        session()->flash('success', 'Service Deleted Successfully.');
        // redirect user
        return redirect(route('services.index'));
    }
}
