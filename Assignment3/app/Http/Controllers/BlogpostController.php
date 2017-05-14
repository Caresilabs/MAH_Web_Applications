<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;

class BlogpostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        ///$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blogposts', ['posts' => Blogpost::all() ]);
    }

     public function create()
    {
        return view('blogposts', ['posts' => Blogpost::all() ]);
    }

    public function show($id)
    {
        $post = Blogpost::with('comments', 'tags')->find($id);
     
        return view('blogpostDetails', ['post' =>  $post ]);
    }
}
