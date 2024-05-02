<link rel="stylesheet" href="/css/chat.css">
@auth
<x-app-layout style="background-color: azure">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="color: #68B2A0">
            {{ __('Chat With Your Patients') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body >
<div id="Big-Container">
<div id="chatt-container">


   
        <div class="user-list">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="color: #68B2A0">Patients List</h2>
            <ul id="userList"></ul>
        </div>
        <div class="chat-container">
            <div class="chat-header">
                <h3 id="contactName">Chat with: X</h3>
                
               
                    <button id="vidBtn" onclick="videoChat()"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_b_0_1)">
                        <circle cx="24" cy="24" r="24" fill="#323F39"/>
                        </g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.125 29.75H17.25C16.007 29.75 15 28.743 15 27.5V20.5C15 19.257 16.007 18.25 17.25 18.25H25.125C26.368 18.25 27.375 19.257 27.375 20.5V27.5C27.375 28.743 26.368 29.75 25.125 29.75Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M27.375 25.097L31.17 28.151C31.906 28.744 33 28.22 33 27.275V20.725C33 19.78 31.906 19.256 31.17 19.849L27.375 22.903" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                        <filter id="filter0_b_0_1" x="-30" y="-30" width="108" height="108" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="15"/>
                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_0_1"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_0_1" result="shape"/>
                        </filter>
                        </defs>
                        </svg>
                        </button>
                
            </div>
            <div class="chat-messages" id="chatMessages"></div>
            <div class="chat-input">
                <textarea id="messageInput" placeholder="Type your message..."></textarea>
                <img src="/img/clip.svg" alt="Upload Files" id="uploadTrigger">
                <img src="/img/record.svg" alt="record audio" id="recordButton">
                <input type="file" id="file-upload" style="display: none">
                <button id="sendMessageBtn">Send</button>
            </div>
      
    </div>


</div>






</div> 


    
    

<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-messaging.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.min.js"></script>


<script src="/js/random.js"></script>

<script src="/js/chat.js"></script>
</body>
</html>
</x-app-layout>
@else  
@php

header('Location: ' . route('lp'));
exit;
@endphp
@endauth