<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\reviews;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
                $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:4',
                    'phone' => 'required|string|max:255',
                ]);

                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'phone' => $request->phone,
                    'user_type' => $request->user_type,
                    
                ]);

                // $data = $request->all();
                // $data['password'] = Hash::make($data['password']);
                // $user = User::create($data);

                return response()->json([
                    'user' => $user,
                    'token' => $user->createToken('token-name')->plainTextToken,
                ], 201);
    }
    public function Login(Request $request)
    {
                $request->validate([
                    'email' => 'required|string|email|max:255',
                    'password' => 'required|string|min:4',
                ]);
                $user = User::where('email', $request->email)->first();

                if (! $user || ! Hash::check($request->password, $user->password)){
                    return response()->json([
                        'email' => ['The provided credentials are incorrect.'],
                    ]);
                }
                return response()->json([
                    'user' => $user,
                    'token' => $user->createToken('token-name')->plainTextToken,
                ]);
   
}
public function reviews(Request $request)
{
            $request->validate([
                'name' => 'required|string|max:255',
                'text' => 'required|string|min:4',
            ]);
            $user = Reviews::create([
                'name' => $request->name,
                'text' => $request->text]);
            
            return response()->json($user);
            
            
}}