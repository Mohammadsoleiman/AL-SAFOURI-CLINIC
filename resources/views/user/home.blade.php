@extends('layouts.app1')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> --}}
            {{-- <div class="card">
                <div class="card-header">{{ __('User') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}

                <section class="doctor_section layout_padding">
                    <div class="container">
                      <div class="heading_container heading_center">
                        <h2>
                         Welcome Patient
                        </h2>
                        <p class="col-md-10 mx-auto px-0" id="justify">
                            We have highly experienced doctors and the highest technology in performing dental x-rays, and all medications are available.We are at your service. I hope to book your appointments from 9:00 am to 5:00 pm.
                        </p>
                      </div>
                      <div class="row" id="rows">
                        <div class="col-sm-6 col-lg-4 mx-auto" id="box">
                          <div class="box">
                            <div class="img-box">
                              <img src="images/dental.jpg" alt="" height="250px">
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
                                <a href="{{ route('appointment.create') }}">
                                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                              </div>
                              <h5>
                                Dentistry
                              </h5>
                              <h6 class="">
                                Doctors
                              </h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mx-auto" id="box">
                          <div class="box">
                            <div class="img-box">
                              <img src="images/heath.jpg" alt="" height="250px">
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
                                <a href="{{ route('appointmentone.create') }}">
                                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                              </div>
                              <h5>
                                Public Healthy
                              </h5>
                              <h6 class="">
                                Doctors
                              </h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 mx-auto" id="box">
                          <div class="box">
                            <div class="img-box">
                              <img src="images/xray.jpg" alt="" height="250px">
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
                                <a href="{{ route('xray.create') }}">
                                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                              </div>
                              <h5>
                                X-Ray
                              </h5>
                              <h6 class="">
                                Appointment
                              </h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4  mx-auto" id="box"  >
                            <div class="box">
                              <div class="img-box">
                                <img src="images/pharmacy.jpg" alt="" height="250px">
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
                                  <a href="{{ url('show') }}">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                  </a>
                                </div>
                                <h5>
                                  Pharmacy
                                </h5>
                                <h6 class="">
                                  Views
                                </h6>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="btn-box">,

                        <a href="">
                            <button>
                          View All</button>
                        </a>
                      </div>
                    </div>
                  </section>
            </div>
        {{-- </div>
    </div>
</div> --}}
@endsection
