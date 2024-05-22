<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function create()
    {
        return view('mission');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'location' => 'required|string',
            'date' => 'required|date',
        ]);

        Mission::create($request->all());

        return redirect()->route('event.create')->with('success', 'Event created successfully.');
    }
}
