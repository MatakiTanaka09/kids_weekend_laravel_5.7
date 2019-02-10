<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $validate = $this->validateEmail($request->all());

        if ($validate->fails()) {
            return new JsonResponse('Email is Invalid');
        }

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($request, $response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }

    protected function validateEmail(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email',
        ]);
    }

    protected function sendResetLinkResponse(): JsonResponse
    {
        return new JsonResponse('Send Reset Mail');
    }

    protected function sendResetLinkFailedResponse(Request $request, $response): JsonResponse
    {
        return new JsonResponse(trans($response));
    }
}
