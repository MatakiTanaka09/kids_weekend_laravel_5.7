<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\User as UserResource;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use JWTAuth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    private $authManager;

    /**
    * Where to redirect users after login.
    *
    * @var string
    */
//    protected $redirectTo = '/home';

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct(AuthManager $authManager)
    {
        $this->authManager = $authManager;
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');

        try {
            if(! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
        } catch(JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        $user = new UserResource(User::where('email', $request->email)->first());
        return response()->json(compact('user', 'token'));
    }
}
