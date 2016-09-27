<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.5.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img//logo.png" type="image/x-icon">
  <meta name="description" content="">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900">


  <link rel="stylesheet" href="css/neendut.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

  <section id="menu-0">

      <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
          <div class="container">

              <div class="mbr-table">
                  <div class="mbr-table-cell">

                      <div class="navbar-brand">
                          <a href="/" class="navbar-logo"><img src="img//logo.png" alt="Mobirise"></a>
                          <a class="navbar-caption" href="/">Neendut</a>
                      </div>

                  </div>
                  <div class="mbr-table-cell">

                      <button class="navbar-toggler pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                          <div class="hamburger-icon"></div>
                      </button>

                      <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-xl" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="https://mobirise.com/">OVERVIEW</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/">FEATURES</a><div class="dropdown-menu"><a class="dropdown-item" href="https://mobirise.com/">Mobile friendly</a><a class="dropdown-item" href="https://mobirise.com/">Based on Bootstrap</a><div class="dropdown"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/">Trendy blocks</a><div class="dropdown-menu dropdown-submenu"><a class="dropdown-item" href="https://mobirise.com/">Image/content slider</a><a class="dropdown-item" href="https://mobirise.com/">Contact forms</a><a class="dropdown-item" href="https://mobirise.com/">Image gallery</a><a class="dropdown-item" href="https://mobirise.com/">Mobile menu</a><a class="dropdown-item" href="https://mobirise.com/">Google maps</a><a class="dropdown-item" href="https://mobirise.com/">Social buttons</a><a class="dropdown-item" href="https://mobirise.com/">Google fonts</a><a class="dropdown-item" href="https://mobirise.com/">Video background</a></div></div><a class="dropdown-item" href="https://mobirise.com/">Host anywhere</a></div></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="https://mobirise.com/">HELP</a><div class="dropdown-menu"><a class="dropdown-item" href="http://forums.mobirise.com/">Forum</a><a class="dropdown-item" href="https://mobirise.com/">Tutorials</a><a class="dropdown-item" href="https://mobirise.com/">Contact us</a></div></li></ul>
                      <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                          <div class="close-icon"></div>
                      </button>

                  </div>
              </div>

          </div>
      </nav>

  </section>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


<script src="js/plugins.js"></script>

</body>
</html>
