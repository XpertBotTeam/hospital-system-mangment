<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Finance;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('financial.expenses.list')->with('expenses',Expense::all());
    }

    public function create()
    {
        return view('financial.expenses.create');
    }

    public function store(Request $request)
    {

        Expense::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'note' => $request->note,
        ]);

        $f = Finance::find(1);
        $t = $f->total_money;
        $f->update([
            'total_money' => $t - $request->amount,
        ]);

        // flash message
        //session()->flash('success', 'New Payment Added Successfully.');
        // redirect user
        return redirect(route('expenses.index'));
    }

}
