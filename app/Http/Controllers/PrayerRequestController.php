<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrayerRequest;

class PrayerRequestController extends Controller
{
    public function create()
    {
        return view('admin.prayer-request');
    }

    // create a new prayer request
    public function store(Request $request)
    {
        $request->validate([
            'text_request' => 'required|string',
        ]);

        PrayerRequest::create($request->all());
    }
}
