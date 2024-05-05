<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Contact </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="sub_page">

  <div class="hero_area">
    <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
              medical center
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('homedoctor') }}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('about') }}"> About</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest</ul>
            </div>
          </nav>
        </div>
      </header>
    <!-- end header section -->
  </div>
  @if (session('success'))
  <div class="alert alert-success"style="padding: 5px" role="alert">
{{ session( 'success' ) }}
  </div>
@elseif (session('failure'))
<div class="alert alert-danger" style="padding: 5px" role="alert">
{{ session( 'failure' ) }}
</div>
  @endif
  <!-- contact section -->
  <section class="contact_section layout_padding" id="contact">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">


          <div class="form_container contact-form">
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input type="text" placeholder="Your Name" name="name" />
                  </div>
                  @error('name')
                  <div class="form-error">
                  {{$message}}
                  </div>
                  @enderror
                </div>
                <div class="col-lg-6">
                  <div>
                    <input type="email" placeholder="Email"  name="email"/>
                  </div>
                  @error('email')
                  <div class="form-error">
                  {{$message}}
                  </div>
                  @enderror
                </div>
              </div>
              <div>
                <input type="text" placeholder="Subject"  name="subject"/>
              </div>
              @error('subject')
              <div class="form-error">
              {{$message}}
              </div>
              @enderror
              <div>
                <input type="text" class="message-box" placeholder="Message"  name="message"/>
              </div>
              @error('message')
              <div class="form-error">
              {{$message}}
              </div>
              @enderror
              <div class="btn_box">
                <button type="submit">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1255.2971352265192!2d35.502273648571375!3d33.87036392335346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f176aec48dfef%3A0x511d6daaa719fc86!2z2LTYp9ix2Lkg2LXYqNix2KfYjCDYqNmK2LHZiNiq!5e0!3m2!1sar!2slb!4v1714855486695!5m2!1sar!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +961 70 639 058
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  mohammad@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="https://mail.google.com/mail/u/0/#inbox">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
                Contact us today to schedule an appointment or learn more about our services. Your journey to better health starts here at .
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>

              <a class="" href="doctors.html">
                Doctors
              </a>
              <a class="" href="contact.html">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="#">Medical Center<br><br></a>

        </p>

      </div>
    </div>
  </footer>

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- End Google Map -->

</body>

</html>
