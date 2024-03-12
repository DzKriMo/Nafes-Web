<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>FAQ - Nafes</title>
<link rel="icon" type="image/x-icon" href="/img/logo.ico">
<style>
   

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-image: url("/img/bck.png");
  background-size: cover;
  background-position: center;
    }


    h3 {
        margin-top: 30px;
    }

    .question {
        font-weight: bold;
        margin-top: 20px;
    }

    .answer {
        margin-bottom: 20px;
    }
    body{
  background-color: #68B2A0;
  background-image: url("/img/back.png");
 font-family: 'ABeeZee';
 display: flex;
 flex-direction: column;
 min-height: 100vh;
 margin: 0;
 

}
  
 
  .navbar {
     background-color: #f0f0f0; 
     border-radius: 15px;
     margin-left: 5px;
     margin-right: 5px;
     margin-top: 0;
     color: #23373B;
     box-shadow: #23373B80 4px 4px 4px;
    height: 12vh;
}
 .nav-link {
    color: #fff;
}
.navbar-collapse.collapsing,
.navbar-collapse.show {
background-color: #f0f0f0e4; 
}

.nav-button{

  display: inline-block;
  
  border-radius: 10px;

  background-color: #68B2A0;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  border-color:  transparent ;
  
  cursor: pointer;
  font-size: 16px;
  text-shadow: black;
  margin-top: 2px;

}


.nav-button:hover {
  background-color: #5A9A88;
}
</style>
</head>
<body>
    
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
    <h1>Frequently Asked Questions</h1>
    <h3>General Questions</h3>
    <div class="faq-item">
        <div class="question">What is Nafes?</div>
        <div class="answer">Nafes is an online therapy platform in Algeria that provides convenient and accessible counseling services to enhance mental well-being.</div>
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