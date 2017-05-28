<?php

namespace DevPress\Http\Controllers;

use Illuminate\Http\Request;
use DevPress\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::with('posts')->orderBy('name')->get();
        return view('tags', [ 'tags' => $tags ]);
    }
    
    public function create()
    {
        return view('tagCreate');
    }
    
    public function store(Request $request)
    {
        $tag = new Tag;
        $tag->name = $request->name;
        $tag->isSuperNerdy = $request->isSuperNerdy == 1 ? true : false;
        
        $tag->save();
        
        return redirect()->action('TagController@index');
    }
    
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        
        return view('tagEdit', ['tag' => $tag ]);
    }
    
    public function update(Request $request)
    {
        $tag = Tag::findOrFail($request->id);
        $tag->name = $request->name;
        $tag->isSuperNerdy = $request->isSuperNerdy == 1 ? true : false;
        
        $tag->save();
        
        return redirect()->action('TagController@index');
    }
    
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        
        return redirect()->action('TagController@index');
    }
}