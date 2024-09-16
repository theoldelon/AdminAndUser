<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // Show the login form
    public function index()
    {
        return view('admin.login');
    }

    // Handle admin authentication
    public function authenticate(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:20',
        ]);

        // Attempt to authenticate the admin using the 'admin' guard
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            // Ensure the logged-in user is an admin
            if (Auth::guard('admin')->user()->role != 'admin') {
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('error', 'You are not authorized to access this area.');
            }

            // Authentication passed, redirect to admin dashboard
            return redirect()->route('admin.dashboard')->with('success', 'You are logged in as admin.');
        }

        // Authentication failed, redirect back to login with error
        return redirect()->route('admin.login')
            ->withInput()
            ->withErrors(['login_failed' => 'Invalid email or password']);
    }

    // Logout admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'You have been logged out.');
    }
}
