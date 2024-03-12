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
<link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    body {
        font-family: 'ABeeZee';
        background-color: #68B2A0;
        background-image: url("/img/back.png");
        color: #333;
        
        padding: 0;
        display: flex;
 flex-direction: column;
 min-height: 100vh;
 margin: 0;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        flex: 1; 
  background-image: url("/img/bck.png");
  background-size: cover;
  background-position: center;
    }

    h1 {
        color: #23373B;
    }

    p {
        margin-bottom: 20px;
    }

    ul {
        list-style-type: decimal;
        margin-left: 20px;
    }

    blockquote {
        margin: 20px 0;
        padding: 10px 20px;
        border-radius: 25px;
        border-left: 5px solid #23373B;
        background-color: #fff;
        box-shadow: #23373BA0 4px 4px 4px;
        
    }

    blockquote p {
        margin: 0;
    }
    .navbar {
     background-color: #f0f0f0; 
     border-radius: 15px;
     margin-left: 5px;
     box-shadow: #23373B80 4px 4px 4px;
     margin-top: 0;
     margin-right: 5px;
     color: #23373B;
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
