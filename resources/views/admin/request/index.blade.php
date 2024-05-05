@extends('admin.admin')
@section('content')
@section('title','index')

                <div class="card h-100">
                    <div class="card-header p-0 mx-1">
                        <h4>All User</h4>
                    </div>
                    <div class="card-body">



                        <br/>
                        <form method="GET" action="/searchr">
                        <div class="input-group d-flex justify-content-end">
                            <div class="form-outline" data-mdb-input-init>
                              <input type="search" id="form1" class="form-control" name="search"  placeholder="Search"  value="{{ isset($search)? $search :'' }}"/>
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

                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Gender</th>
                                        {{-- <th>Role</th> --}}
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($req as $item)
                                @if($item->role =='user')
                                    <tr>

                                        <td data-title='ID'>{{ $item->id}}</td>
                                        <td data-title='Gender'>{{ $item->name }}</td>
                                        <td data-title='Email'>{{ $item->email }}</td>
                                        <td data-title='Mobile'>{{ $item->phone }}</td>
                                        <td data-title='Gender'>{{ $item->gender }}</td>
                                        {{-- <td>{{ $item->role }}</td> --}}
                                        <td data-title='Date'>{{ $item->created_at->toFormattedDateString() }}</td>


                                        <td data-title='Actions'>
                                            @if ($item->status ==1)
                                            <a href="{{ route('users.status.update',['user_id'=> $item->id,'status_code'=> 0]) }}" title="Edit user"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> enable</button></a>
                                            @else
                                            <a href="{{ route('users.status.update',['user_id'=> $item->id,'status_code'=> 1]) }}" title="Edit user"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> disable</button></a>
                                            @endif



                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>


                            </table>
                        <div> {{ $req->links('pagination::bootstrap-5') }}</div>

                        </div>

                    </div>
                </div>

@endsection
