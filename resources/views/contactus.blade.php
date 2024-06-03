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
    <link rel="stylesheet" href="/css/contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>

<body>

  <div id="navbar">
        
    <div id="titre" style="width: 25%; display: flex; justify-content: center; align-items: center;">
        <a href="{{route('index')}}" style="text-decoration: none;">
            <h1 style="font-size: 28PX; text-decoration: none; color: rgb(0, 0, 0);">Nafes</h1>
        </a>
    </div> 
    
    <div id="elbar" style=" width: 25%; padding-top: 0.7%; text-align: center; font-size: 16PX;"><ul>
        <li><a href="{{route('index')}}" style="text-decoration: none;">Home</a></li>
        <li><a href="{{route('contactus')}}" style="text-decoration: none;">Contact us</a></li>
    </ul></div> 

    <div style=" width: 25%; display: flex; align-items: center; justify-content: center;">
        @auth
        <a href="{{ url('/dashboard') }}">
           <button class="log">Dashboard</button>
        </a>
        @else
        <a href="{{ route('login') }}">
            <button class="log">Log in</button>
        </a>
        @endauth
    </div>

</div>


<div class="cent">
<div class="parent">
 <DIV class="cont1">
  <div class="div1">
    <div class="msg">
      <h1>Let's talk</h1>
      <p>We collaborate with thousands of therapists</p>
    </div>
    <hr style="border-color: grey; margin-bottom: 25px; width: 100%;">
    
    <ul><div class="cont" style=" margin-left: -40PX; ">
      
        <li><img style="width: 21px; height: 17px; margin:auto;" src="/img/vector.png" alt="" >
          <div class="iconText" ><h2>Our email</h2> <p>help@nafes.com</p></div></li>
          <li><DIV class="imgi"><img src="/img/tel.png" alt="" ></DIV>
            <div class="iconText"><h2>Call us</h2> <p>+213562381892</p></div></li>
            <li><DIV class="imgi"  ><img src="/img/mapIcon.png" alt="" style="width: 40PX;"></DIV>
              <div class="iconText"><h2>Find us</h2> <a href="" style="text-decoration: none; color: black; "><p style="font-size: 14PX;
                margin-top: -8px;">Open Google Maps</p></a></div>
            </div></li>
          </ul>    
          <hr style="border-color: grey; margin-top: 25px; width: 100%;">
          <ul style="list-style: none; margin-top: 22px;">
            <div class="so" > 
              
                <li style="display: inline;"><i class="fa-brands fa-facebook-f"></i></li>
                <li style="display: inline;" ><i class="fa-brands fa-instagram"></i></li>
                <li style="display: inline;"><i class="fa-brands fa-linkedin-in"></i></li>
              
            </div></ul>
            </div>
          </DIV>
<DIV class="cont2">
  <form action="" method="post">
    <div class="formContainer">
      <div class="fn">
        <label for="firstName">First name</label>
        <input type="text" name="firstName">
      </div>
      <div class="ln">
        <label for="lastName">Last name</label>
        <input type="text" name="lastName">
      </div>
      <div class="email">
        <label for="email">Email</label>
        <input type="email" name="email">
      </div>
      <div class="phone">
        <label for="phone">Phone</label>
        <input type="tel" name="phone">
      </div>
      <div class="message">
        <label for="message">Message</label>
        <input type="text" name="message">
      </div>
      <div class="submition">
        <button type="submit">Submit now</button>
      </div>
  </div>
</form>
</DIV> 
  <div class="map"> <a href="#"><img src="/img/map.png" alt="location" style="width: 1250PX;"></a> </div>

</div>
</DIV>




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
                <a href="" style="z-index: 3;"><button type="submit">Subscribe</button></a>
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
            <a href="#"><img class="social" src="/img/instagram.png" alt="intagram"></a>
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