@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Edit Tag</div>
        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="{{ action('TagController@update', $tag->id) }}">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="{{$tag->id}}">

            <label for="name" class="control-label">Name</label>
            <input id="name" type="name" class="form-control" name="name" value="{{$tag->name}}" required>

            <div>
            {{$tag->isSuperNerdy}}
              <input type="checkbox" name="isSuperNerdy" value="1" 
              @if ($tag->isSuperNedy) checked="checked" @endif 
              >Is this a super nerdy tag?</input>
            </div>

            <button type="submit" class="btn btn-success"> Save! </button>
          </form>


        </div>
      </div>


    </div>
  </div>
</div>
@endsection