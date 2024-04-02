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

    // Clear chat messages before fetching old messages
    const chatMessages = document.getElementById('chatMessages');
    chatMessages.innerHTML = '';

    // Fetching and displaying old messages
    const chatRef = database.ref('Chats').child(CurrentUserId).child(otherUser);
    chatRef.once('value', (snapshot) => {
        snapshot.forEach((messageSnapshot) => {
            const message = messageSnapshot.val();
            displayMessage(message);
        });
    });

    // Listening for real-time messages
    listenForMessages();
}


// Send message to the current chat
function sendMessage(userId, message) {
    const chatRefSender = database.ref('Chats').child(CurrentUserId).child(userId);
    const chatRefReceiver = database.ref('Chats').child(userId).child(CurrentUserId);

    const messageData = {
        senderId: CurrentUserId,
        receiverId: userId,
        message: message,
    };

    chatRefSender.push(messageData)
        .then(() => console.log('Message sent successfully'))
        .catch(error => console.error('Error sending message:', error));

    chatRefReceiver.push(messageData);
}

// Listen for new messages and updating the chat interface
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

        messageElement.textContent = message.message;
        chatMessages.appendChild(messageElement);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
}


document.addEventListener('DOMContentLoaded', () => {
    fetchUsers();

    document.getElementById('sendMessageBtn').addEventListener('click', () => {
        const messageInput = document.getElementById('messageInput');
        const message = messageInput.value.trim();

        if (message !== '') {
            sendMessage(otherUser, message);
            messageInput.value = '';
        }
    });
});
