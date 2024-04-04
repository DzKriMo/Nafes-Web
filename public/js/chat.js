let CurrentUserId;
let otherUser; 
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;

axios.get('/api/user-id')
    .then(response => {
        CurrentUserId = response.data.toString();
        fetchUsers();
    })
    .catch(error => {
        if (error.response.status === 401) {
            window.location.href = '/loginpage';
        } else {
            console.error('Error retrieving user ID:', error);
        }
    });


firebase.initializeApp(firebaseConfig);
const database = firebase.database();

// Array to keep track of unique users
let uniqueUsers = [];

function fetchUsers() {
    const userList = document.getElementById('userList');
    userList.innerHTML = ''; 
    uniqueUsers = []; 

    const usersRef = database.ref('Users');
    usersRef.once('value', (snapshot) => {
        snapshot.forEach((userSnapshot) => {
            const userId = userSnapshot.key;
            const user = userSnapshot.val();
            if (userId !== CurrentUserId && !uniqueUsers.includes(userId) && user.therapistID == CurrentUserId ) {
                const li = document.createElement('li');
                li.textContent = `${user.username} - ${user.email}`;
                li.addEventListener('click', () => startChat(userId, user));
                userList.appendChild(li);
                uniqueUsers.push(userId);
            }
        });
    });
}


function startChat(userId, selectedUser) {
    otherUser = userId;
    console.log("Other User ID:", otherUser);
    const userName = selectedUser.username;

    document.getElementById('contactName').textContent = `Chat with: ${userName}`;


    const chatMessages = document.getElementById('chatMessages');
    chatMessages.innerHTML = '';

    
    const chatRef = database.ref('Chats').child(CurrentUserId).child(otherUser);
    chatRef.once('value', (snapshot) => {
        snapshot.forEach((messageSnapshot) => {
            const message = messageSnapshot.val();
            displayMessage(message);
        });
    });

    
    listenForMessages();
}



function sendMessage(userId, message, file = null) {
    const chatRefSender = database.ref('Chats').child(CurrentUserId).child(userId);
    const chatRefReceiver = database.ref('Chats').child(userId).child(CurrentUserId);

    const messageData = {
        senderId: CurrentUserId,
        receiverId: userId,
        message: message,
    };

    if (file) {
        const storageRef = firebase.storage().ref(`files/${Date.now()}_${file.name}`);
        storageRef.put(file)
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                messageData.message= file.name;
                messageData.messageLink = url;
                chatRefSender.push(messageData)
                    .then(() => console.log('Message sent successfully'))
                    .catch(error => console.error('Error sending message:', error));

                chatRefReceiver.push(messageData);
            })
            .catch(error => console.error('Error uploading file:', error));
    } else {
        chatRefSender.push(messageData)
            .then(() => console.log('Message sent successfully'))
            .catch(error => console.error('Error sending message:', error));

        chatRefReceiver.push(messageData);
    }
}


function listenForMessages() {
    const chatRef = database.ref('Chats').child(CurrentUserId).child(otherUser);

    chatRef.on('child_added', (snapshot) => {
        const message = snapshot.val();
        displayMessage(message);
    });
}


function displayMessage(message) {
    const chatMessages = document.getElementById('chatMessages');
    const existingMessages = chatMessages.querySelectorAll('.message');

    // Checking if the message already exists in the chat
    const isDuplicate = Array.from(existingMessages).some((existingMessage) => {
        return existingMessage.textContent.trim() === message.message.trim();
    });

    if (!isDuplicate) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');

        if (message.senderId === CurrentUserId) {
            messageElement.classList.add('sent-message');
        } else {
            messageElement.classList.add('received-message');
        }

        if (message.messageLink) {
            const linkElement = document.createElement('a');
            linkElement.href = message.messageLink;
            linkElement.textContent = message.message;

            linkElement.style.fontWeight = 'bold';
            linkElement.style.textDecoration = 'underline';
            linkElement.style.color = 'blue';

            linkElement.addEventListener('mouseenter', () => {
                linkElement.style.color = 'darkblue';
            });
            linkElement.addEventListener('mouseleave', () => {
                linkElement.style.color = 'blue';
            });

            messageElement.appendChild(linkElement);
        } else if (message.audioUrl) {
            const audioElement = document.createElement('audio');
            audioElement.src = message.audioUrl;
            messageElement.textContent = message.message;
            audioElement.play = true ;
            audioElement.controls = true;

            messageElement.appendChild(audioElement);
        } else {
            messageElement.textContent = message.message;
        }

        chatMessages.appendChild(messageElement);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
}




document.addEventListener('DOMContentLoaded', () => {
    fetchUsers();

    // Trigger file upload when image is clicked
    const fileUploadInput = document.getElementById('file-upload');
    const uploadTrigger = document.getElementById('uploadTrigger');

    uploadTrigger.addEventListener('click', () => {
        fileUploadInput.click();
    });

    fileUploadInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            sendMessage(otherUser, file.name, file);
        }
    });

    document.getElementById('sendMessageBtn').addEventListener('click', () => {
        const messageInput = document.getElementById('messageInput');
        const message = messageInput.value.trim();

        if (message !== '') {
            sendMessage(otherUser, message);
            messageInput.value = '';
        }
    });
});
