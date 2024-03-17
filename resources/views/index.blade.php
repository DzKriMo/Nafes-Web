<html>

<head>
    <title>Nafes نفس</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.ico">
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/index.css">

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
                    <a class="nav-link" href="#contact"style="color: #FBFBFB">Contact us</a>
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

    <div class="container">
        <br>
    <h1 style="color: #f0f0f0; font-weight: 550; text-align: center; font-size: 36px;">Download the app<br>
       and start healing!</h1>   
<p style="text-align: center; font-size:24px;">Your Voice Matters. Let Us Listen, Understand,<br> and Guide You Towards the Best Psychological <br>Care in Algeria, Because Your Mental Health Truly <br>Matters!
Exclusively Available on our App</p>
<div class="video-container">
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
        <img src="/img/google.png" style="width: 50%; max-width: 400px;" />
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