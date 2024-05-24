<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Mission;
use Illuminate\Http\Request;

class BudgetController extends Controller
{


    public function create()
    {
        return view('admin.budget');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer',
            // 'mission_id' => 'required|exists:mission,id',
            'estimated_expenses' => 'required|integer',
            'funding_sources' => 'required|string',
            'actual_expenditures' => 'required|integer',
        ]);


        Budget::create($request->all());

        return redirect()->route('budget.create')->with('success', 'Budget created successfully.');
    }
}
