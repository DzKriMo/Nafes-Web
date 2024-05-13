<!DOCTYPE html>
<html>
<head>
    <title>Nafas نَفَس</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/land.css">

</head>
<body>
    
    <div id="navbar">
        
        <div id="titre" style="width: 25%; display: flex; justify-content: center; align-items: center;">
            <a href="{{route('index')}}" style="text-decoration: none;">
                <h1 style="font-size: 22PX; text-decoration: none; color: white;">nafes for professionals</h1>
            </a>
        </div> 
        
        <div id="elbar" style=" width: 25%; padding-top: 0.7%; text-align: center; font-size: 16PX;"><ul>
            <li><a href="{{route('index')}}" style="text-decoration: none;">Home</a></li>
            <li><a href="{{route('contactus')}}" style="text-decoration: none;">Contact us</a></li>
        </ul></div> 

        <div style=" width: 25%; display: flex; align-items: center; justify-content: center;">
            @auth
            <a href="{{ url('/dashboard') }}">
               <button>Dashboard</button>
            </a>
            @else
            <a href="{{ route('login') }}">
                <button id="log">Log in</button>
            </a>
            @endauth
        </div>

    </div>

    <div class="head">

        <div class="talk">
            <h1>Ready to work with us and help others</h1>
            <p>Please start the procedure so you can be a professional therapist in Nafes</p>
            <a href="{{ route('register') }}">
                <button class="getstart">
                    <img src="/img/arrow.png" alt="arrow" style="width: 18PX;">
                    Get Started with us
                </button>
            </a>
        </div>

    </div>

    <div class="section2">
        
        <h1>High-impact services<br>for your business</h1>
        <div class="parent">
            <div class="div1" style="background-color: #6fb6a5;">
                <img src="/img/1.png" alt="1">
                <h2 style="color: white;">Data colllection</h2>
                <p>With our step by step login process we collect enaugh data to understand the case better from the start</p>
            </div>
            <div class="div2">
                <img src="/img/2.png" alt="2">
                <h2>Identification</h2>
                <p>with our advanced Ai model we can identify the suitable patient you can help </p>
            </div>
            <div class="div3">
                <img src="/img/3.png" alt="3">
                <h2>Marketing</h2>
                <p>Our serivce collect patients from all over the country so finding clients is easier</p>
            </div>
            <div class="div4">
                <img src="/img/4.png" alt="4">
                <h2>Creativity</h2>
                <p>our creative platforms help the mental patient to stay focused and to everything to stay foundable</p>
            </div>
            <div class="div5">
                <img src="/img/5.png" alt="5">
                <h2>As it was</h2>
                <p>our platform support alot of advanced technologies so you can experiece the sessions as if it is physical meeting</p>
            </div>
            <div class="div6">
                <img src="/img/6.png" alt="6">
                <h2>shdbajsbhjdcbjhsadb</h2>
                <p>hhhhhhhh hhhh hhhhhhhhh hhhhhhhhhh hhhhhhhhhh hhhhhhhhh hhhhhhh hhhhhhh hhhhhhh</p>
            </div>
        </div>
        
    </div>

    <div class="section3">

        <div class="talk2">
            <h1>The core mission behind all our work : ???? </h1>
            <p>Our company focuses on linking between you the therapist and people who are in need for us, this is our responsability.</p>
            <a href="{{ route('register') }}">
                <button class="getstart">
                    <img src="/img/arrow.png" alt="arrow" style="width: 18PX;">
                    Get Started with us
                </button>
            </a>
        </div>

    </div>
    
    <div class="cont4">
    <div class="section4">
        <div class="talk3">
            <h1>Ready to take<br><span style="color: #2C6975;">your business</span><br>to the next level?</h1>
            <p>with the developement of the internet we encourage therapists to use our platform to connect and help others 
                with our tools we make identifying and treating mental patients easier.</p>
            <div class="rating">
                <img src="/img/pic.png" alt="profile-pic" style="width: 50PX; height: 50PX;">
                <div>
                <h3>Rated 5/5 stars</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div class="section5">

        <div class="d1">
            <h4>200+</h4>
            <h5>We’re a family</h5>
            <p>Our Idea attract everyday hardworking therapist from all over the country </p>
        </div>
        <div class="d2">
            <h4>80%</h4>
            <h5>Better than traditional therapy</h5>
            <p>Online therapy through nafes has provided very optimistic numbers satisfiying both client and therapist</p>
        </div>
        <div class="d3">
            <h4>10K+</h4>
            <h5>Client in shaa allah</h5>
            <p>Our Serivces has connected thousends of clients and therapists</p>
        </div>

    </div>

    <div class="section6">

        <div class="com">
            <img src="/img/pic.png" alt="pic" style="margin-bottom: 3%;">
            <p>“Be genuine in your assessment, and provide constructive feedback to benefit both potential customers and the company providing the product or service.”</p>
            <span style="color: #6fb6a5; font-size: 16PX; font-weight: 700;">Rami feghali</span>
            <div class="arrows">
                <img src="/img/left.png" alt="arrow" style="width: 35PX;">
                <img src="/img/right.png" alt="arrow" style="width: 35PX;">
            </div>
        </div>

    </div>


    <div class="container" id="fifthContainer">
        <div class="container" id="subsCont">
            <div class="container" id="suub">
                <div id="NafesContainer">
                <h1 id="hnafes"> <img src="/img/logo.png" alt="logo" style="width: 45px; height:43.3px"> Nafas</h1>
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
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-database.js"></script>

<script src="/js/landing.js"></script>






</html>