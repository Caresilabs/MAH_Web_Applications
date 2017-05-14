@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Posts
        </div>

        <div class="panel-body">

         @if (!Auth::guest())
             <a class="btn btn-primary" href="{{ action('BlogpostController@create') }}">Create Post</a>
            <hr/>   
          @endif

          <a class="btn btn-default" href="{{ action('TagController@index') }}">View by Tags</a>
         
         <hr/>

          @foreach ($posts as $post)
            <h2>{{ $post->title }}</h2>
            <strong>{{ $post->created_at->diffForHumans() }}</strong>
            </br></br>
            {!! \Illuminate\Support\Str::words(strip_tags($post->body), 3,'....')  !!}
            </br>
            <a href="{{action('BlogpostController@show', $post->id)}}">Read More</a>
            <hr />
          @endforeach


        </div>
      </div>
    </div>
  </div>
</div>
@endsection