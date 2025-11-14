@extends('admin.admin')
@section('content')
@section('title','create')

                <div class="card h-100">
                    <div class="card-header p-0 mx-1">
                        <h4>X-ray</h4>
                    </div>
                    <div class="card-body">


                        <br/>
                        <form method="GET" action="/searchx">
                            <div class="input-group d-flex justify-content-end">
                                <div class="form-outline" data-mdb-input-init>
                                  <input type="search" id="form1"  class="form-control" name="search"  placeholder="Search"  value="{{ isset($search)? $search :'' }}"/>
                                </div>
                                <button type="submit"  class="btn-search" data-mdb-ripple-init>
                                  <i class="fas fa-search"></i>
                                </button>
                              </div>
                            </form>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pateint Name</th>
                                        <th>Mobile</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>



                                @foreach($xray as $item)

                                    <tr>
                                        <td data-title='#'>{{ $loop->iteration }}</td>
                                        <td data-title='Name'>{{ $item->name }}</td>
                                        <td data-title='Mobile'>{{ $item->phone }}</td>
                                        <td data-title='date'>{{ $item->date }}</td>
                                        <td data-title='time'>{{ $item->time }}</td>


                                        <td data-title='Actions'>
                                            {{-- <a href="{{ url('/pharmacys/' . $item->id) }}" title="View Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                            <a href="{{ url('/xray/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/xray' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete xray" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div> {{ $xray->links('pagination::bootstrap-5') }}</div>

                    </div>
                </div>

@endsection
