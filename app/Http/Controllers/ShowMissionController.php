<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class ShowMissionController extends Controller
{
    public function showmission()
    {

        $data = Mission::all();



        return view('admin.mission-assignment', compact('data'));
    }
}
