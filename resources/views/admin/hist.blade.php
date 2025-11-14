@extends('admin.admin')
@section('content')
@section('title','create')

<div class="card h-100">
    <div class="card-header p-0 mx-1">
        <h4>Show History Patient</h4>
    </div>
    <div class="card-body">
        <form method="get" action="fliter">
        <div class="formbold-mb-5">
            <label for="phone" class="name-dr" > Name Doctor : </label>
            <select  name="did"  class="select-dr" >
                <option value="" selected>Choose the Doctor</option>

            @foreach ( $doctor as $id=>$name )


            @if ($name->role=='doctor')
            <option value="{{ $name->id }}" >{{ $name->name }}</option>

            @endif

            @endforeach


    </select>
    <button type="submit" class="btn-dr" data-mdb-ripple-init>
    Generate
      </button>
</div>
        </form>
        <br/>
        <form method="GET" action="/searchhist">
            <div class="input-group d-flex justify-content-end">
                <div class="form-outline" data-mdb-input-init>
                  <input type="search" id="form2" class="form-control" name="search"  placeholder="Search"  value="{{ isset($search)? $search :'' }}"/>
                </div>
                <button type="submit" class="btn-search2" data-mdb-ripple-init>
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
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Report</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>



                @foreach($historys as $item)



                    <tr>
                        <td data-title='#'>{{ $loop->iteration }}</td>
                        <td data-title='Pateint Name'>{{ $item->pid }}</td>
                        <td data-title='Doctor Name'>{{ $item->doctor->name }}</td>
                        <td data-title='Date'>{{ $item->date }}</td>
                        <td data-title='Time'>{{ $item->time }}</td>
                        <td data-title='Report'>{{ $item->detail }}</td>


                        <td data-title='Actions'>
                            {{-- <a href="{{ url('/pharmacys/' . $item->id) }}" title="View Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                            <a href="{{ url('/historys/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/historys' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
        <div> {{ $historys->links('pagination::bootstrap-5') }}</div>

    </div>
</div>

@endsection
