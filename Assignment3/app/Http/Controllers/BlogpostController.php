<?php

namespace DevPress\Http\Controllers;

use Illuminate\Http\Request;
use DevPress\Blogpost;

use DevPress\Tag;

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
        return view('blogposts', ['posts' => Blogpost::orderBy('created_at', 'desc')->get() ]);
    }
    
    public function create()
    {
        $tags = Tag::all();
        return view('blogpostCreate', ['tags' =>  $tags ]);
    }
    
    public function store(Request $request)
    {
        $post = new Blogpost;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->created_at = \Carbon\Carbon::now()->toDateTimeString();
        
        $post->save();
        
        $tags = $request->input('tags');
        if ($tags != null) {
            foreach($tags as $tag)
            {
                $post->tags()->attach($tag);
            }
        }
        
        return redirect()->action('BlogpostController@show', $post->id);
    }
    
    public function edit($id)
    {
        $tags = Tag::all();
        $post = Blogpost::with('tags')->find($id);
        return view('blogpostEdit', ['post' =>  $post, 'tags' => $tags ]);
    }
    
    public function update(Request $request)
    {
        $post = Blogpost::find($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->updated_at = \Carbon\Carbon::now()->toDateTimeString();
        
        $post->save();
        
        $post->tags()->detach();
        
        $tags = $request->input('tags');
        if ($tags != null)
        {
            foreach($tags as $tag)
            {
                $post->tags()->attach($tag);
            }
        }
        
        return redirect()->action('BlogpostController@show', $post->id);
    }
    
    public function show($id)
    {
        $post = Blogpost::with('comments', 'tags')->find($id);
        
        return view('blogpostDetails', ['post' =>  $post ]);
    }
    
    public function destroy($id)
    {
        $post = Blogpost::find($id);
        $post->delete();
        
        return redirect()->action('BlogpostController@index');
    }
}