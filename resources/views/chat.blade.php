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
            <h2 class="font-semibold text-xl t leading-tight" style="color: #68B2A0; padding:20px">Patients List</h2>
            <ul id="userList"></ul>
        </div>
        <div class="chat-container">
            <div class="chat-header">

                <img src="https://firebasestorage.googleapis.com/v0/b/nafas-therapy.appspot.com/o/files%2F1714567794354_uwu-hitler-v0-51as8cwvl2k91.png?alt=media&token=3401f45a-217f-4524-8526-03640613557a" alt="suka" class="rounded-img">
                <h3 id="contactName">Chat with: X</h3>
                
               
                    <button id="vidBtn" onclick="videoChat()">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.25 35.5H10.5C8.014 35.5 6 33.486 6 31V17C6 14.514 8.014 12.5 10.5 12.5H26.25C28.736 12.5 30.75 14.514 30.75 17V31C30.75 33.486 28.736 35.5 26.25 35.5Z" stroke="#000E08" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M30.75 26.194L38.34 32.302C39.812 33.488 42 32.44 42 30.55V17.45C42 15.56 39.812 14.512 38.34 15.698L30.75 21.806" stroke="#000E08" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                            
                        </button>
                
            </div>
            <div class="chat-messages" id="chatMessages"></div>
            <div class="chat-input">
                <img src="/img/clip.svg" alt="Upload Files" id="uploadTrigger">
                <textarea id="messageInput" placeholder="Type your message..."></textarea>
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