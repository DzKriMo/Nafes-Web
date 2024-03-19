<!DOCTYPE html>
<html>
    <head>
        <title>Login to Nafes</title>
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
        
       
    
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <img src="/img/logo.png" alt="logo" style="width: 40px; height:40px;margin-top:20px; " id="topLogo">

            <h2 style="text-align: center; padding:10px">Welcome back Doc!.</h2>
           
    
            
            <label for="email">Email
            </label>
            <input id="email" type="email" name="email" required autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
    
          
            <label for="password">Password
            </label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
    
           
           
           
            <a href="{{ route('rp') }}" style="text-align: center">Don't Have an account?</a>
    
           
            <button type="submit" id="Rbutton">Login</button>
        </form>
    </div>
</div>

</body>
    
</html>