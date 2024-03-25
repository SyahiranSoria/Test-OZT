<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('table.css') }}" > --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<header>
    <!-- header -->
    <nav class="nav nav-borders">
        <a class="nav-link{{ request()->routeIs('dashboard') ? ' active ms-0' : '' }}" href="{{ route('dashboard') }}">Home</a>
        <a class="nav-link{{ request()->routeIs('api') ? ' active ms-0' : '' }}" href="{{ route('api') }}">API</a>
        @auth
        <form method="GET" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link nav-link ms-auto">Logout</button>
        </form>               
        @endauth
    </nav>
</header>
<body>

    
    <!-- Navigation bar -->
    
    

    <!-- Page content -->
    <div class="container">
        @yield('content')
    </div>

    
</body>
</html>
