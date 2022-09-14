<?php

namespace App\Http\Controllers;

use App\Accountant;
use App\Department;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AccountantController extends Controller
{
    public function index()
    {
        return view('users.accountants.list')->with('accountants', User::accountant()->get())->with('departments',Department::all());

    }


    public function create()
    {
        return view('users.accountants.create')->with('departments',Department::all());

    }

    public function store(Request $request)
    {

        $accountant = User::create([
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
            'type' => 'accountant',
        ]);

        if($request->picture){
            $pic = $request->picture->store('accountants_pictures');
            $accountant->picture = $pic;
            $accountant->save();
        }

        if ($request->departments){
            $accountant->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Accountant Added Successfully.');
        // redirect user
        return redirect(route('accountants.index'));
    }

    public function show(User $accountant)
    {
        return view('users.accountants.show')->with('accountant', $accountant)->with('departments',Department::all());

    }

    public function edit(User $accountant)
    {
        return view('users.accountants.create')->with('accountant', $accountant)->with('departments',Department::all());

    }

    public function update(Request $request, User $accountant)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('accountants_pictures');

            Storage::delete($accountant->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $accountant->departments()->sync($request->departments);
        }

        $accountant->update($data);
        // flash message
        session()->flash('success', 'Accountant Info Updated Successfully.');
        // redirect user
        return redirect(route('accountants.index'));
    }

    public function destroy(User $accountant)
    {
        $accountant->departments()->detach();
        $accountant->timeSchedules()->delete();
        Storage::delete($accountant->picture);
        $accountant->delete();
        // flash message
        session()->flash('success', 'Accountant Deleted Successfully.');
        // redirect user
        return redirect(route('accountants.index'));
    }
}
