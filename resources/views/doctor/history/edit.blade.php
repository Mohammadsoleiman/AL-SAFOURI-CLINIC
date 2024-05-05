@extends('doctor.app')
@section('content')
@section('title','create')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('history/' .$history->id) }} " method="post">
        {!! csrf_field() !!}
        @method("PUT")

        <div class="formbold-mb-5">
            <label for="name" class="formbold-form-label"> Report </label>

            <textarea type="text" name="detail" id="name"  class="formbold-form-input" >{{$history->detail}}</textarea>
            @error('detail') <div class="form-error">{{$message}}</div>@enderror
        </div>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>


  </div>
</div>

@stop
