<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
  protected $redirectTo = '/home';

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
    $guard = $this->authManager->guard('api');
    $token = $guard->attempt([
      'email' =>  $request->get('email'),
      'password'  =>  $request->get('password'),
    ]);
    if (!$token) {
      return new JsonResponse(__('auth.failed'));
    }
    return new JsonResponse($token);
  }
}
