<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserParent;
use App\Http\Resources\User\UserParent as UserParentResource;

class UserParentController extends Controller
{
    public function me()
    {
        $id = auth()->user()->id;
        return UserParentResource::collection(
            UserParent::where('user_id', $id)->get()
        );
    }

    public function index()
    {
        return UserParentResource::collection(
            UserParent::with(['user', 'userChild'])->get()
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
        $userParent = new UserParent();
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

}
