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
                <p id="status">Active Now</p>
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

<div id="btn-container"> 
    
    <div id="modeSwitch">
        <button id="vidBtn" onclick="videoChat()">Video Chat</button>
    </div>
</div>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-messaging.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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