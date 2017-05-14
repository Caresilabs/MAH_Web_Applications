@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Post Preview      
      @if (Route::has('login'))
         <form action="{{action('BlogpostController@destroy', $post->id)}}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger"> Delete </button>
        </form>
        @endif
</div>
        <div class="panel-body">

          <h2>{{ $post->title }}</h2>

          <p>{!! $post->body !!}</p>


        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Tags</div>

        <div class="panel-body">

          @foreach ($post->tags as $tag)
          <em>{{ $tag->name }},</em> @endforeach


        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Comments</div>

        <div class="panel-body">

          @foreach ($post->comments as $comment)
          <h3>{{ $comment->title }}</h3>
          <p>{{ $comment->comment }}</p>

             <form action="{{action('CommentController@destroy', $comment->id)}}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger"> Delete </button>
             </form>

          <hr /> @endforeach


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