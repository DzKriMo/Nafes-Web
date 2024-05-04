<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>FAQ - Nafes</title>
<link rel="icon" type="image/x-icon" href="/img/logo.ico">
<link rel="stylesheet" href="/css/faq.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fbfbfbed;  positon: absolute;">
    
        <a class="navbar-brand" href="{{route('index')}}" style="margin-left: 10px; color: #0C0C0CE5;"><img src="/img/logo.png" alt="logo" style="width: 30px; height:27.7px; filter: invert(100%);"> Nafas</a>
    
        <!-- Toggler button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Navbar items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-auto text-center">
                <li class="nav-item">
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}"style="color: #0C0C0CE5">&nbsp;&nbsp;About</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq') }}" style="color: #0C0C0CE5">&nbsp;&nbsp;FAQ</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('patient') }}" style="color: #0C0C0CE5">&nbsp;&nbsp;I'm a Patient</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"style="color: #0C0C0CE5">&nbsp;&nbsp;Contact us</a>
                </li>
            </ul>
            <div class="ml-auto" id="loginButtonContainer">
                <div id="loginButtonContainerr">
                @auth
                <a href="{{ url('/dashboard') }}" class="nav-button" style="margin-right: 10px;">
                    <button class="nav-button" class="navLoginButton">Dashboard</button>
                </a>
                @else
                <a href="{{ route('lp') }}" class="nav-button" style="margin-right: 10px;">
                    <button class="nav-button" class="navLoginButton">Log in</button>
                </a>
                @endauth
            </div>
            </div>
        </div>
    
        
        
    </nav>
<div class="container">
    <h1>Frequently Asked Questions</h1>
    <h3>General Questions</h3>
    <div class="faq-item">
        <div class="question">What is Nafes?</div>
        <div class="answer">Nafes is an online therapy platform based in Algeria that provides convenient and accessible counseling services to enhance your mental well-being.</div>
    </div>

    <div class="faq-item">
        <div class="question">How does Nafes work?</div>
        <div class="answer">Nafes allows users to connect with professional therapists online via text-based, voice message, or video call sessions from anywhere with an internet connection.</div>
    </div>

    <h3>Therapy Sessions</h3>
    <div class="faq-item">
        <div class="question">What types of therapy are available on Nafes?</div>
        <div class="answer">Nafes offers a range of therapies, including cognitive-behavioral therapy (CBT), mindfulness-based therapy, and psychoanalytic therapy, tailored to meet individual needs.</div>
    </div>

    <div class="faq-item">
        <div class="question">How long does a therapy session last?</div>
        <div class="answer">The duration of a therapy session on Nafes varies depending on the user's preferences and the therapist's recommendations, typically ranging from 30 to 60 minutes.</div>
    </div>

    <h3>Account and Billing</h3>
    <div class="faq-item">
        <div class="question">Is my information secure on Nafes?</div>
        <div class="answer">Yes, Nafes takes privacy and security seriously. All user information is encrypted and stored securely, adhering to strict privacy policies.</div>
    </div>

    <div class="faq-item">
        <div class="question">How much does therapy cost on Nafes?</div>
        <div class="answer">Nafes offers affordable therapy options, with pricing plans tailored to meet different budget and therapy needs. Users can choose from subscription-based or pay-per-session options.</div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>