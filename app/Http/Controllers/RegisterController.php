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


    public function register(Request $request)
    {
        // Validate the request data
        $attributes = $request->validate([
            'application_date' => 'required|date',
            'membership_applied_for' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'postal_address' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'contact_info' => 'required|string|max:255',
            'marital_status' => 'required|string',
            'date_of_salvation' => 'nullable|date',
            'where_do_you_go_to_church' => 'nullable|string|max:255',
            'name_of_your_pastor' => 'nullable|string|max:255',
            'serves_in_church' => 'required|string',
            'department_of_church' => 'nullable|string|max:255',
            'school_or_work' => 'nullable|string|max:255',
            'location_of_school_or_work' => 'nullable|string|max:255',
            'career_path' => 'nullable|string|max:255',
            'job_or_vocation' => 'nullable|string|max:255',
            'special_gifts' => 'nullable|string|max:255',
            'receive_updates' => 'nullable|array',
            'terms_and_condition' => 'required|boolean',
        ]);
        // Create the user
        $user = User::create($attributes);

        // Login the user
        Auth::login($user);


        // Redirect the user to a specific page, e.g., a thank you page
        return redirect('/dashboard');
    }
}
