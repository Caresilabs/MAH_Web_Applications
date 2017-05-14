@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Create Tag</div>
        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="{{ action('TagController@store') }}">
            {{ csrf_field() }}

            <label for="name" class="control-label">Name</label>
            <input id="name" type="name" class="form-control" name="name" required>

            <div>
              <input type="checkbox" name="isSuperNerdy" value="1">Is this a super nerdy tag?</input>
            </div>

            <button type="submit" class="btn btn-success"> Create! </button>
          </form>


        </div>
      </div>


    </div>
  </div>
</div>
@endsection