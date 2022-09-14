<?php

namespace App\Http\Controllers;

use App\MedicineCategory;
use Illuminate\Http\Request;

class MedicineCategoryController extends Controller
{
    public function index()
    {
        return view('medicines.categories.list')->with('categories', MedicineCategory::all());
    }

    public function create()
    {
        return view('medicines.categories.create');
    }

    public function store(Request $request)
    {

        MedicineCategory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // flash message
        session()->flash('success', 'New Medicine Category Added Successfully.');
        // redirect user
        return redirect(route('medicines.categories.index'));
    }

    public function show(MedicineCategory $medicineCategory)
    {
        return view('medicines.categories.show')->with('category', $medicineCategory);
    }

    public function edit(MedicineCategory $medicineCategory)
    {
        return view('medicines.categories.create')->with('category', $medicineCategory);
    }

    public function update(Request $request, MedicineCategory $medicineCategory)
    {
        $medicineCategory->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // flash message
        session()->flash('success', 'Medicine Category Updated Successfully.');
        // redirect user
        return redirect(route('medicines.categories.index'));
    }

    public function destroy(MedicineCategory $medicineCategory)
    {
        $medicineCategory->medicines()->detach();
        $medicineCategory->delete();
        // flash message
        session()->flash('success', ' Medicine Category Deleted Successfully.');
        // redirect user
        return redirect(route('medicines.categories.index'));
    }
}
