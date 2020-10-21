<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            if(Auth::attempt($request->only('username','password'))){
                /** @var user $user */
                $user = Auth::user();
                $token = $user->createToken('app')->accessToken;
                return response([
                    'message' => 'success',
                    'token' => $token,
                    'user' => $user,
                ]);
            }
        }catch (\Exception $exception) {
                return response([
                    'message' => $exception->getMessage()
                ], 401);
            }
    
            return response ([
                'message' => 'Invalid username/password'
            ], 401);
        }
    
}
