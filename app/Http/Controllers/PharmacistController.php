<?php

namespace App\Http\Controllers;

use App\Department;
use App\Pharmacist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PharmacistController extends Controller
{
    public function index()
    {
        return view('users.pharmacists.list')->with('pharmacists', User::pharmacist()->get())->with('departments',Department::all());

    }


    public function create()
    {
        return view('users.pharmacists.create')->with('departments',Department::all());

    }

    public function store(Request $request)
    {
        $pharmacist = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'emergency' => $request->emergency,
            'type' => 'pharmacist',
        ]);

        if($request->picture){
            $pic = $request->picture->store('pharmacists_pictures');
            $pharmacist->picture = $pic;
            $pharmacist->save();
        }

        if ($request->departments){
            $pharmacist->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Pharmacist Added Successfully.');
        // redirect user
        return redirect(route('pharmacists.index'));
    }

    public function show(User $pharmacist)
    {
        return view('users.pharmacists.show')->with('pharmacist', $pharmacist)->with('departments',Department::all());

    }

    public function edit(User $pharmacist)
    {
        return view('users.pharmacists.create')->with('pharmacist', $pharmacist)->with('departments',Department::all());

    }

    public function update(Request $request, User $pharmacist)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('pharmacists_pictures');

            Storage::delete($pharmacist->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $pharmacist->departments()->sync($request->departments);
        }

        $pharmacist->update($data);
        // flash message
        session()->flash('success', 'Pharmacist Info Updated Successfully.');
        // redirect user
        return redirect(route('pharmacists.index'));
    }

    public function destroy(User $pharmacist)
    {
        $pharmacist->departments()->detach();
        $pharmacist->timeSchedules()->delete();
        Storage::delete($pharmacist->picture);
        $pharmacist->delete();
        // flash message
        session()->flash('success', 'Pharmacist Deleted Successfully.');
        // redirect user
        return redirect(route('pharmacists.index'));
    }
}
