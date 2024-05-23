<link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Serif&display=swap">

<x-app-layout style="font-family:'Roboto Serif', serif;">
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight" style="color: #68B2A0; margin-left:-45px;font-family:'Roboto Serif', serif; ">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6" >
            <div class="p-4 sm:p-8  shadow sm:rounded-lg"  style="background-color: #F2F7FB">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8  shadow sm:rounded-lg" style="background-color: #F2F7FB">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8  shadow sm:rounded-lg"  style="background-color: #F2F7FB">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
