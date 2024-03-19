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

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fbfbfbed;  positon: absolute; border-radius: 10px;">
    
    <a class="navbar-brand" href="{{route('index')}}" style="margin-left: 10px; color: #0C0C0CE5;"><img src="/img/logo.png" alt="logo" style="width: 30px; height:30px; filter: invert(100%);"> Nafes</a>

    <!-- Toggler button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar items -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-auto text-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}"style="color: #0C0C0CE5">About</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('faq') }}" style="color: #0C0C0CE5">FAQ</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('patient') }}" style="color: #0C0C0CE5">I'm a Patient</a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"style="color: #0C0C0CE5">Contact us</a>
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
    <a href="{{route('rp')}}"><button id="getStartedButton" >Get Started with us</button></a>



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
    <div class="container" id="stats">
        <div id="family">
            <h2 class="hh2">200+</h2>
            <h4 class="hh4">We're a family</h4>
            <p class="pp">Our idea attract everyday hardworking <br>therapists from all over the country</p>
        </div>

        <div id="better">
           <h2 class="hh2">80%</h2>
           <h4 class="hh4">Better than traditional therapy</h4>
           <p class="pp">Online therapy through nafes has provided <br> very optimistic numbers satisfiying both <br> the client and the therapist</p>            
        </div>

        <div id="clients">
            <h2 class="hh2">10K+</h2>
            <h4 class="hh4">Clients in shaa Allah</h4>
            <p class="pp">Our services has connected thousands <br> of clients and therapists</p>
        </div>

    </div>
<br><br><br><br><br>
<div class="container" id="test">
<div class="container" id="ramy">
    <img src="/img/ramy.png" alt="ramy" id="ramyImage">
</div>
<br>
<h4 class="hh2" style="text-align: center" id="speech">“Be genuine in your assessment, and provide constructive feedback to benefit both potential customers and the company providing the product or service.”</h4>
<br>
<h6 class="hh2" style="text-align: center" id="Name">Rami feghali</h6>

<p class="pp" style="text-align: center" id="bio"> sadi9 el Co founder of <br> Nafes</p>



<div id="arrowsContainer">
    <div id="arrows">
        <img src="/img/left.png" alt="left" style="width:44px; height:44px; margin-left:-5px; margin-right:5px;" id="left" onclick="left()">
        <br><br>
        <img src="/img/right.png" alt="right" style="width:44px; height:44px; margin-left:5px; margin-right:-5px; " id="right" onclick="right()">
    </div>
</div>

</div>

</div>

<div class="container" id="fifthContainer">
    <div class="container" id="subsCont">
        <div class="container" id="suub">
            <div id="NafesContainer">
            <h1 id="hnafes"> <img src="/img/logo.png" alt="logo" style="width: 45px; height:45px"> Nafes</h1>
            <p id="pnafes">We’re a team of students that wants to <br> develop the therapy culture in Algeria</p>
        </div>

        <div id="subscribe">
            <h6 style="color: #FBFBFB;">Subscribe</h6>
            <div class="email-subscribe">
                <input type="email" placeholder="Enter your email here" required id="email-input">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" style="z-index: 3;"><button type="submit">Subscribe</button></a>
              </div>
        </div>
        </div>
    </div>
    <hr style="border-color: white;margin-left: 8%;margin-right:8%;">
    <div id="bottomcont">
    <div id="bottom">
        <div id="contactus">
            <h5 style="color: #FBFBFB">Contact Us</h5>
            <p style="color: #FBFBFB; font-size:12px;">+21379758587</p>
        </div>
        <div id="address">
            <h5 style="color:#FBFBFB">Address</h5>
            <p style="color: #FBFBFB; font-size:12px">10 rue de châteaudun Clermont-Ferrand</p>
        </div>
        <div id="socials">
            <a href="#"><img src="/img/facebook.png" alt="facebook" class="social"></a>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img class="social" src="/img/instagram.png" alt="intagram"></a>
            <a href="#"><img src="/img/linkedin.png" alt="linkedin" class="social"></a>
        </div>
    </div>
</div>
<br>
</div>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/landing.js"></script>

</html>
