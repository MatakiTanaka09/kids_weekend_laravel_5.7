<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\Book\Book as BookResource;

class BookController extends Controller
{

    public function index()
    {
        return BookResource::collection(
            Book::with(['userParent', 'Event'])->get()
        );
//        return Book::with(['userParent', 'Event', 'School'])->get();
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
    public function store()
    {
        $book = new Book();
//        $book->fill($request->json()->all());
//        $book->child_parent_id = 1;
//        $book->school_uuid = "cce53180-3d83-11e9-a133-2f785df45f7c";
//        $book->event_uuid = "f994a560-3d73-11e9-b034-d5d317db75d3";
//        $book->price = 1000;
        $book->save();
        return $book;
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
}
