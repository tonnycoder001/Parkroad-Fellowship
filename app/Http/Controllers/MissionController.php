<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function create()
    {
        return view('admin.mission');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'location' => 'required|string',
            'date' => 'required|date',
        ]);

        Mission::create($request->all());

        // return redirect()->route('admin-dashboard')->with('success', 'Event created successfully.');
    }

    // public function show($missionId)
    // {
    //     $mission = Mission::find($missionId);
    //     $budgets = $mission->budgets;

    //     $budgetId = 1;
    //     $budget = Budget::find($budgetId);
    //     $mission = $budget->mission;

    //     return view('mission', compact('mission', 'budgets'));
    // }
}
