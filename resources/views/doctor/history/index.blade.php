@extends('layouts.appd')
@section('content')
@section('title','create')

                <div class="card">
                    <div class="card-header">
                        <h2>Show History Patient</h2>
                    </div>
                    <div class="card-body">


                        <br/>
                        <form method="GET" action="/searchapp">
                            <div class="input-group d-flex justify-content-end">
                                <div class="form-outline" data-mdb-input-init>
                                  <input type="search" id="form1" class="form-control" name="search"  placeholder="Search"  value="{{ isset($search)? $search :'' }}"/>
                                </div>
                                <button type="submit" class="btn-search" data-mdb-ripple-init>
                                  <i class="fas fa-search"></i>
                                </button>
                              </div>
                            </form>
                            <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pateint Name</th>
                                        {{-- <th>Doctor Name</th> --}}
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Report</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>



                                @foreach($history as $item)
                                    @if ($item->did==Auth::user()->id )


                                    <tr>
                                        <td data-title='#' style="background: #34AD93">{{ $loop->iteration }}</td>
                                        <td data-title='Pateint Name'>{{ $item->pid }}</td>
                                        {{-- <td>{{ $item->did }}</td> --}}
                                        <td data-title='Date'>{{ $item->date }}</td>
                                        <td data-title='Time'>{{ $item->time }}</td>
                                        <td data-title='Report'>{{ $item->detail }}</td>


                                        <td data-title='Actions'>
                                            {{-- <a href="{{ url('/pharmacys/' . $item->id) }}" title="View Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                            <a href="{{ url('/history/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/history' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div> {{ $history->links('pagination::bootstrap-5') }}</div>

                    </div>
                </div>

@endsection
