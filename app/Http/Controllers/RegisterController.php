<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'application_date' => 'required|date',
            'membership_applied_for' => 'required|string',
            'postal_address' => 'required|string',
            'contact_info' => 'required|string',
            'marital_status' => 'required|string',
            'date_of_salvation' => 'required|date',
            'where_do_you_go_to_church' => 'required|string',
            'name_of_your_pastor' => 'required|string',
            'do_serves_in_church' => 'required|boolean',
            'which_department_of_church' => 'required|string',
            'school_or_work' => 'required|string',
            'location_of_school_or_work' => 'required|string',
            'career_path' => 'required|string',
            'job_or_vocation' => 'required|string',
            'special_gifts' => 'required|string',
            'receive_updates' => 'required|array',
            'terms_and_condition' => 'required|accepted',

        ]);

        // Create the user
        $user = User::create($attributes);

        // Login the user
        Auth::login($user);

        // Redirect to dashboard
        return back('Registered');
    }
}
