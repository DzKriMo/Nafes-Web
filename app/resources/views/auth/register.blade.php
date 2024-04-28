<x-guest-layout>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
    
            <!-- First Name -->
            <div  >
                <x-input-label for="name" :value="__('First Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Last Name -->
            <div id="div2" class="mt-4">
                <x-input-label for="LastName" :value="__('Last Name')" />
                <x-text-input id="LastName" class="block mt-1 w-full" type="text" name="LastName" :value="old('LastName')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('last name')" class="mt-2" />
            </div>
    
            <!-- Wilaya -->
            <div id="div3" class="mt-4">
                <x-input-label for="wilaya" :value="__('Wilaya')" />
                <x-text-input id="wilaya" class="block mt-1 w-full" type="text" name="wilaya" :value="old('wilaya')" required autofocus autocomplete="wilaya" />
                <x-input-error :messages="$errors->get('wilaya')" class="mt-2" />
            </div>
    
            <!-- Phone -->
            <div id="div4" class="mt-4">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div id="div5" class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div id="div6" class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div id="div7" class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
             <!-- CV -->
             <div id="div8" class="mt-4">
                <x-input-label for="cv" :value="__('Upload your CV')" />
                <x-text-input id="cv" class="block mt-1 w-full" type="file" accept=".pdf" name="cv" required />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>
    
            <!-- {{-- <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
    --}}-->
               <div id="div9" class="mt-4">
                <x-primary-button class="ms-4" style="background-color: #68B2A0;">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
</x-guest-layout>
    