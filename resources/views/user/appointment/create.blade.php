@extends('layouts.app')
@section('content')
@section('title','create')

    <div class="formbold-form-wrapper ">
        @if (session('success'))
        <div class="alert alert-success"style="padding: 5px" role="alert">
     {{ session( 'success' ) }}
        </div>
@elseif (session('failure'))
<div class="alert alert-danger" style="padding: 5px" role="alert">
{{ session( 'failure' ) }}
</div>
        @endif

        <form action="{{ route('appointment.store') }}" method="POST" class="formNew">
            @csrf
            <div class="formbold-mb-5">
                <label for="name" class="formbold-form-label"> Full Name </label>

                <input type="text" name="pid" id="name"  class="formbold-form-input" value=" {{ Auth::user()->name }}" />

            </div>

            <div class="formbold-mb-5">
                <label for="did" class="formbold-form-label"> Name Doctor </label>
                <select  name="did"  class="formbold-form-input" >
                    <option selected>--Choose the Doctor--</option>

                @foreach ( $appointment as $id=>$name )

                @if ($name->specialty=='Dentistry')

                <option value="{{ $name->id }}">{{ $name->name }}</option>


                @endif
                @endforeach


        </select>

    </div>

            <div class="flex flex-wrap formbold--mx-3">
                <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5 w-full">
                        <label for="date" class="formbold-form-label"> Date </label>
                        <input type="date" name="date" id="date" class="formbold-form-input" />
                    </div>
                </div>
                <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                        <label for="phone" class="formbold-form-label"> Time </label>
                        <select  name="time"  class="formbold-form-input" >


                            <option >--Choose the Time--</option>
                            <option name="time">9:00AM</option>
                            <option name="time">9:30AM</option>
                            <option name="time">10:00AM</option>
                            <option name="time">10:30AM</option>
                            <option name="time">11:00AM</option>
                            <option name="time">11:30AM</option>
                            <option name="time">12:00PM</option>
                            <option name="time">12:30PM</option>
                            <option name="time">1:00PM</option>
                            <option name="time">1:30PM</option>
                            <option name="time">2:00PM</option>
                            <option name="time">2:30PM</option>
                            <option name="time">3:00PM</option>
                            <option name="time">3:30M</option>
                            <option name="time">4:00PM</option>
                            <option name="time">4:30PM</option>
                            <option name="time">5:00PM</option>

                    </select>


                    </div>
                </div>
            </div>



            <div>
                <button class="formbold-btn" type="submit"> Appointment</button>
            </div>
        </form>
    </div>
</div>

@endsection
