<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            if(Auth::attempt($request->only('username', 'password'))){
                /** @var User $user */
                $user = Auth::user();
                $token = $user->createToken('app')->accessToken;

                return response([
                    'message' => 'Success',
                    'token' => $token,
                    'user' => $user
                ]);
            }
        }catch (\Exception $exception){
            return response([
                'message' => $exception->getMessage()
            ], 400);
        }
        return response([
            'message'  => 'Invalid username/Password'
        ], 401);
        }

        public function user()
        {
            return Auth::user();
        }
    

        public function register(Request $request)
    {
        try {

            $user = User::create([
                'username' => $request->input('username'),
                'role' => $request->input('role'),
                'division' => $request->input('division'),
                'password' => Hash::make($request->input('password')),

            ]);

            return $user;
        }catch (\Exception $exception) {
            return response([
                'message' => $exception->getMessage()
            ], 400);
        }
    }
}
