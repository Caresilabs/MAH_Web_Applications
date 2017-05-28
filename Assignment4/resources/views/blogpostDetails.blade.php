@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Dev Post</div>

        <div class="panel-body">

         @if (!Auth::guest())
         <form action="{{action('BlogpostController@destroy', $post->id)}}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger pull-right"> Delete </button>
        </form>
        <a class="btn btn-small btn-primary pull-right" href="{{ action('BlogpostController@edit', $post->id) }}">Edit</a>
        </br>
        @endif

          <h2>{{ $post->title }}</h2>
          <em>Posted: {{ $post->created_at->format('d/m/Y') }}</em>
          @if($post->updated_at != null)
            </br>
            <i>Updated: {{ $post->updated_at->format('d/m/Y') }}</i>
          @endif

          <hr/> 
          <p>{!! $post->body !!}</p>


        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Tags</div>

        <div class="panel-body">

          @foreach ($post->tags as $tag)
          <a href="{{ action('TagController@showtag', $tag->id) }}">{{ $tag->name }}</a>, @endforeach


        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Comments</div>

        <div class="panel-body">

          @foreach ($post->comments as $comment)
          <h3>{{ $comment->title }}</h3>
          <p>{{ $comment->comment }}</p>

          @if (!Auth::guest())
             <form action="{{action('CommentController@destroy', $comment->id)}}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger"> Delete </button>
             </form>
          @endif
          
          <hr /> 
          @endforeach


        </div>
      </div>


      <div class="panel panel-default">
        <div class="panel-heading">Write Comment</div>

        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="{{ url('comment/store') }}">
            {{ csrf_field() }}
            <input type="hidden" name="postId" value="{{$post->id}}">
           
            <label for="title" class="control-label">Title</label>
            <input id="title" type="text" class="form-control" name="title" required>

            <label for="comment" class="control-label">Comment</label>
            <textarea rows="4" cols="50" id="comment" type="comment" class="form-control" name="comment" required>
            </textarea>

            <button type="submit" class="btn btn-primary"> Send! </button>
          </form>


        </div>
      </div>


    </div>
  </div>
</div>
@endsection