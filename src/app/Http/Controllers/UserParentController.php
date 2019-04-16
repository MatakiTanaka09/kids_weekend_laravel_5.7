<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserParent;
use App\Http\Resources\User\User as UserResource;
use App\Http\Resources\User\UserParent as UserParentResource;
use App\Http\Resources\User\UserDetail\UserParent as UserParentDetailResource;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserParentController extends Controller
{
    public function me()
    {
        $id = optional(auth()->user())->id;
        if(UserParent::where('user_id', '=', $id)->exists()) {
            $user = UserParentResource::collection(
                UserParent::with(['user', 'userChild'])
                    ->where('user_id', '=', $id)
                    ->get()
            );
            return $user;
        }
        else {
            return null;
        }

    }

    public function index()
    {
        return UserParentResource::collection(
            UserParent::with(['user', 'userChild', 'childParent'])->get()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $userParent = new UserParent();
        $userParent->fill($request->json()->all());
        $userParent->user_id = $user_id;
        $userParent->save();
        return $userParent;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userParent=UserParent::findOrFail($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userParent=UserParent::findOrFail($id);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $userParent=UserParent::findOrFail($id);
        $userParent->last_name  = $request->last_name;
        $userParent->first_name = $request->first_name;
        $userParent->last_kana  = $request->last_kana;
        $userParent->first_kana = $request->first_kana;
        $userParent->email      = $request->email;
        $userParent->tel        = $request->tel;
        $userParent->sex        = $request->sex;
        $userParent->zip_code1  = $request->zip_code1;
        $userParent->zip_code2  = $request->zip_code2;
        $userParent->state      = $request->state;
        $userParent->city       = $request->city;
        $userParent->address1   = $request->address1;
        $userParent->address2   = $request->address2;
        $userParent->save();
        return $userParent;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userParent=UserChild::findOrFail($id);
        $userParent->delete();
    }

    public function getAuthenticatedUser()
    {
        $user_id = optional(auth()->user())->id;
        if (!$user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }
        $userParent = UserParentDetailResource::collection(
            UserParent::with(['user', 'userChild'])->where('user_id', '=', $user_id)->get()
        );
        return $userParent;
    }
}
