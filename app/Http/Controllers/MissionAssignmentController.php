<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mission;
use Illuminate\Http\Request;
use App\Models\MissionAssignment;
use Illuminate\Support\Facades\DB;

class MissionAssignmentController extends Controller
{
    public function create()
    {
        return view('admin.mission-assignment');
    }

    public function show()
    {

        // fetch data from the database, then render it to the view
        $data = User::all();
        $missions = Mission::all();
        return view('admin.mission-assignment', compact('data', 'missions'));
    }


    // assign members to a mission
    public function assign(Request $request)
    {
        $request->validate([
            'member_ids' => 'required|array',
            'member_ids.*' => 'exists:users,id',
            'mission_id' => 'required|exists:missions,id',
        ]);

        $mission = Mission::find($request->mission_id);

        // Assign members to the mission
        $mission->users()->attach($request->member_ids);


        return redirect()->back()->with('success', 'Members assigned to mission successfully');
    }
}
