<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Method to display the login page
    public function login()
    {
        return view('home'); // Make sure you have a `login.blade.php` in the `resources/views` folder.
    }

    // Method to handle login submission
    public function loginUser(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // Check if user exists and passwords match
        if ($user && Hash::check($request->password, $user->password)) {
            // Create and return an access token
            $token = $user->createToken('access_token')->plainTextToken;

            return response()->json([
                'status' => 'success',
                'access_token' => $token
            ]);
        }

        // Return error if credentials are invalid
        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }
}
