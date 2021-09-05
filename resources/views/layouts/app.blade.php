<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dr. M.M.A. Rhonda Tucker</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
@stack('css')
       
</head>
<body>
    <div class="container" align="center">
        {{-- <img class="img-responsive" alt="bsmmu" src="{{asset('img/logo.png')}}" width="50%"> --}}
    </div>
    <div id="app">
        @auth
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('doctors/dashboard/records') }}">
                    Records
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                @if (!Auth::guest())
                    <li><a class="navbar-brand" href="{{ url('doctors/records/create') }}">Add Record</a></li>
                @endif
            </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @else
        @endauth

        <main class="align-middle justify-content-center">
            @yield('content')
        </main>
    </div>
    {{-- <p class="text-center">&copy; Bangabandhu Sheikh Mujib Medical University</p> --}}
    @if(Request::is('login*'))
    @elseif(Request::is('register'))
    @elseif(Request::is('doctors*'))
    @else
        <!-- footer -->
        <section class="footer_widget bg-dark">
            <div class="container-fluid">
                <h3 class="text-white text-center pt-3">Other Chembers</h3>
                <div class="row mx-auto  text-white pt-4">
                    <div class="col-md-2">
                        <h5>Dhaka</h5>
                        <p>#40, Monoara Memorial Hospital, Dhanmondi, D-block, Road No: 32, Dhaka</p>
                        <p>10 AM to 1 PM</p>
                        <p>For Serial: 01785-467352</p>
                    </div>
                    <div class="col-md-2">
                        <h5>Chittagong</h5>
                        <p>#40, Monoara Memorial Hospital, Dhanmondi, D-block, Road No: 32, Dhaka</p>
                        <p>10 AM to 1 PM</p>
                        <p>For Serial: 01785-467352</p>
                    </div>
                    <div class="col-md-2">
                        <h5>Khulna</h5>
                        <p>#40, Monoara Memorial Hospital, Dhanmondi, D-block, Road No: 32, Dhaka</p>
                        <p>10 AM to 1 PM</p>
                        <p>For Serial: 01785-467352</p>
                    </div>
                    <div class="col-md-2">
                        <h5>Barishal</h5>
                        <p>#40, Monoara Memorial Hospital, Dhanmondi, D-block, Road No: 32, Dhaka</p>
                        <p>10 AM to 1 PM</p>
                        <p>For Serial: 01785-467352</p>
                    </div>
                    <div class="col-md-2">
                        <h5>Sylhet</h5>
                        <p>#40, Monoara Memorial Hospital, Dhanmondi, D-block, Road No: 32, Dhaka</p>
                        <p>10 AM to 1 PM</p>
                        <p>For Serial: 01785-467352</p>
                    </div>
                    <div class="col-md-2">
                        <h5>Rajshahi</h5>
                        <p>#40, Monoara Memorial Hospital, Dhanmondi, D-block, Road No: 32, Dhaka</p>
                        <p>10 AM to 1 PM</p>
                        <p>For Serial: 01785-467352</p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="card-footer bg-dark">
            <p class="initialism my-1 text-white text-center">&copy; Bangabandhu Sheikh Mujib Medical University</p>
        </footer>
        <!-- footer -->
    @endif

    <!-- JavaScripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/script.js') }}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
@stack('js')