

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
				initial-scale=1.0">
    <title>@yield( 'title' )</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"integrity=
"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity= "sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('style1.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

     <nav class="navbar navbar-light p-1" id="navbar" >
        <div class="container-fluid ">
          <a class="navbar-brand" style="color: white">Managemant Admin</a>
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

          <li class="nav-item dropdown" style="list-style: none">

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



<!-- Masthead-->


    <div class="container-fluid p-0 d-flex h-100 ms-1"  >
        <div class="d-flex flex-column flex-shrink-0 p-3  text-white offcanvas-md offcanvas-start"id="bdSidebar" >
            <a href="#" class="navbar-brand">
            </a>
            <hr>
            <ul class="mynav nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="{{ route('users.index') }}">
                        <i class="fa-solid fa-users"></i>
                       Users
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="{{ route('doctors.index') }}">
                        <i class="fa-solid fa-user-doctor"></i>

                        Add Doctor

                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('requests.index') }}">
                        <i class="fa-solid fa-user-plus"></i>
                       Requests User
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('pharmacys.index') }}">
                        <i class="fa-solid fa-prescription-bottle-medical"></i>
                        Pharmacy
                    </a>
                </li>
                <li class="nav-item mb-1">
            <a href="{{ route('messages.index') }}">
                <i class="fa-regular fa-message"></i>
                      Message
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{route('historys.index') }}">
                        <i class="fa-solid fa-briefcase"></i>
                        Work Doctor
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="{{ route('xray.index') }}">
                        <i class="fa-regular fa-calendar-check"></i>
                        X-ray
                    </a>
                </li>

                <li class="sidebar-item nav-item mb-1">

                    <ul id="settings" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">

                                <i class="fas fa-sign-in-alt pe-2"></i>
                                <span class="topic"> Login</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fas fa-user-plus pe-2"></i>
                                <span class="topic">Register</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fas fa-sign-out-alt pe-2"></i>
                                <span class="topic">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <hr>

        </div>

        <div class="bg-light flex-fill ">
            <div class="p-2 d-md-none d-flex text-white " id="meun">
                <a href="#" class="text-white" data-bs-toggle="offcanvas" data-bs-target="#bdSidebar">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <span class="ms-3">Medical</span>
            </div>
            <div class="h-100">
               @yield('content')

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</body>

</html>
