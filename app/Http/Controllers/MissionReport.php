<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionReport extends Controller
{
    public function create()
    {
        return view('mission-report');
    }
}
