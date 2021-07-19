<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {

        // $credentials = ["email" => $request->email, "password" => $request->password];
        // if (!Auth::attempt($credentials)) {
        //     return response()->json(['status_code' => 401, 'message' => 'unauthor'], 401);
        // }
        // $tokenResult = Auth::user()->createToken('my-app-token')->plainTextToken;
        // return response()->json(['status_code' => 200, 'token' => $tokenResult, "user" => Auth::user()]);


        $user = User::where('mobile_no', $request->mobile_no)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }
}
