<html>

<head>
    <title>Nafes نفس</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.ico">
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/index.css">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f0f0f0; border-radius: 15px; margin: 5px;">
        <!-- Logo and text -->
        <a class="navbar-brand" href="{{route('index')}}">Nafes</a>

        <!-- Toggler button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">&nbsp;&nbsp;About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">&nbsp;&nbsp;Advice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq') }}">&nbsp;&nbsp;FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">&nbsp;&nbsp;Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">&nbsp;&nbsp;Contact</a>
                </li>
                @auth
                <li class="nav-item">
                &nbsp;
                
                    <a href="{{ url('/dashboard') }}" class="nav-button">
                    
                    <button class="nav-button ">Dashbord</button>
                    </a>
                
                </li>
                @else
                <li class="nav-item">
                &nbsp;
                
                    <a href="{{ route('login') }}" class="nav-button">
                    
                    <button class="nav-button ">Login</button>
                    </a>
                
                </li>
                <li class="nav-item">
                &nbsp;
                </li>
                <li class="nav-item">
                &nbsp;   
                <a href="{{ route('register') }}" class="nav-button">
                     <button class="nav-button ">Apply as a Therapist</button>
                    </a>
                   
                </li>
                @endauth
                
                <li class="nav-item">
                &nbsp;
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <br>
    <h1 style="color: #f0f0f0; font-weight: 550; text-align: center; font-size: 36px;">Download the app<br>
       and start healing!</h1>   
<p style="text-align: center; font-size:24px;">Your Voice Matters. Let Us Listen, Understand,<br> and Guide You Towards the Best Psychological <br>Care in Algeria, Because Your Mental Health Truly <br>Matters!
Exclusively Available on our App</p>
<div class="video-container">
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
        <img src="/img/image.png" style="width: 50%; max-width: 400px;" />
    </a>
</div><br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    </div>

    <br><br><br><br>
   


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>