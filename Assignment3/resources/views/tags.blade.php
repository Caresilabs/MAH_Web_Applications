@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Posts
        </div>

        <div class="panel-body">

          @if (!Auth::guest())
             <a class="btn btn-success" href="{{ action('TagController@create') }}">Create New Tag</a>
              <hr/>
          @endif

        
          @foreach ($tags as $tag)
            <h3>{{ $tag->name }}</h2>

            @if ($tag->isSuperNerdy)
            <p>(This is super nerdy btw...)</p>
            @endif
        
          <ul>
             @foreach ($tag->posts as $post)
             <li><a href="{{action('BlogpostController@show', $post->id)}}">{{$post->title}}</a></li>
             @endforeach
          </ul>

          @if (!Auth::guest())
          <div class="clearfix">
            <a class="btn btn-primary pull-left" href="{{ action('TagController@edit', $tag->id) }}">Edit</a>
             <form action="{{action('TagController@destroy', $tag->id)}}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger pull-left"> Delete </button>
             </form>
          </div>
          @endif
          
            <hr />
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
@endsection