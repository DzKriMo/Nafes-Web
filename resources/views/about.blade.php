<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Nafes</title>
<link rel="icon" type="image/x-icon" href="/img/logo.ico">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/css/about.css">
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
    <h1>About Nafes</h1>
    <p>Nafes (نفس) is an online therapy platform in Algeria that aims to enhance mental well-being by providing convenient and accessible counselling services. Here’s what you need to know about Nafes:</p>

    <h2>1) Comprehensive Mental Health Services:</h2>
    <p>Nafes offers a holistic approach to individuals’ health and well-being. Our services include diagnosis and psychological treatments for emotional and mental health problems. Highly skilled and professional therapists are available to provide support and guidance.</p>

    <h2>2) Convenient and Confidential:</h2>
    <p>Online therapy through Nafes provides a more convenient and accessible option for those who may not be able to attend traditional in-person therapy sessions. It also offers a confidential and private setting for discussing personal issues. Patients can access therapy from anywhere in the world with an internet connection.</p>

    <h2>3) Affordable and Flexible:</h2>
    <p>Nafes’s online therapy is cost-effective, making it accessible to a wider audience. Patients can choose from various communication modes, including text-based, voice messages, or video calls, based on their preferences. The platform allows patients to select their therapist and set the time, location, and initial direction of therapy.</p>

    <h2>4) Expert Care Anywhere, Anytime:</h2>
    <p>Nafes operates entirely online, eliminating waiting rooms and providing on-demand care. With a diverse team of many therapists, Nafes covers a range of specialties to meet unique needs.</p>

    <blockquote>
        <p>Testimonial from a Nafes User:</p>
        <p>“I have been battling depression for over a year now. It wasn’t until I started talking with a therapist on the phone that I really started feeling better. It is so easy, from the comfort of my own home, to chat with someone who understands what I am going through.”</p>
        <footer>- Manel, 1 year on Individual Nafes Care, Algeria</footer>
    </blockquote>

    <p>Whether you’re seeking support for anxiety, depression, or other mental health concerns, Nafes provides a supportive environment to help you on your journey toward well-being. 🌟</p>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
