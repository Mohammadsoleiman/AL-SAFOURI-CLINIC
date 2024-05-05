@extends('admin.admin')
@section('content')
@section('title','create')

<div class="card">
  <div class="card-header ">Doctor Page</div>
  <div class="card-body ">

      <form action="{{ route('doctors.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control">
        @error('name') <div class="form-error">{{$message}}</div>@enderror
        <label>Mobile</label></br>
        <input type="text" name="phone" id="phone" class="form-control">
        @error('phone') <div class="form-error">{{$message}}</div>@enderror
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control">
        @error('email') <div class="form-error">{{$message}}</div>@enderror
        <label>Password</label></br>
        <input type="password" name="password" id="email" class="form-control">
        @error('password') <div class="form-error">{{$message}}</div>@enderror
        <label>Specialty</label></br>
        <input type="text" name="specialty" id="email" class="form-control">
        @error('specialty') <div class="form-error">{{$message}}</div>@enderror
        <label>Gender</label></br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Male" >
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
          @error('gender') <div class="form-error">{{$message}}</div>@enderror</br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
