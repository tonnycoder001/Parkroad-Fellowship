<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MissionAssignmentController extends Controller
{
    public function create()
    {
        return view('admin.mission-assignment');
    }
}
