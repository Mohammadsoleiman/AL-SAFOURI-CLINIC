@extends('admin.admin')
@section('content')
@section('title','create')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('doctors/' .$doctors->id) }} " method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{$doctors->name}}">
        @error('name') <div class="form-error">{{$message}}</div>@enderror
        <label>Mobile</label></br>
        <input type="text" name="phone" id="phone" class="form-control" value="{{$doctors->phone}}">
        @error('phone') <div class="form-error">{{$message}}</div>@enderror
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control" value="{{$doctors->email}}">
        @error('email') <div class="form-error">{{$message}}</div>@enderror
        <label>Password</label></br>
        <input type="password" name="password" id="email" class="form-control" value="{{$doctors->password}}">
        @error('password') <div class="form-error">{{$message}}</div>@enderror
        <label>Specialty</label></br>
        <input type="text" name="specialty" id="email" class="form-control" value="{{$doctors->specialty}}">
        @error('specialty') <div class="form-error">{{$message}}</div>@enderror

        <label>Gender</label></br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Male" value="{{$doctors->gender}}">
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" value="{{$doctors->gender}}">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
          @error('gender') <div class="form-error">{{$message}}</div>@enderror



        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>


  </div>
</div>

@stop
