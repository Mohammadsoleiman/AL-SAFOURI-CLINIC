@extends('admin.admin')
@section('content')
@section('title','create')

<div class="card ">
  <div class="card-header">Pharmacy Page</div>
  <div class="card-body">

      <form action="{{ route('pharmacys.store') }}" method="post">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control">
        @error('name') <div class="form-error">{{$message}}</div>@enderror
        <label>Production Date</label></br>
        <input type="Date" name="production_date" id="address" class="form-control">
        @error('production_date') <div class="form-error">{{$message}}</div>@enderror
        <label>End Date</label></br>
        <input type="Date" name="end_date" id="mobile" class="form-control">
        @error('end_date') <div class="form-error">{{$message}}</div>@enderror
        <label>Amount</label></br>
        <input type="number" name="amount" id="mobile" class="form-control">
         @error('end_date') <div class="form-error">{{$message}}</div>@enderror
        <label>Price</label></br>
        <input type="number" name="price" id="mobile" class="form-control">
        @error('price') <div class="form-error">{{$message}}</div>@enderror</br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
