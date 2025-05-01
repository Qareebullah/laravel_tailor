<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as BaseController; // Import the base controller class
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController // Extend the base controller
{
    // Registration Method
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return response()->json(['message' => 'User registered successfully'], 201);
    }

    // Login Method
    public function login(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Find the user by email
        $user = User::where('email', $validated['email'])->first();

        // Check if user exists and the password matches
        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Generate a token (using Laravel Sanctum or Passport)
        // Assuming you're using Sanctum:
        $token = $user->createToken('API Token')->plainTextToken;

        // Return the token with success message
        return response()->json([
            'message' => 'Login successful',
            'token' => $token
        ], 200);
    }
}
