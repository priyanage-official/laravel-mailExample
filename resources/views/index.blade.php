<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Testing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    @if (Route::has('login'))
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @auth
                <a href="{{ url('/home') }}" class="nav-link active">Home</a>
                @else
                <a href="{{ route('login') }}" class="nav-link">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="nav-link">Register</a>
                @endif
                @endauth
            </div>
        </div>
    </nav>
    @endif

    @if(Auth::check())
    <div class="jumbotron">
        <h2>Welcome back {{auth()->user()->name}}</h2>
        <hr>
        <a href="{{route('home')}}">
            <p>Dashboard</p>
        </a>
    </div>
    @else
    <div class="jumbotron m-5">
        <h2>Register Or Login</h2>
        <hr>
        <a href="{{route('login')}}">
            <p>Login</p>
        </a>
        <a href="{{route('register')}}">
            <p>Register</p>
        </a>
    </div>
    @endif
</body>

</html>