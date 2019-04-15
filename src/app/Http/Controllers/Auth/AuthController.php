<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Resources\User\User as UserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function me()
    {
        $id = auth()->user()->id;
        $user = new UserResource(User::where('id', $id)->first());
        return $user;
    }
}
