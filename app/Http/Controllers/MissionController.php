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


    // create a mission
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


    // public function destroy(Mission $mission)
    // {
    //     $mission->delete();
    //     return redirect()->back()->with('success', 'Mission deleted successfully');
    // }
}
