@extends('layouts.app')
@section('content')
@section('title','index')

                <div class="card">
                    <div class="card-header">
                        <h2>Pharmacy</h2>
                    </div>
                    <div class="card-body">

                        <br/>
                        <br/>
                        <form method="GET" action="/searchpuser">
                            <div class="input-group d-flex justify-content-end">
                                <div class="form-outline" data-mdb-input-init>
                                  <input type="search" id="form1" class="form-control" name="search"  placeholder="Search"  value="{{ isset($search)? $search :'' }}"/>
                                </div>
                                <button type="submit" class="btn-search" data-mdb-ripple-init>
                                  <i class="fas fa-search"></i>
                                </button>
                              </div>
                            </form>
                            <div class="table-responsive ">
                                <table class="table" >
                                <thead>
                                    <tr >
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th >Amount</th>
                                        <th>Production Date	</th>
                                        <th>End Date</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                @foreach($pharmacys as $item)
                                    <tr class="tr">
                                        <td  data-title='#' style="background: #34AD93">{{ $loop->iteration }}</td>
                                        <td data-title='Name'>{{ $item->name }}</td>
                                        <td data-title='Price'>{{ $item->dollar() }}</td>
                                        <td data-title='Amount'>{{ $item->amount }}</td>
                                        <td data-title='Production Date'>{{ $item->production_date }}</td>
                                        <td data-title='End Date'>{{ $item->end_date }}</td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div> {{ $pharmacys->links('pagination::bootstrap-5') }}</div>

                    </div>
                </div>

@endsection
