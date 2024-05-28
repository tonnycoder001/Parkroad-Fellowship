<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;

class RegisterController extends Controller
{


    public function index()
    {
        return view('auth.register');
    }


    // create a new users
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'application_date' => 'required|date',
            'membership_applied_for' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'postal_address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact_info' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'date_of_salvation' => 'nullable|date',
            'where_do_you_go_to_church' => 'nullable|string|max:255',
            'name_of_your_pastor' => 'nullable|string|max:255',
            'serves_in_church' => 'required|string|max:255',
            'department_of_church' => 'nullable|string|max:255',
            'school_or_work' => 'nullable|string|max:255',
            'location_of_school_or_work' => 'nullable|string|max:255',
            'career_path' => 'nullable|string|max:255',
            'special_gifts' => 'nullable|string',
            'receive_updates' => 'required|string',
            'preferred_updates_mode' => 'required|string',
            'interested_updates' => 'nullable|array',
            'accept_terms' => 'required|string|in:yes',
        ]);

        /*This code snippet checks if the interested_updates field is set in the $validatedData array.
         If it is set (meaning it exists and is not null), it encodes the value of interested_updates as a JSON string using json_encode().*/
        if (isset($validatedData['interested_updates'])) {
            $validatedData['interested_updates'] = json_encode($validatedData['interested_updates']);
        }

        // error if user does not accept terms and conditions
        if ($request->accept_terms !== 'yes') {
            return redirect()->back()->withErrors(['accept_terms' => 'You must accept the terms and conditions to register.']);
        }

        // creats a new user with the validated data
        User::create($validatedData);

        // redirects the user to dashboard
        return redirect('/admin.admin-dashboard');
    }
}
