<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('assets/css2.css')}}">
    <link href="{{ asset('assets/bootstrap.min.css')}}">
    <link href="{{ asset('assets/jquery.dataTables.css')}}">
    <link href="{{ asset('assets/select2.min.css')}}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else

                        @if (auth()->user()->level == 1)
                            <a class="navbar-brand" href="{{route('siswa.index')}}">Siswa</a>
                            <a class="navbar-brand" href="{{route('petuga.index')}}">Petugas</a>
                            <a class="navbar-brand" href="{{route('kela.index')}}">kelas</a>
                            <a class="navbar-brand" href="{{route('spp.index')}}">Spp</a>
                            <a class="navbar-brand" href="{{route('pembayaran.index')}}">Pembayaran</a>
                            <a class="navbar-brand" href="{{route('history.index')}}">Histroy</a>

                        @elseif(auth()->user()->level == 2)
                            <a class="navbar-brand" href="{{route('pembayaran.index')}}">Pembayaran</a>
                            <a class="navbar-brand" href="{{route('history.index')}}">Histroy</a>
                        @else
                            <a class="navbar-brand" href="{{route('history.index')}}">Histroy</a>
                        @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {{--  Jquery  --}}
    <script src="{{ asset('assets/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/jquery-3.6.0.slim.min.js')}}"></script>
    {{--  Bootstrap  --}}
    <script src="{{ asset('assets/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/popper.min.js')}}"></script>
    {{--  Datatables  --}}
    <script src="{{ asset('assets/jquery.dataTables.js')}}"></script>
    {{--  Select2  --}}
    <script src="{{ asset('assets/select2.min.js')}}"></script>

    <script>
        $(document).ready( function () {
            $('#search').DataTable();
        } );
    </script>

</body>
</html>
