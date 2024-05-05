@extends('admin.admin')
@section('content')
@section('title','create')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('xray/' .$xray->id) }} " method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <label> Patient Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{$xray->name}}">
        @error('name') <div class="form-error">{{$message}}</div>@enderror</br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control" value="{{$xray->phone}}">
        @error('phone') <div class="form-error">{{$message}}</div>@enderror</br>
        <label> Date</label></br>
        <input type="Date" name="date" id="date" class="form-control" value="{{$xray->date}}">
        @error('date') <div class="form-error">{{$message}}</div>@enderror</br>
        <label>Time</label></br>
        <select  name="time"  class="form-control" >


            <option  value="{{ $xray->time }}" >--Choose the Time--</option>
            <option name="time" value="{{ $xray->time }}">9:00AM</option>
            <option name="time" value="{{ $xray->time }}">9:30AM</option>
            <option name="time" >10:00AM</option>
            <option name="time">10:30AM</option>
            <option name="time">11:00AM</option>
            <option name="time">11:30AM</option>
            <option name="time">12:00PM</option>
            <option name="time">12:30PM</option>
            <option name="time">1:00PM</option>
            <option name="time">1:30PM</option>
            <option name="time">2:00PM</option>
            <option name="time">2:30PM</option>
            <option name="time">3:00PM</option>
            <option name="time">3:30PM</option>
            <option name="time">4:00PM</option>
            <option name="time">4:30PM</option>
            <option name="time">5:00PM</option>

    </select>
    @error('time') <div class="form-error">{{$message}}</div>@enderror




        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>


  </div>
</div>

@stop
