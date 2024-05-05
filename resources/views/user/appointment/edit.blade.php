@extends('doctor.app')
@section( 'content' )
<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">

    @if (session('success'))
        <div class="alert alert-success"style="padding: 5px"  role="alert">
     {{ session( 'success' ) }}
        </div>
@elseif (session('failure'))
<div class="alert alert-danger" style="padding: 5px" role="alert">
{{ session( 'failure' ) }}
</div>
        @endif

        <form action="{{ route('transfer.data', $appointment->id) }}"method="POST">
            @csrf



            <div class="formbold-mb-5">
                                <label for="name" class="formbold-form-label"> Report </label>

                                <textarea type="text" name="detail" id="name"  class="formbold-form-input" ></textarea>
                                @error('detail') <div class="form-error">{{$message}}</div>@enderror
                            </div>

            <div>
                <button class="formbold-btn" type="submit"> Appointment</button>
            </div>
        </form>

    </div>
</div>
@endsection
