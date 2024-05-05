@extends('admin.admin')
@section('content')
@section('title','edit')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('users/' .$users->id) }} " method="post"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control">
        @error('name')
        <div class="form-error">
        {{$message}}
        </div>
        @enderror</br>
        <label>Address</label></br>
        <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control">
        @error('email')
        <div class="form-error">
        {{$message}}
        </div>
        @enderror</br>
        <label>Mobile</label></br>
        <input type="text" name="phone" id="phone" value="{{$users->phone}}" class="form-control">
        @error('phone')
        <div class="form-error">
        {{$message}}
        </div>
        @enderror</br>
        <label>Gender</label></br></br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Male " >
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div></br>
          @error('gender')
          <div class="form-error">
          {{$message}}
          </div>
          @enderror</br>

            </br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
