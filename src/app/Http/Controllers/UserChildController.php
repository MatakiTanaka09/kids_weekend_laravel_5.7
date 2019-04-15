<?php

namespace App\Http\Controllers;

//use App\Http\Resources\User\UserParent;
use Illuminate\Http\Request;
use App\Models\UserChild;
use App\Models\UserParent;

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
        $result = [];
        $user_id = optional(auth()->user())->id;
        $userParentUuid = UserParent::where('user_id', $user_id)->select('uuid')->get();
        $datas = $request->json()->all();
        if(is_array($datas)) {
//            foreach($datas as $data) {
            for($i=0; $i<count($datas); $i++) {
                $userChild = new UserChild();
                $data = $datas[$i];
                $userChild->last_kana   = $data["last_kana"];
                $userChild->first_kana  = $data["first_kana"];
                $userChild->birth_day   = $data["birth_day"];
                $userChild->sex         = $data["sex"];
                $userChild->parent_uuid = $userParentUuid[0]["uuid"];
                $userChild->save();
                array_push($result, $userChild);
            }
        }
        return $result;
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
