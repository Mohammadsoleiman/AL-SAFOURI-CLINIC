@extends('admin.admin')
@section('content')
@section('title','create')

                <div class="card h-100">
                    <div class="card-header p-0 mx-1">
                        <h4>Message</h4>
                    </div>
                    <div class="card-body">

<br>
                        <form method="GET" action="/searchm">
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
                                        <th>Subject</th>
                                        <th>Message	</th><br>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $item)
                                    <tr>
                                        <td data-title='ID'>{{ $loop->iteration }}</td>
                                        <td data-title='Name'>{{ $item->name }}</td>
                                        <td data-title='Email'>{{ $item->email}}</td>
                                        <td data-title='Subject'>{{ $item->subject}}</td>
                                        <td data-title='Message'>{{ $item->message }}</td>


                                        <td data-title='Actiona'>
                                            <form method="POST" action="{{ url('/messages' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        <div> {{ $messages->links('pagination::bootstrap-5') }}</div>

                        </div>

                    </div>
                </div>

@endsection
