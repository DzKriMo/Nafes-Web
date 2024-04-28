let CurrentUserId;
let otherUser; 

function updateDateTime() {
    let currentDate = new Date();
    let day = currentDate.getDate();
    let month = currentDate.getMonth() + 1;
    let year = currentDate.getFullYear();
    let hours = currentDate.getHours();
    let minutes = currentDate.getMinutes();

    day = day < 10 ? '0' + day : day;
    month = month < 10 ? '0' + month : month;
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;

    let formattedDateTime = `${day}/${month}/${year} ${hours}:${minutes}`;
    return formattedDateTime;
}
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

    /*const chatRef = database.ref('Chats').child(CurrentUserId).child(otherUser);
    chatRef.once('value', (snapshot) => {
        snapshot.forEach((messageSnapshot) => {
            const message = messageSnapshot.val();
            displayMessage(message);
        });
    });*/

    displayedMessages.clear();
    listenForMessages();
}

function sendMessage(userId, message, file = null, audioBlob = null) {
    const chatRefSender = database.ref('Chats').child(CurrentUserId).child(userId);
    const chatRefReceiver = database.ref('Chats').child(userId).child(CurrentUserId);

    const messageData = {
        senderId: CurrentUserId,
        receiverId: userId,
        message: message,
        timestamp: updateDateTime(),
    };

    if (file) {
        const storageRef = firebase.storage().ref(`files/${Date.now()}_${file.name}`);
        storageRef.put(file)
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                messageData.message = file.name;
                messageData.messageLink = url;
                chatRefSender.push(messageData)
                    .then(() => console.log('File sent successfully'))
                    .catch(error => console.error('Error sending file:', error));

                chatRefReceiver.push(messageData);
            })
            .catch(error => console.error('Error uploading file:', error));
    } else if (audioBlob) {
        const storageRef = firebase.storage().ref(`audio/${Date.now()}_audio`);
        storageRef.put(audioBlob)
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                messageData.message = message;
                messageData.audioUrl = url;
                chatRefSender.push(messageData)
                    .then(() => console.log('Audio sent successfully'))
                    .catch(error => console.error('Error sending audio:', error));

                chatRefReceiver.push(messageData);
            })
            .catch(error => console.error('Error uploading audio:', error));
    } else {
        chatRefSender.push(messageData)
            .then(() => console.log('Message sent successfully'))
            .catch(error => console.error('Error sending message:', error));

        chatRefReceiver.push(messageData);
    }
}

const displayedMessages = new Set();

function listenForMessages() {
    const chatRef = database.ref('Chats').child(CurrentUserId).child(otherUser);

    chatRef.on('child_added', (snapshot) => {
        const message = snapshot.val();
        if (!displayedMessages.has(snapshot.key)) {
            displayedMessages.add(snapshot.key); 
            displayMessage(message);
        }
    });
}

function displayMessage(message) {
    const chatMessages = document.getElementById('chatMessages');
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
        applyLinkStyles(linkElement);

        messageElement.appendChild(linkElement);
    } else if (message.audioUrl) {
        const audioElement = document.createElement('audio');
        audioElement.src = message.audioUrl;
        audioElement.controls = true;

        messageElement.textContent = message.message;
        messageElement.appendChild(audioElement);
    } else {
        messageElement.textContent = message.message;
    }

    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}


function applyLinkStyles(linkElement) {
    linkElement.style.fontWeight = 'bold';
    linkElement.style.textDecoration = 'underline';
    linkElement.style.color = 'blue';

    linkElement.addEventListener('mouseenter', () => {
        linkElement.style.color = 'darkblue';
    });
    linkElement.addEventListener('mouseleave', () => {
        linkElement.style.color = 'blue';
    });
}


document.addEventListener('DOMContentLoaded', () => {
    fetchUsers();

    const fileUploadInput = document.getElementById('file-upload');
    const audioRecordBtn = document.getElementById('recordButton');
    const audioPlayer = document.getElementById('audio-player');
    const uploadTrigger = document.getElementById('uploadTrigger');


    uploadTrigger.addEventListener('click', function() {
        fileUploadInput.click(); 
      });
    fileUploadInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            sendMessage(otherUser, file.name, file);
        }
    });





    const recordButton = document.getElementById('recordButton');
    let mediaRecorder;
    let audioChunks = [];
    
    recordButton.addEventListener('mousedown', async () => {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            mediaRecorder = new MediaRecorder(stream);
    
            mediaRecorder.addEventListener('dataavailable', (event) => {
                if (event.data.size > 0) {
                    audioChunks.push(event.data);
                }
            });
    
            mediaRecorder.addEventListener('stop', async () => {
                const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
    
                
                await sendMessage(otherUser, updateDateTime(), null, audioBlob);
    
               
                audioPlayer.src = URL.createObjectURL(audioBlob);
            });
    
            mediaRecorder.start();
        } catch (error) {
            console.error('Error recording audio:', error);
        }
    });
    
    recordButton.addEventListener('mouseup', () => {
        if (mediaRecorder && mediaRecorder.state === 'recording') {
            mediaRecorder.stop();
            audioChunks = []; // Clear audioChunks for the next recording
        }
    });
    




    /*audioRecordBtn.addEventListener('click', async () => {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            const mediaRecorder = new MediaRecorder(stream);
            const audioChunks = [];

            mediaRecorder.addEventListener('dataavailable', event => {
                if (event.data.size > 0) {
                    audioChunks.push(event.data);
                }
            });

            mediaRecorder.addEventListener('stop', async () => {
                const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });




                sendMessage(otherUser, formattedDateTime, null, audioBlob);

                audioPlayer.src = URL.createObjectURL(audioBlob);
            });

            mediaRecorder.start();
            setTimeout(() => {
                mediaRecorder.stop();
                stream.getTracks().forEach(track => track.stop());
            }, 5000); // Record for 5 seconds
        } catch (error) {
            console.error('Error recording audio:', error);
        }
    });*/

    document.getElementById('sendMessageBtn').addEventListener('click', () => {
        const messageInput = document.getElementById('messageInput');
        const message = messageInput.value.trim();

        if (message !== '') {
            sendMessage(otherUser, message);
            messageInput.value = '';
        }
    });
});
