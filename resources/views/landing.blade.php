<!DOCTYPE html>
<html>
<head>
    <title>Nafes</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/landing.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #68b29f8f; border-radius: 15px; margin: 5px; positon: absolute;">
    
    <a class="navbar-brand" href="{{route('index')}}" style="margin-left: 10px; color: #FFFFFF;">Nafes</a>

    <!-- Toggler button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar items -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-auto text-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}"style="color: #FBFBFB">About</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('faq') }}" style="color: #FBFBFB">FAQ</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('patient') }}" style="color: #FBFBFB">I'm a Patient</a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"style="color: #FBFBFB">Contact us</a>
            </li>
        </ul>
    </div>

    
    <div class="ml-auto">
        @auth
        <a href="{{ url('/dashboard') }}" class="nav-button" style="margin-right: 10px;">
            <button class="nav-button">Dashboard</button>
        </a>
        @else
        <a href="{{ route('login') }}" class="nav-button" style="margin-right: 10px;">
            <button class="nav-button">Log in</button>
        </a>
        @endauth
    </div>
</nav>



<div class="container" id="firstContainer">
<h1 id="ready">Ready to work with us <br><br>
    and help others?</h1>
    <p id="please">Please start the procedure so you can be a professional <br> therapist in Nafes</p>
    <a href="{{route('register')}}"><button id="getStartedButton" >Get Started with us</button></a>



</div>

<div class="container" id="secondContainer">
    <br><br>
    <h3 style="text-align: center; font-weight:600;">Our Services</h3>
    <h1 style="text-align: center; font-weight:600;">High-impact services <br> for your business</h1>

</div>

<div class="containter" id="thirdContainer">
    <div style="width:50%" id="blankcore"></div>
    <div style="flex: 1;" id="core-mission">
    <h2 id="core">The core mission <br> behind all our <br> work : Your Happiness</h2>
    <p id="mission">Here at Nafes we work hard  to make <br> sure you are happy and mentally well</p>
    <br><br>
    <a href="{{route('register')}}" ><button id="getStartedButton2">Get Started with us</button></a>
</div>
</div>


<div class="container" id="fourthContainer">
    <div id="next-level"></div>
</div>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>
