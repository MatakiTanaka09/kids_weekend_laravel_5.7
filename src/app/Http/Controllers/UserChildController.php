<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserChild;

class UserChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userChildren = UserChild::orderBy('created_at', 'desc')->get();
        return view('userchildren.index', ['userChildren' => $userChildren]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userchildren.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userChild = new UserChild();
        $userChild->family_id        = $request->family_id;
        $userChild->child_last_name  = $request->child_last_name;
        $userChild->child_first_name = $request->child_first_name;
        $userChild->child_last_kana  = $request->child_last_kana;
        $userChild->child_first_kana = $request->child_first_kana;
        $userChild->chilld_sex       = $request->chilld_sex;
        $userChild->child_birth_day  = $request->child_birth_day;
        $userChild->save();
        return redirect('userchildren');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(UserChild $userChild)
    public function show($id)
    {
        $userChild=UserChild::findOrFail($id);
        return view('userchildren.show')->with('userChild',$userChild);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $userChild=UserChild::findOrFail($id);
        return view('userchildren.edit')->with('userChild', $userChild);
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
        $userChild = UserChild::findOrFail($id);
        $userChild->family_id        = $request->family_id;
        $userChild->child_last_name  = $request->child_last_name;
        $userChild->child_first_name = $request->child_first_name;
        $userChild->child_last_kana  = $request->child_last_kana;
        $userChild->child_first_kana = $request->child_first_kana;
        $userChild->chilld_sex       = $request->chilld_sex;
        $userChild->child_birth_day  = $request->child_birth_day;
        $userChild->save();
        return redirect('userchildren');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userChild=UserChild::findOrFail($id);
        $userChild->delete();
        return redirect('userchildren');
    }

}
