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

        $data = User::all();
        $missions = Mission::all();
        $assignedMembers = MissionAssignment::with('member', 'mission')->get();

        return view('admin.mission-assignment', compact('data', 'missions', 'assignedMembers'));
    }

    public function assignMembers(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:users,id',
            'mission_id' => 'required|exists:missions,id',
        ]);

        MissionAssignment::create([
            'member_id' => $request->member_id,
            'mission_id' => $request->mission_id,
        ]);

        return redirect()->back()->with('success', 'Member assigned to mission successfully.');
    }
}
