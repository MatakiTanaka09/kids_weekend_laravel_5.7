<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserParent;

class UserParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userParents = UserParent::orderBy('created_at', 'desc')->get();
        return view('userparents.index', ['userParents' => $userParents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userparents.create');
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
        $userParent->user_last_name  = $request->user_last_name;
        $userParent->family_id       = $request->family_id;
        $userParent->user_last_name  = $request->user_last_name;
        $userParent->user_first_name = $request->user_first_name;
        $userParent->user_last_kana  = $request->user_last_kana;
        $userParent->user_first_kana = $request->user_first_kana;
        $userParent->email           = $request->email;
        $userParent->tel             = $request->tel;
        $userParent->sex             = $request->sex;
        $userParent->u_zip_code1     = $request->u_zip_code1;
        $userParent->u_zip_code2     = $request->u_zip_code2;
        $userParent->u_state         = $request->u_state;
        $userParent->u_city          = $request->u_city;
        $userParent->u_address1      = $request->u_address1;
        $userParent->u_address2      = $request->u_address2;
        $userParent->save();
        return redirect('userparents');
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
        return view('userparents.show')->with('userParent',$userParent);
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
        return view('userparents.edit')->with('userParent', $userParent);
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
        $userParent->user_last_name  = $request->user_last_name;
        $userParent->user_first_name = $request->user_first_name;
        $userParent->user_last_kana  = $request->user_last_kana;
        $userParent->user_first_kana = $request->user_first_kana;
        $userParent->email           = $request->email;
        $userParent->tel             = $request->tel;
        $userParent->sex             = $request->sex;
        $userParent->u_zip_code1     = $request->u_zip_code1;
        $userParent->u_zip_code2     = $request->u_zip_code2;
        $userParent->u_state         = $request->u_state;
        $userParent->u_city          = $request->u_city;
        $userParent->u_address1      = $request->u_address1;
        $userParent->u_address2      = $request->u_address2;
        $userParent->save();
        return redirect('userparents');
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
        return redirect('userparents');
    }

}
