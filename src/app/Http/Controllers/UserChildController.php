<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserChild;

class UserChildController extends Controller
{

    public function index()
    {
        $userChildren = UserChild::orderBy('created_at', 'desc')->get();
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $userChild = new UserChild();
        $userChild->user_parent_id   = $request->user_parent_id;
        $userChild->child_last_name  = $request->child_last_name;
        $userChild->child_first_name = $request->child_first_name;
        $userChild->child_last_kana  = $request->child_last_kana;
        $userChild->child_first_kana = $request->child_first_kana;
        $userChild->child_sex        = $request->child_sex;
        $userChild->child_birth_day  = $request->child_birth_day;
        $userChild->save();
        return UserChild::all();
    }

    public function show($id)
    {
        $userChild = UserChild::findOrFail($id);
    }

    public function edit($id)
    {
        $userChild = UserChild::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $userChild = UserChild::findOrFail($id);
        $userChild->child_last_name  = $request->child_last_name;
        $userChild->child_first_name = $request->child_first_name;
        $userChild->child_last_kana  = $request->child_last_kana;
        $userChild->child_first_kana = $request->child_first_kana;
        $userChild->chilld_sex       = $request->chilld_sex;
        $userChild->child_birth_day  = $request->child_birth_day;
        $userChild->save();
    }

    public function destroy($id)
    {
        $userChild=UserChild::findOrFail($id);
        $userChild->delete();
    }

}
