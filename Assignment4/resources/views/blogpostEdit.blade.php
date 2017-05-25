@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Create Post</div>
        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="{{ action('BlogpostController@update', $post->id) }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <input type="hidden" name="id" value="{{$post->id}}">

            <label for="title" class="control-label">Title</label>
            <input id="title" type="text" class="form-control" name="title" value="{{$post->title}}" required>


            <label for="tags" class="control-label">Tags</label>
            
            @foreach ($tags as $tag) 
           
            @php 
            $checkedTags = array();
            foreach($post->tags as $tag2)
              { $checkedTags[] = $tag2->id; } 
            @endphp


            <div>
              <input type="checkbox" name="tags[]" value="{{$tag->id}}" 
                @if(in_array($tag->id, $checkedTags)) checked="checked" @endif > {{$tag->name}} 
              </input>
            </div>

            @endforeach

            <label for="body" class="control-label">Body</label>
            <textarea rows="4" cols="50" id="body" type="body" class="form-control" name="body" required>
            {{$post->body}}
            </textarea>

            <button type="submit" class="btn btn-success"> Update! </button>
          </form>


        </div>
      </div>


    </div>
  </div>
</div>
@endsection


<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: "textarea",
    setup: function(editor) {
      editor.on('change', function() {
        editor.save();
      });
    }
  });
</script>