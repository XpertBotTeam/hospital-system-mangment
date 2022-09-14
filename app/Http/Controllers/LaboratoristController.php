<?php

namespace App\Http\Controllers;

use App\Department;
use App\Laboratorist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LaboratoristController extends Controller
{
    public function index()
    {
        return view('users.laboratorists.list')->with('laboratorists', User::laboratorist()->get())->with('departments',Department::all());

    }


    public function create()
    {
        return view('users.laboratorists.create')->with('departments',Department::all());

    }

    public function store(Request $request)
    {
        $laboratorist = User::create([
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
            'type' => 'laboratorist',
        ]);

        if($request->picture){
            $pic = $request->picture->store('laboratorists_pictures');
            $laboratorist->picture = $pic;
            $laboratorist->save();
        }

        if ($request->departments){
            $laboratorist->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Laboratorist Added Successfully.');
        // redirect user
        return redirect(route('laboratorists.index'));
    }

    public function show(User $laboratorist)
    {
        return view('users.laboratorists.show')->with('laboratorist', $laboratorist)->with('departments',Department::all());

    }

    public function edit(User $laboratorist)
    {
        return view('users.laboratorists.create')->with('laboratorist', $laboratorist)->with('departments',Department::all());

    }

    public function update(Request $request, User $laboratorist)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('laboratorists_pictures');

            Storage::delete($laboratorist->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $laboratorist->departments()->sync($request->departments);
        }

        $laboratorist->update($data);
        // flash message
        session()->flash('success', 'Laboratorist Info Updated Successfully.');
        // redirect user
        return redirect(route('laboratorists.index'));
    }

    public function destroy(User $laboratorist)
    {
        $laboratorist->departments()->detach();
        $laboratorist->timeSchedules()->delete();
        Storage::delete($laboratorist->picture);
        $laboratorist->delete();
        // flash message
        session()->flash('success', 'Laboratorist Deleted Successfully.');
        // redirect user
        return redirect(route('laboratorists.index'));
    }
}
