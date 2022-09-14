<?php

namespace App\Http\Controllers;

use App\LapTemplate;
use Illuminate\Http\Request;

class LapTemplateController extends Controller
{

    public function index()
    {
        return view('lap.laptemplates.list')->with('laptemplates',LapTemplate::all());
    }

    public function create()
    {
        return view('lap.laptemplates.create');
    }

    public function store(Request $request)
    {
        LapTemplate::create([
            'name'=>$request->name,
            'template'=>$request->template
        ]);
        // flash message
        session()->flash('success', 'New Lap Template Added Successfully.');
        // redirect user
        return redirect(route('laptemplates.index'));
    }

    public function show(LapTemplate $laptemplate)
    {
        return view('lap.laptemplates.show')->with('laptemplate',$laptemplate);
    }

    public function edit(LapTemplate $laptemplate)
    {
        return view('lap.laptemplates.create')->with('laptemplate',$laptemplate);
    }

    public function update(Request $request, LapTemplate $laptemplate)
    {
        $laptemplate->update($request->only('name','template'));
        // flash message
        session()->flash('success', 'Lap Template updated Successfully.');
        // redirect user
        return redirect(route('laptemplates.index'));
    }

    public function destroy(LapTemplate $laptemplate)
    {
        $laptemplate->delete();
        // flash message
        session()->flash('success', ' Lap Template Deleted Successfully.');
        // redirect user
        return redirect(route('laptemplates.index'));
    }
}
