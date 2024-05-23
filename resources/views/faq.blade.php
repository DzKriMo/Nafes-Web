<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/x-icon" href="/img/logo.ico">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>FAQ</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
      
        <link rel="stylesheet" href="/css/faq.css" />
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fbfbfbed;  positon: absolute;">
    
            <a class="navbar-brand" href="{{route('index')}}" style="margin-left: 10px; color: #0C0C0CE5;"><img src="/img/logo.png" alt="logo" style="width: 30px; height:27.7px; filter: invert(100%);"> Nafas</a>
        
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
    
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
                        <a class="nav-link" href="{{route('contactus')}}"style="color: #0C0C0CE5">&nbsp;&nbsp;Contact us</a>
                    </li>
                </ul>
                <div class="ml-auto" id="loginButtonContainer">
                    <div id="loginButtonContainerr">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="nav-button" style="margin-right: 10px;">
                        <button class="nav-button" class="navLoginButton" style="padding-inline:5px;">Dashboard</button>
                    </a>
                    @else
                    <a href="{{ route('lp') }}" class="nav-button" style="margin-right: 10px;">
                        <button class="nav-button" class="navLoginButton" style="padding-inline:5px;">Log in</button>
                    </a>
                    @endauth
                </div>
                </div>
            </div>
        
            
            
        </nav>


        <div class="section">
            <div class="container">
                <h3 class="section-heading">FAQ</h3>
                <div class="faq-list">
                    <div class="faq">
                        <div class="faq-header">
                            <h3 class="faq-title">
                                What is Nafas?
                            </h3>
                        </div>
                        <div class="faq-body">
                            <div class="faq-text">
                                Nafas is an online therapy platform based in Algeria that provides convenient and accessible counseling services to enhance your mental well-being.                            </div>
                        </div>
                    </div>

                    <div class="faq">
                        <div class="faq-header">
                            <h3 class="faq-title">
                                How does Nafas work?
                            </h3>
                        </div>
                        <div class="faq-body">
                            <div class="faq-text">
                                Nafas allows users to connect with professional therapists online via text-based, voice message, or video call sessions from anywhere with an internet connection.                            </div>
                        </div>
                    </div>

                    <div class="faq">
                        <div class="faq-header">
                            <h3 class="faq-title">
                                What types of therapy are available on Nafas?
                            </h3>
                        </div>
                        <div class="faq-body">
                            <div class="faq-text">
                                Nafas offers a range of therapies, including cognitive-behavioral therapy (CBT), mindfulness-based therapy, and psychoanalytic therapy, tailored to meet individual needs.                            </div>
                        </div>
                    </div>

                    <div class="faq">
                        <div class="faq-header">
                            <h3 class="faq-title">
                                How long does a therapy session last?
                            </h3>
                        </div>
                        <div class="faq-body">
                            <div class="faq-text">
                                The duration of a therapy session on Nafas varies depending on the user's preferences and the therapist's recommendations, typically ranging from 30 to 60 minutes.
                            </div>
                        </div>
                    </div>


                    <div class="faq">
                        <div class="faq-header">
                            <h3 class="faq-title">
                                Is my information secure on Nafas?
                            </h3>
                        </div>
                        <div class="faq-body">
                            <div class="faq-text">
                                Yes, Nafas takes privacy and security seriously. All user information is encrypted and stored securely, adhering to strict privacy policies.                            </div>
                        </div>
                    </div>



                    <div class="faq">
                        <div class="faq-header">
                            <h3 class="faq-title">
                                How much does therapy cost on Nafas?
                            </h3>
                        </div>
                        <div class="faq-body">
                            <div class="faq-text">
                                Nafas offers affordable therapy options, with pricing plans tailored to meet different budget and therapy needs. Users can choose from subscription-based or pay-per-session options.                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="/js/faq.js"></script>
        
       

    </body>
</html>
