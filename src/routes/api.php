<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "v1", "middleware" => "api"], function () {
    Route::post("/auth/register", "Auth\RegisterController@register");
    Route::post("/auth/login", "Auth\LoginController@login");
    Route::post("/password/email", "Auth\ForgotPasswordController@sendResetLinkEmail");
    Route::post("/password/reset/{token}", "Auth\ResetPasswordController@reset");
    Route::get("/email/verify/{ID}", "Auth\VerificationController@verify")->name("verification.verify");
    Route::post("/email/resend", "Auth\VerificationController@resend")->name("verification.resend");

    Route::get("/test", "UserParentController@index");
    Route::get("/auth/show", "ChildParentController@index");
    Route::get("/auth/parent", "UserParentController@index");

    Route::get("/events", "EventController@index");
    Route::post("/events", "EventController@store");
    Route::get("/events/{EVENT_ID}", "EventController@show");
    Route::patch("/events/{EVENT_ID}", "EventController@update");
    Route::delete("/events/{EVENT_ID}", "EventController@destroy");
    Route::get("/events/search/top", "SearchController@searchTop");
    Route::get("/events/search/eventList", "SearchController@searchEventList");
    Route::get("/events/search/eventDetail", "SearchController@searchEventDetail");

    Route::post("/book", "BookController@store");

    Route::group(["middleware" => ["jwt.auth"]], function () {
        Route::post("/auth/logout", "Auth\AuthController@logout");
        Route::post("/auth/refresh", "Auth\AuthController@refresh");
        Route::get("/auth/me", "UserParentController@me");
    });
});
