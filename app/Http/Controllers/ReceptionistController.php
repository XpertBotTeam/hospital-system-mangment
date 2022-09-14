<?php

namespace App\Http\Controllers;

use App\Department;
use App\Receptionist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ReceptionistController extends Controller
{
    public function index()
    {
        return view('users.receptionists.list')->with('receptionists', User::receptionist()->get())->with('departments',Department::all());

    }


    public function create()
    {
        return view('users.receptionists.create')->with('departments',Department::all());

    }

    public function store(Request $request)
    {
        $receptionist = User::create([
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
            'type' => 'receptionist',
        ]);

        if($request->picture){
            $pic = $request->picture->store('receptionists_pictures');
            $receptionist->picture = $pic;
            $receptionist->save();
        }

        if ($request->departments){
            $receptionist->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Receptionist Added Successfully.');
        // redirect user
        return redirect(route('receptionists.index'));
    }

    public function show(User $receptionist)
    {
        return view('users.receptionists.show')->with('receptionist', $receptionist)->with('departments',Department::all());

    }

    public function edit(User $receptionist)
    {
        return view('users.receptionists.create')->with('receptionist', $receptionist)->with('departments',Department::all());

    }

    public function update(Request $request, User $receptionist)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('receptionists_pictures');

            Storage::delete($receptionist->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $receptionist->departments()->sync($request->departments);
        }

        $receptionist->update($data);
        // flash message
        session()->flash('success', 'Receptionist Info Updated Successfully.');
        // redirect user
        return redirect(route('receptionists.index'));
    }

    public function destroy(User $receptionist)
    {
        $receptionist->departments()->detach();
        $receptionist->timeSchedules()->delete();
        Storage::delete($receptionist->picture);
        $receptionist->delete();
        // flash message
        session()->flash('success', 'Receptionist Deleted Successfully.');
        // redirect user
        return redirect(route('receptionists.index'));
    }
}
