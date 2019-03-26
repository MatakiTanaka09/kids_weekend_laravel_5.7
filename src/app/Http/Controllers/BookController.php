<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\Book\Book as BookResource;
use App\Models\UserParent;
use App\Http\Resources\Book\BookUser as BookUserResource;

class BookController extends Controller
{

    public function index()
    {
        return BookResource::collection(
            Book::with(['userParent', 'Event'])->get()
        );
//        return Book::with(['userParent', 'Event', 'School'])->get();
    }

    public function showBookUser()
    {
        return BookUserResource::collection(
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Request $request
     */
    public function store(Request $request)
    {
        $result = [];
        $datas = $request->json()->all();
        if(is_array($datas)) {
            for($i=0; $i<count($datas); $i++) {
                $book = new Book();
                $data = $datas[$i];
                $book->child_uuid   = $data["child_uuid"];
                $book->school_uuid  = $data["school_uuid"];
                $book->event_uuid   = $data["event_uuid"];
                $book->price  = $data["price"];
                $book->save();
                array_push($result, $book);
            }
        }
        return $result;



//        $book->child_parent_id = $book->input("child_parent_id");
//        $book->school_uuid     = $book->input("school_uuid");
//        $book->event_uuid      = $book->input("event_uuid");
//        $book->price           = $book->input("price");
//        $book->save();
//        $book->child_parent_id = $book->child_parent_id[0]["id"];
//        if (count($child_parent_id) === 1) {
//            $book->child_parent_id = $child_parent_id[0];
//            $book->save();
//            return $book;
//        } else {
//            foreach ($this->childParent($child_parent_id) as $childParent)
//            {
//                $book->child_parent_id  = $childParent;
//                $book->save();
//            }
//            return $book;
//        }

//        $book->child_parent_id = 1;
//        $book->school_uuid = "cce53180-3d83-11e9-a133-2f785df45f7c";
//        $book->event_uuid = "f994a560-3d73-11e9-b034-d5d317db75d3";
//        $book->price = 1000;
//        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//    public function childParent($child_parent_id)
//    {
//        if(count($child_parent_id)===1) return;
//        for($i = 0; $i < count($child_parent_id); $i++) {
//            yield $book->child_parent_id = $child_parent_id[$i];
//        }
//    }
}


