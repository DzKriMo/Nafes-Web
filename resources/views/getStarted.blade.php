<!DOCTYPE html>
<html>
<head>
    <title>Get Started</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/getStarted.css">
</head>
<body>
    <div id="topWhite"></div>
<div id="biggerContainer">
    <div id="BigContainer">
        
        <br><br>
        <h2>Join us</h2>
        <p style="text-align: center">Let us Walk you through on <br>  Becoming Nafas Therapist Today. </p>
        <div class="multi-step-form">
            <div id="progress-bar">
                <div class="step-marker" id="marker1">
                    <div class="circle"></div>
                    <p> Basic Info</p></div>
                    <div id="line1" class="line"></div>
                <div class="step-marker" id="marker2">
                    <div class="circle"></div>
                    <p>Contact Info</p></div>
                    <div id="line2" class="line"></div>
                <div class="step-marker" id="marker3">
                    <div class="circle"></div>
                    <p>Login Info</p></div>
              </div>

<br><br><br>

<div class="step" id="step1">
    <h5 class="step-title"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="12" cy="12" r="12" fill="#333333"/>
        <path d="M11.1841 14.2402L12.2521 8.2042L10.4641 9.45219L9.97207 8.5882L12.7801 6.80019H13.5721L12.2641 14.2402H13.6921L13.5241 15.2002H9.30007L9.46807 14.2402H11.1841Z" fill="white"/>
        </svg>
        Basic Info</h5>
    
    <div class="stepp" id="stepp1">
        <p style="text-align: left; ">Let us know some basic informations about who you are</p>
    <p class="req">all feilds with * are required</p>
        <div class="input-group">
            <label for="firstName">*First Name:</label><br>
            <input type="text" id="firstName" name="firstName" required>
        </div> 
    
        <div class="input-group">
            <label for="middleName">Middle Name:</label>
            <input type="text" id="middleName" name="middleName" >
        </div>
    
        <div class="input-group">
            <label for="lastName">*Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
    
        <div class="input-group">
            <label for="gender">*Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Wallmart Bag</option>
            </select>
        </div>
    
        <div class="input-group">
            <label for="birthday">*Birthday:</label>
            <input type="date" id="birthday" name="birthday">
        </div>
        <button class="next-btn" onclick="changeStep(2)">Next</button>
    </div>
</div>
              
              
            </div>
            <div class="step" id="step2">
              <h5 class="step-title"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="12" fill="#333333"/>
                <path d="M14.6041 8.68419C14.6041 9.10019 14.5041 9.47619 14.3041 9.81219C14.1121 10.1402 13.8561 10.4402 13.5361 10.7122C13.2161 10.9842 12.8721 11.2482 12.5041 11.5042C12.1441 11.7522 11.7921 12.0122 11.4481 12.2842C11.1121 12.5482 10.8201 12.8362 10.5721 13.1482C10.3241 13.4602 10.1601 13.8162 10.0801 14.2162H13.8961L13.7281 15.2002H8.90407C8.89607 15.1362 8.88807 15.0642 8.88007 14.9842C8.87207 14.9042 8.86807 14.8282 8.86807 14.7562C8.86807 14.1962 8.97607 13.7042 9.19207 13.2802C9.41607 12.8482 9.70007 12.4642 10.0441 12.1282C10.3961 11.7922 10.7641 11.4842 11.1481 11.2042C11.5401 10.9242 11.9081 10.6602 12.2521 10.4122C12.6041 10.1562 12.8881 9.8962 13.1041 9.6322C13.3281 9.3682 13.4401 9.0802 13.4401 8.7682C13.4401 8.41619 13.3201 8.13619 13.0801 7.9282C12.8401 7.7202 12.5441 7.61619 12.1921 7.61619C11.8481 7.61619 11.5361 7.68019 11.2561 7.80819C10.9841 7.93619 10.7121 8.11619 10.4401 8.34819L9.93607 7.53219C10.2641 7.26819 10.6201 7.05619 11.0041 6.89619C11.3881 6.7362 11.8281 6.6562 12.3241 6.6562C12.7801 6.6562 13.1761 6.74419 13.5121 6.92019C13.8561 7.09619 14.1241 7.33619 14.3161 7.64019C14.5081 7.9442 14.6041 8.2922 14.6041 8.68419Z" fill="white"/>
                </svg>
                Contact Info</h5>
              <div class="stepp" id="stepp2">

                <p style="text-align: left; ">Let us know how to contact you</p>
                <p class="req">all feilds with * are required</p>

                <div class="input-group">
                    <label for="phone">*Phone Number:</label><br>
                    <input type="phone" id="phone" name="phone" required>
                </div>
                <button class="next-btn" onclick="changeStep(3)">Next</button>
              </div>
              
            </div>
            <div class="step" id="step3">
              <h5 class="step-title"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="12" fill="#333333"/>
                <path d="M10.0681 11.2642L10.2121 10.3882H10.5961C11.3801 10.3882 12.0081 10.2482 12.4801 9.9682C12.9521 9.68019 13.1881 9.29219 13.1881 8.80419C13.1881 8.43619 13.0601 8.14419 12.8041 7.9282C12.5561 7.7042 12.2361 7.5922 11.8441 7.5922C11.4761 7.5922 11.1601 7.6522 10.8961 7.7722C10.6321 7.8842 10.3961 8.0162 10.1881 8.1682L9.76807 7.35219C10.0481 7.15219 10.3681 6.98819 10.7281 6.86019C11.0961 6.7242 11.5121 6.6562 11.9761 6.6562C12.4641 6.6562 12.8801 6.7482 13.2241 6.9322C13.5761 7.1162 13.8441 7.3602 14.0281 7.6642C14.2121 7.9602 14.3041 8.28019 14.3041 8.62419C14.3041 9.1842 14.1401 9.6402 13.8121 9.9922C13.4841 10.3362 13.0041 10.6042 12.3721 10.7962C12.8761 10.9722 13.2641 11.2322 13.5361 11.5762C13.8081 11.9202 13.9441 12.3282 13.9441 12.8002C13.9441 13.3122 13.8121 13.7602 13.5481 14.1442C13.2841 14.5282 12.9201 14.8242 12.4561 15.0322C12.0001 15.2402 11.4761 15.3442 10.8841 15.3442C10.4281 15.3442 9.99607 15.2842 9.58807 15.1642C9.18807 15.0362 8.84807 14.8642 8.56807 14.6482L9.20407 13.7962C9.40407 13.9642 9.64407 14.1042 9.92407 14.2162C10.2041 14.3282 10.5241 14.3842 10.8841 14.3842C11.4281 14.3842 11.8801 14.2522 12.2401 13.9882C12.6001 13.7242 12.7801 13.3442 12.7801 12.8482C12.7801 12.4082 12.6081 12.0362 12.2641 11.7322C11.9201 11.4202 11.3921 11.2642 10.6801 11.2642H10.0681Z" fill="white"/>
                </svg>
                Login Info</h5>
              <div class="stepp" id="stepp3">

                <p style="text-align: left; ">Setup your login informations</p>
                <p class="req">all feilds with * are required</p>

                <div class="input-group">
                    <label for="email">*Email:</label><br>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">*Password:</label><br>
                    <input type="password" id="password" name="password" required>
                </div>
                <button class="submit-btn next-btn" onclick="submitForm()">Submit</button>
              </div>
              
            </div>
          </div>
      
    </div>
</div>
    <script src="/js/getStarted.js"></script>
</body>
</html>
