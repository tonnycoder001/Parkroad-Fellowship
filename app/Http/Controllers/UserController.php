<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // get all users from the database
    // return view with all users
    public function index()
    {
        $users = User::all();
        return view('admin.members', compact('users'));
    }


    // delete a user
    public function destroy(User $user)
    {
        $user->delete();
        // return redirect()->route('admin.members')->with('success', 'User deleted successfully');
    }
}
