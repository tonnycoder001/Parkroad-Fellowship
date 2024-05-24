<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionAssignmentController extends Controller
{
    public function create()
    {
        return view('mission-assignment');
    }
}
