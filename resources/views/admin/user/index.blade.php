@extends('admin.admin')
@section('content')
@section('title','index')

                <div class="card h-100">
                    <div class="card-header p-0 mx-1">
                        <h4>All User</h4>
                    </div>
                    <div class="card-body">
                        {{-- <a href="{{ route('students.create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> --}}

                        <br/>
                        <form method="GET" action="/searchu">
                        <div class="input-group d-flex justify-content-end">
                            <div class="form-outline" data-mdb-input-init>
                              <input type="search" id="form1" class="form-control" name="search"  placeholder="Search"  value="{{ isset($search)? $search :'' }}"/>
                            </div>
                            <button type="submit" class="btn-search"  data-mdb-ripple-init>
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
                                @foreach($users as $item)
                                @if($item->role =='user'&& $item->status =='0')
                                    <tr>

                                        <td data-title='ID'>{{ $item->id}}</td>
                                        <td data-title='Name'>{{ $item->name }}</td>
                                        <td data-title='Email'>{{ $item->email }}</td>
                                        <td data-title='Mobile'>{{ $item->phone }}</td>
                                        <td data-title='Gender'>{{ $item->gender }}</td>
                                        {{-- <td >{{ $item->role }}</td> --}}
                                        <td data-title='Date'>{{ $item->created_at->toFormattedDateString() }}</td>


                                        <td data-title='Action'>

                                            <a href="{{ url('/users/' . $item->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/users' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete user" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>


                            </table>
                        <div> {{ $users->links('pagination::bootstrap-5') }}</div>

                        </div>

                    </div>
                </div>

@endsection
