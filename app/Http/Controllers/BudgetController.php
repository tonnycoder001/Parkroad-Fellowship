<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Mission;
use Illuminate\Http\Request;

class BudgetController extends Controller
{


    public function create()
    {
        return view('budget');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer',
            'mission_id' => 'required|exists:mission,id',
            'estimated_expenses' => 'required|integer',
            'funding_sources' => 'required|string',
            'actual_expenditures' => 'required|integer',
        ]);
        // $budget = new Budget();
        // $budget->amount = $request->amount;
        // $budget->estimated_expenses = $request->estimated_expenses;
        // $budget->funding_sources = $request->funding_sources;
        // $budget->actual_expenditures = $request->actual_expenditures;
        // $budget->mission_id = $request->mission_id;
        // $budget->save();

        Budget::create($request->all());

        return redirect()->route('budget.create')->with('success', 'Budget created successfully.');
    }
    // public function show($missionId)
    // {
    //     $mission = Mission::find($missionId);
    //     $budgets = $mission->budgets;

    //     return view('missions.show', compact('mission', 'budgets'));
    // }
}
