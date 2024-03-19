<!DOCTYPE html>
<html>
    <head>
        <title>Register to Nafes</title>
        <link rel="icon" type="image/x-icon" href="/img/logo.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/register.css">
    </head>

<body>
<div id="formContainer">
    <div id="square-div">
        
       
    
        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <img src="/img/logo.png" alt="logo" style="width: 40px; height:40px; filter: invert(100%);margin-top:20px; ">

            <h2 style="text-align: center; padding:10px">Become a Nafes Therapist!</h2>
            <label for="name">Name
            </label>
            <input id="name" type="text" name="name" required autofocus>
    
            
            <label for="email">Email
            </label>
            <input id="email" type="email" name="email" required autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
    
          
            <label for="password">Password
            </label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
    
           
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
           
            <a href="{{ route('login') }}" style="text-align: center">Already registered?</a>
    
           
            <button type="submit" id="Rbutton">Register</button>
        </form>
    </div>
</div>

</body>
    
</html>