<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionReport extends Controller
{

    public function create()
    {
        return view('admin.mission-report');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'mission_id' => 'required|exists:missions,id',
            'report_title' => 'required|string|max:255',
            'report_text' => 'required|string',
        ]);

        MissionReport::create($request->all());

        // return redirect()->route('mission-report.create')->with('success', 'Mission report submitted successfully.');
    }
}
