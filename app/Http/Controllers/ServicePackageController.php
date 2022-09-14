<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServicePackage;
use Illuminate\Http\Request;

class ServicePackageController extends Controller
{
    public function index()
    {
        return view('servicepackages.list')->with('servicepackages', ServicePackage::all());
    }

    public function create()
    {
        return view('servicepackages.create')->with('services', Service::all());
    }
    public function store(Request $request){
        $servicePackage = ServicePackage::create([
            'name' => $request->name,
            'charge' => $request->charge,
            'description' => $request->description,
            'doctor_commission' => $request->commission,
        ]);

        if ($request->services){
            foreach ($request->services as $d){
                if($d['service'] != 'Select Service') {
                    $servicePackage->services()->attach($d['service']);
                }
            }
        }

        // flash message
        session()->flash('success', 'New Service Package Added Successfully.');
        // redirect user
        return redirect(route('servicepackages.index'));
    }

    public function show(ServicePackage $servicePackage)
    {
        return view('servicepackages.show')->with('servicepackage', $servicePackage);
    }

    public function edit(ServicePackage $servicepackage)
    {
        return view('servicepackages.create')
            ->with('services', Service::all())
            ->with('servicepackage', $servicepackage);
    }

    public function update(Request $request, ServicePackage $servicepackage)
    {

        $servicepackage->update([
            'name' => $request->name,
            'charge' => $request->charge,
            'description' => $request->description,
            'doctor_commission' => $request->commission,
        ]);

        $servicepackage->services()->detach();

        if ($request->services){
            foreach ($request->services as $d){
                if($d['service'] != 'Select Service') {
                    $servicepackage->services()->attach($d['service']);
                }
            }
        }

        $servicepackage->update();
        // flash message
        session()->flash('success', 'Service Package Updated Successfully.');
        // redirect user
        return redirect(route('servicepackages.index'));
    }

    public function destroy(ServicePackage $servicepackage)
    {
        $servicepackage->services()->detach();
        $servicepackage->delete();

        // flash message
        session()->flash('success', 'Service Package Deleted Successfully.');
        // redirect user
        return redirect(route('servicepackages.index'));
    }
}
