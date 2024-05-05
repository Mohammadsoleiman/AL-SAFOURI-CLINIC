@extends('admin.admin')
@section('content')
@section('title', 'Doctor')

<div class="card h-100">
    <div class="card-header  p-0 mx-1">
        <h4>All Doctor</h4>
    </div>
    <div class="card-body pt-3">
        <a href="{{ route('doctors.create') }}" class="btn btn-success btn-sm"  id="add" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true"></i> Add Doctor
        </a>

        <br/>
        <br/>
        <br/>
        <form method="GET" action="/searchs">
            <div class="input-group d-flex justify-content-end">
                <div class="form-outline" data-mdb-input-init>
                    <input type="search" id="form1" class="form-control" name="search" placeholder="Search"
                        value="{{ isset($search) ? $search : '' }}" />
                </div>
                <button type="submit" class="btn-search" data-mdb-ripple-init>
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form class="w-50">
        <div class="table-responsive ">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        {{-- <th>Gender</th> --}}
                        <th>Specialty</th>
                        {{-- <th>Role</th> --}}
                        {{-- <th>Date</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($doctors as $item)
                        @if ($item->role == 'doctor')
                            <tr>

                                <td  data-title='ID'>{{ $item->id }}</td>
                                <td  data-title='Name'>{{ $item->name }}</td>
                                <td  data-title='Email'>  {{ $item->email }}</td>
                                <td data-title='Mobile'>{{ $item->phone }}</td>
                                <td  data-title='Specialty'>{{ $item->specialty }} </td>
                                <td  data-title='Actions'>

                                    <a href="{{ url('/doctors/' . $item->id . '/edit') }}" title="Edit user"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('/doctors' . '/' . $item->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete user"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endif
                    @endforeach

                </tbody>


            </table>
            <div> {{ $doctors->links('pagination::bootstrap-5') }}</div>

        </div>

    </div>
</div>

@endsection
