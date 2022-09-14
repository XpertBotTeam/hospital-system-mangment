<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function getUserByUserType(Request $request)
    {
        if ($request->usertype == 'doctor') {
            $users = User::doctor()->get();
            $TS = collect();
            foreach ($users as $user) {
                $TS->push($user);
            }
            $json = $TS->toJson();
            return response()->json(['html' => $json]);
        } elseif ($request->usertype == 'patient') {
            $users = User::patient()->get();
            $TS = collect();
            foreach ($users as $user) {
                $TS->push($user);
            }
            $json = $TS->toJson();
            return response()->json(['html' => $json]);
        } elseif ($request->usertype == 'nurse') {
            $users = User::nurse()->get();
            $TS = collect();
            foreach ($users as $user) {
                $TS->push($user);
            }
            $json = $TS->toJson();
            return response()->json(['html' => $json]);
        } elseif ($request->usertype == 'accountant') {
            $users = User::accountant()->get();
            $TS = collect();
            foreach ($users as $user) {
                $TS->push($user);
            }
            $json = $TS->toJson();
            return response()->json(['html' => $json]);
        } elseif ($request->usertype == 'pharmacist') {
            $users = User::pharmacist()->get();
            $TS = collect();
            foreach ($users as $user) {
                $TS->push($user);
            }
            $json = $TS->toJson();
            return response()->json(['html' => $json]);
        } elseif ($request->usertype == 'laboratorist') {
            $users = User::laboratorist()->get();
            $TS = collect();
            foreach ($users as $user) {
                $TS->push($user);
            }
            $json = $TS->toJson();
            return response()->json(['html' => $json]);
        } elseif ($request->usertype == 'receptionist') {
            $users = User::receptionist()->get();
            $TS = collect();
            foreach ($users as $user) {
                $TS->push($user);
            }
            $json = $TS->toJson();
            return response()->json(['html' => $json]);
        }
    }
}
