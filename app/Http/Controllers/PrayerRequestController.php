<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrayerRequest;

class PrayerRequestController extends Controller
{
    public function create()
    {
        return view('prayer-request');
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'text_request' => 'required|string',
        ]);

        PrayerRequest::create($request->all());

        return redirect()->route('prayer_request.create')->with('success', 'Prayer request submitted successfully.');
    }
}
