<?php

namespace DevPress\Http\Controllers;

use Illuminate\Http\Request;
use DevPress\Blogpost;

class WelcomeController extends Controller
{
    //
    public function index() {
        return view('welcome', ['post' => Blogpost::orderBy('created_at', 'desc')->get()[0] ]);
    }
}
