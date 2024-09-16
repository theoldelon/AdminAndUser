<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show login form
    public function index()
    {
        return view('login');
    }
    // Authenticate login
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->route('account.login')
                ->withInput()
                ->withErrors($validator);
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to dashboard after login
            return redirect()->route('account.dashboard');  // Correct redirection
        } else {
            return redirect()->route('account.login')->withErrors(['login_failed' => 'Invalid credentials']);
        }
    }

    // Show registration form
    public function register()
    {
        return view('register');
    }

    // Handle registration
    public function processRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
    
        if ($validator->passes()) {
            // Create a new user and save
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'customer', // Default role
            ]);
    
            // Log the user in after registration
            Auth::login($user);
    
            // Redirect to dashboard
            return redirect()->route('account.login')->with('success', 'Registration successful! Welcome.');
        } else {
            // Return to registration form with validation errors
            return redirect()->route('account.register')
                ->withInput()
                ->withErrors($validator);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('account.login');
    }
    
}
