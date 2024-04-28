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
    
        
       
    
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div  id="square-div">

            <!-- First Name -->
            <div class="subContainer" id="div1" class="mt-4">
                <x-input-label for="name" :value="__('First Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Last Name -->
            <div class="subContainer" id="div2" class="mt-4">
                <x-input-label for="LastName" :value="__('Last Name')" />
                <x-text-input id="LastName" class="block mt-1 w-full" type="text" name="LastName" :value="old('LastName')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('last name')" class="mt-2" />
            </div>
    
            <!-- Wilaya -->
            <div class="subContainer" id="div3" class="mt-4">
                <x-input-label for="wilaya" :value="__('Wilaya')" />
                <x-text-input id="wilaya" class="block mt-1 w-full" type="text" name="wilaya" :value="old('wilaya')" required autofocus autocomplete="wilaya" />
                <x-input-error :messages="$errors->get('wilaya')" class="mt-2" />
            </div>
    
            <!-- Phone -->
            <div class="subContainer" id="div4" class="mt-4">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="subContainer" id="div5" class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="subContainer" id="div6" class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="subContainer" id="div7" class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
             <!-- CV -->
             <div class="subContainer" id="div8" class="mt-4">
                <x-input-label for="cv" :value="__('Upload your CV')" />
                <x-text-input id="cv" class="block mt-1 w-full" type="file" accept=".pdf" name="cv" required />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>

            <!--button-->
            <div class="subContainer" id="div9" class="mt-4">
                <x-primary-button class="ms-4" style="background-color:#2C6975;">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </div>
        </form>
    
</div>
            

</body>
    
</html>