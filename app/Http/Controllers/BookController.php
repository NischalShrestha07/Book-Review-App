<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        // return view('books.list');
    }
    public function books()
    {
        return view('books.book-listing');
    }
    public function reviews()
    {
        return view('reviews');
    }
    public function myReviews()
    {
        return view('my-reviews');
    }
    public function changePassword()
    {
        return view('change-password');
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
