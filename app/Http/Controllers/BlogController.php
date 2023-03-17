<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.home');
    }

    public function about()
    {
        return view('blog.about');
    }

    public function contact()
    {
        return view('blog.contact');
    }
}
