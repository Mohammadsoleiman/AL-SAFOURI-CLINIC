@extends('admin.admin')
@section('content')
@section('title','edit')

<div class="card h-100">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('historys/' .$historys->id) }} " method="post">
        {!! csrf_field() !!}
        @method("PUT")

        <div class="formbold-mb-5">
            <label for="name" class="formbold-form-label"> Report </label>
            <textarea type="text" name="detail" id="name"  class="form-control w-75 " >{{$historys->detail}}</textarea>

            @error('detail') <div class="form-error">{{$message}}</div>@enderror            <br>

        </div>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>


  </div>
</div>

@stop
