@extends('admin.admin')
@section('content')
@section('title','edit')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('pharmacys/' .$pharmacys->id) }} " method="post">
        {!! csrf_field() !!}
        @method("PUT")
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{$pharmacys->name}}">
        @error('name') <div class="form-error">{{$message}}</div>@enderror</br>
        <label>Production Date</label></br>
        <input type="Date" name="production_date" id="address" class="form-control" value="{{$pharmacys->production_date}}">
        @error('production_date') <div class="form-error">{{$message}}</div>@enderror</br>
        <label>End Date</label></br>
        <input type="Date" name="end_date" id="mobile" class="form-control" value="{{$pharmacys->end_date}}">
        @error('end_date') <div class="form-error">{{$message}}</div>@enderror</br>
        <label>Amount</label></br>
        <input type="number" name="amount" id="mobile" class="form-control" value="{{$pharmacys->amount}}">
        @error('amount') <div class="form-error">{{$message}}</div>@enderror
    </br>
        <label>Price</label></br>
        <input type="number" name="price" id="mobile" class="form-control" value="{{$pharmacys->price}}">
        @error('price') <div class="form-error">{{$message}}</div>@enderror</br>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>


  </div>
</div>

@stop
