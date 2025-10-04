<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Register
    public function register(Request $request)
{
    // Validate incoming request
    $validated = $request->validate([
        'name'      => 'required|string|max:255',
        'email'     => 'required|string|email|max:255|unique:users',
        'password'  => 'required|string|min:8',
        'phone'     => 'required|string|max:20',
        'role'      => 'required|in:Admin,Staff,Tenant',
        'is_active' => 'required|boolean',
    ]);

    // Create user
    $user = \App\Models\User::create([
        'name'      => $validated['name'],
        'email'     => $validated['email'],
        'password'  => \Illuminate\Support\Facades\Hash::make($validated['password']),
        'phone'     => $validated['phone'],
        'role'      => $validated['role'],
        'is_active' => $validated['is_active'],
    ]);

    // Create token with Sanctum
    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'status'  => 'success',
        'message' => 'User registered successfully',
        'user'    => $user,
        'token'   => $token,
    ], 201);
}

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out']);
    }
}
