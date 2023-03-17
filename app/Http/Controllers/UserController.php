<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Author $author)
    {
        return view('user.user', ['author' => $author]);
    }
}
