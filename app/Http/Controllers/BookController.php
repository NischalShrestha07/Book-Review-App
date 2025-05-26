<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        return view('books.list');
    }
    public function books()
    {
        return view('book-listing');
    }

    public function store()
    {

        //
    }

    public function edit()
    {

        //
    }
    public function update()
    {

        //
    }
    public function destroy()
    {

        //
    }
}
