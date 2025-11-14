@extends('admin.admin')
@section('content')
@section('title','create')

                <div class="card h-100">
                    <div class="card-header p-0 mx-1">
                        <h4>Pharmacy</h4>
                    </div>
                    <div class="card-body pt-3">
                        <a href="{{ route('pharmacys.create') }}" class="btn btn-success btn-sm" id="add" title="Add New Teacher">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <br/>

                        <form method="GET" action="/searchp">
                            <div class="input-group d-flex justify-content-end pt-0">
                                <div class="form-outline" data-mdb-input-init>
                                  <input type="search" id="form1" class="form-control" name="search"  placeholder="Search"  value="{{ isset($search)? $search :'' }}"/>
                                </div>
                                <button type="submit" class="btn-search" data-mdb-ripple-init>
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
                                        <th>Price</th>
                                        <th>Amount</th>
                                        <th>Production Date	</th>
                                        <th>End Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pharmacys as $item)
                                    <tr>
                                        <td data-title='#'>{{ $loop->iteration }}</td>
                                        <td data-title='Name'>{{ $item->name }}</td>
                                        <td data-title='Price'>{{ $item->dollar() }}</td>
                                        <td data-title='Amount'>{{ $item->amount }}</td>
                                        <td data-title='Production Date'>{{ $item->production_date }}</td>
                                        <td data-title='End Date'>{{ $item->end_date }}</td>

                                        <td data-title='actions'>
                                            {{-- <a href="{{ url('/pharmacys/' . $item->id) }}" title="View Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                            <a href="{{ url('/pharmacys/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/pharmacys' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div> {{ $pharmacys->links('pagination::bootstrap-5') }}</div>

                    </div>
                </div>

@endsection
