@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Posts
          @if (Route::has('login'))
             <a class="btn btn-small btn-success pull-right" href="{{ action('BlogpostController@create') }}">Create Post</a>
          @endif
        </div>

        <div class="panel-body">

          @foreach ($posts as $post)
          <h2>{{ $post->title }}</h2>

          {!! \Illuminate\Support\Str::words($post->body, 3,'....')  !!}
          </br>
          <a href="{{url('/blog', $post->id)}}">Read More</a>
          <hr />
          @endforeach


        </div>
      </div>
    </div>
  </div>
</div>
@endsection