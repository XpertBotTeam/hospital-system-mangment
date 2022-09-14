<?php

namespace App\Http\Controllers;

use App\Department;
use App\Nurse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class NurseController extends Controller
{
    public function index()
    {
        return view('users.nurses.list')->with('nurses', User::nurse()->get())->with('departments',Department::all());

    }


    public function create()
    {
        return view('users.nurses.create')->with('departments',Department::all());

    }

    public function store(Request $request)
    {
        $nurse = User::create([
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
            'type' => 'nurse',
        ]);

        if($request->picture){
            $pic = $request->picture->store('nurses_pictures');
            $nurse->picture = $pic;
            $nurse->save();
        }

        if ($request->departments){
            $nurse->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Nurse Added Successfully.');
        // redirect user
        return redirect(route('nurses.index'));
    }

    public function show(User $nurse)
    {
        return view('users.nurses.show')->with('nurse', $nurse)->with('departments',Department::all());

    }

    public function edit(User $nurse)
    {
        return view('users.nurses.create')->with('nurse', $nurse)->with('departments',Department::all());

    }

    public function update(Request $request, User $nurse)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('nurses_pictures');

            Storage::delete($nurse->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $nurse->departments()->sync($request->departments);
        }

        $nurse->update($data);
        // flash message
        session()->flash('success', 'Nurse Info Updated Successfully.');
        // redirect user
        return redirect(route('nurses.index'));
    }

    public function destroy(User $nurse)
    {
        $nurse->departments()->detach();
        $nurse->timeSchedules()->delete();
        Storage::delete($nurse->picture);
        $nurse->delete();
        // flash message
        session()->flash('success', 'Nurse Deleted Successfully.');
        // redirect user
        return redirect(route('nurses.index'));
    }
}
