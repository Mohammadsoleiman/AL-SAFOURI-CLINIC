@extends('doctor.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('doctor') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div> --}}
            {{-- </div>
        </div>
    </div>
</div> --}}

<section class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
         Welcome Doctor
        </h2>
        <p class="col-md-10 mx-auto px-0 " id="justify">
            When you encounter a problem on the website, you must report it to management. You must adhere to your work schedules and succeed in your work.
        </p>
      </div>
      <div class="row" id="rows">
        <div class="col-sm-6 col-lg-4 mx-auto" id="box">
          <div class="box">
            <div class="img-box">
              <img src="images/appdoctor.png" alt="" height="250px">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="{{ route('appointment.index') }}">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
              @auth




              <h5 style="text-transform: capitalize">
                {{ Auth::user()->name }}
              </h5>
              @endauth
              <h6 class="">
                All Appointment
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto" id="box">
          <div class="box">
            <div class="img-box">
              <img src="images/history.jpg" alt="" height="250px">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="{{ route('history.index') }}">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Patient History
              </h5>
              <h6 class="">
                Doctors
              </h6>
            </div>
          </div>
        </div>


      </div>
      <div class="btn-box mb-0">

        <a href="">
            <button>
          View All</button>
        </a>
      </div>
    </div>
  </section>
</div>

@endsection
