function videoChat() {
  window.open("https://nafas-therapy.web.app/", "_blank");
}


let CurrentUserId;
let otherUser;

function updateDateTime() {
  let currentDate = new Date();
  let day = currentDate.getDate();
  let month = currentDate.getMonth() + 1;
  let year = currentDate.getFullYear();
  let hours = currentDate.getHours();
  let minutes = currentDate.getMinutes();

  day = day < 10 ? "0" + day : day;
  month = month < 10 ? "0" + month : month;
  hours = hours < 10 ? "0" + hours : hours;
  minutes = minutes < 10 ? "0" + minutes : minutes;

  let formattedDateTime = `${day}/${month}/${year} ${hours}:${minutes}`;
  return formattedDateTime;
}

const csrfToken = document
  .querySelector('meta[name="csrf-token"]')
  .getAttribute("content");
axios.defaults.headers.common["X-CSRF-TOKEN"] = csrfToken;

axios
  .get("/api/user-id")
  .then((response) => {
    CurrentUserId = response.data.toString();
    console.log(CurrentUserId);
    fetchUsers();
  })
  .catch((error) => {
    if (error.response.status === 401) {
      window.location.href = "/loginpage";
    } else {
      console.error("Error retrieving user ID:", error);
    }
  });

async function loadFirebaseConfig() {
  try {
    const response = await fetch('/firebase-config');
    const config = await response.json();
    console.log(config);

    const firebaseConfig = {
      apiKey: config.apiKey,
      authDomain: config.authDomain,
      databaseURL: config.databaseURL,
      projectId: config.projectId,
      storageBucket: config.storageBucket,
      messagingSenderId: config.messagingSenderId,
      appId: config.appId,
      measurementId: config.measurementId,
    };

    firebase.initializeApp(firebaseConfig);

    // Call fetchUsers after Firebase is initialized
    fetchUsers();

  } catch (error) {
    console.error('Error loading Firebase config:', error);
  }
}

document.addEventListener("DOMContentLoaded", loadFirebaseConfig);

const database = () => firebase.database();

// Array to keep track of unique users
let uniqueUsers = [];

function fetchUsers() {
  const userList = document.getElementById("userList");
  userList.innerHTML = "";
  uniqueUsers = [];

  const usersRef = database().ref("Users");
  usersRef.once("value", (snapshot) => {
    snapshot.forEach((userSnapshot) => {
      const userId = userSnapshot.key;
      const user = userSnapshot.val();
      if (
        userId !== CurrentUserId &&
        !uniqueUsers.includes(userId) &&
        user.therapistID == CurrentUserId
      ) {
        const div = document.createElement("div");
        div.classList.add("user-item");
        div.id = userId;
        const img = document.createElement("img");
        if (user.image) {
          img.src = user.image;
        } else
          img.src =
            "https://firebasestorage.googleapis.com/v0/b/nafas-therapy.appspot.com/o/files%2F1716505154680_oO1FKQ7yR_aOCl1KCtCQFg.jpg?alt=media&token=ddff41a6-80ca-4faa-8e06-861a7deadfdf";
        img.classList.add("rounded-img");
        div.appendChild(img);

        const infoDiv = document.createElement("div");
        infoDiv.classList.add("user-info");
        const username = document.createElement("p");
        username.classList.add("user-name");
        username.textContent = user.username;
        infoDiv.appendChild(username);

        const email = document.createElement("p");
        email.classList.add("user-email");
        email.textContent = user.email;
        infoDiv.appendChild(email);

        div.appendChild(infoDiv);

        div.addEventListener("click", () => startChat(userId, user));
        userList.appendChild(div);
        uniqueUsers.push(userId);
      }
    });
  });
}

const pfp = document.getElementById("pfp");
let selectedUserElement = null;

function startChat(userId, selectedUser) {
  if (selectedUserElement) {
    selectedUserElement.style.backgroundColor = "#ffffff";
  }
  otherUser = userId;
  console.log("Other User ID:", otherUser);
  const userName = selectedUser.username;
  if (selectedUser.image) pfp.src = selectedUser.image;
  else
    pfp.src =
      "https://firebasestorage.googleapis.com/v0/b/nafas-therapy.appspot.com/o/files%2F1716505154680_oO1FKQ7yR_aOCl1KCtCQFg.jpg?alt=media&token=ddff41a6-80ca-4faa-8e06-861a7deadfdf";
  document.getElementById("contactName").textContent = `${userName}`;

  const userDiv = document.getElementById(userId);
  if (userDiv) {
    userDiv.style.backgroundColor = "#68B2A025";
    selectedUserElement = userDiv;
  }

  const chatMessages = document.getElementById("chatMessages");
  chatMessages.innerHTML = "";

  displayedMessages.clear();
  listenForMessages();
}

function sendMessage(userId, message, file = null, audioBlob = null) {
  const chatRefSender = database()
    .ref("Chats")
    .child(CurrentUserId)
    .child(userId);
  const chatRefReceiver = database()
    .ref("Chats")
    .child(userId)
    .child(CurrentUserId);

  const messageData = {
    senderId: CurrentUserId,
    receiverId: userId,
    message: message,
    timestamp: updateDateTime(),
  };

  if (file) {
    const storageRef = firebase
      .storage()
      .ref(`files/${Date.now()}_${file.name}`);
    storageRef
      .put(file)
      .then((snapshot) => snapshot.ref.getDownloadURL())
      .then((url) => {
        messageData.message = file.name;
        messageData.messageLink = url;
        chatRefSender
          .push(messageData)
          .then(() => console.log("File sent successfully"))
          .catch((error) => console.error("Error sending file:", error));

        chatRefReceiver.push(messageData);
      })
      .catch((error) => console.error("Error uploading file:", error));
  } else if (audioBlob) {
    const storageRef = firebase.storage().ref(`audio/${Date.now()}_audio`);
    storageRef
      .put(audioBlob)
      .then((snapshot) => snapshot.ref.getDownloadURL())
      .then((url) => {
        messageData.message = message;
        messageData.audioUrl = url;
        chatRefSender
          .push(messageData)
          .then(() => console.log("Audio sent successfully"))
          .catch((error) => console.error("Error sending audio:", error));

        chatRefReceiver.push(messageData);
      })
      .catch((error) => console.error("Error uploading audio:", error));
  } else {
    chatRefSender
      .push(messageData)
      .then(() => console.log("Message sent successfully"))
      .catch((error) => console.error("Error sending message:", error));

    chatRefReceiver.push(messageData);
  }
}

const displayedMessages = new Set();

function listenForMessages() {
  const chatRef = database().ref("Chats").child(CurrentUserId).child(otherUser);

  chatRef.on("child_added", (snapshot) => {
    const message = snapshot.val();
    if (!displayedMessages.has(snapshot.key)) {
      displayedMessages.add(snapshot.key);
      displayMessage(message);
    }
  });
}

function displayMessage(message) {
  const chatMessages = document.getElementById("chatMessages");
  const messageElement = document.createElement("div");
  messageElement.classList.add("message");

  if (message.senderId === CurrentUserId) {
    messageElement.classList.add("sent-message");
  } else {
    messageElement.classList.add("received-message");
  }

  if (message.messageLink) {
    const linkElement = document.createElement("a");
    linkElement.href = message.messageLink;
    linkElement.textContent = message.message;
    applyLinkStyles(linkElement);
    console.log(message.messageLink);
    const imageExtensions = [
      "image",
      "png",
      "jpg",
      "jpeg",
      "gif",
      "bmp",
      "img",
    ];
    const videoExtensions = ["mp4", "webm", "ogg", "avi"];
    let isImage = false;
    let isVideo = false;

    // Checking if the message link contains an image extension
    imageExtensions.forEach((extension) => {
      if (message.messageLink.toLowerCase().includes(`.${extension}`)) {
        isImage = true;
      }
    });

    // Checking if the message link contains a video extension
    videoExtensions.forEach((extension) => {
      if (message.messageLink.toLowerCase().includes(`.${extension}`)) {
        isVideo = true;
      }
    });

    if (isImage) {
      const imageElement = document.createElement("img");
      imageElement.src = message.messageLink;

      const imageLink = document.createElement("a");
      imageLink.href = message.messageLink;
      imageLink.target = "_blank"; // Opens in a new tab
      imageLink.appendChild(imageElement);

      messageElement.appendChild(imageLink);
    } else if (isVideo) {
      const videoLinkElement = document.createElement("a");
      videoLinkElement.href = message.messageLink;
      videoLinkElement.appendChild(linkElement);

      const videoElement = document.createElement("video");
      videoElement.src = message.messageLink;
      videoElement.controls = true;

      messageElement.appendChild(videoElement);
    } else {
      messageElement.appendChild(linkElement);
    }
  } else if (message.audioUrl) {
    const audioElement = document.createElement("audio");
    audioElement.classList.add("audiomessage");
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
  linkElement.style.fontWeight = "bold";
  linkElement.style.textDecoration = "underline";
  linkElement.style.color = "blue";

  linkElement.addEventListener("mouseenter", () => {
    linkElement.style.color = "darkblue";
  });
  linkElement.addEventListener("mouseleave", () => {
    linkElement.style.color = "blue";
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const fileUploadInput = document.getElementById("file-upload");
  const audioRecordBtn = document.getElementById("recordButton");
  const audioPlayer = document.getElementById("audio-player");
  const uploadTrigger = document.getElementById("uploadTrigger");

  uploadTrigger.addEventListener("click", function () {
    fileUploadInput.click();
  });
  fileUploadInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
      sendMessage(otherUser, file.name, file);
    }
  });

  const recordButton = document.getElementById("recordButton");
  let mediaRecorder;
  let audioChunks = [];

  recordButton.addEventListener("mousedown", async () => {
    try {
      const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
      mediaRecorder = new MediaRecorder(stream);

      mediaRecorder.addEventListener("dataavailable", (event) => {
        if (event.data.size > 0) {
          audioChunks.push(event.data);
        }
      });

      mediaRecorder.addEventListener("stop", async () => {
        const audioBlob = new Blob(audioChunks, { type: "audio/wav" });

        await sendMessage(otherUser, updateDateTime(), null, audioBlob);

        audioPlayer.src = URL.createObjectURL(audioBlob);
      });

      mediaRecorder.start();
    } catch (error) {
      console.error("Error recording audio:", error);
    }
  });

  recordButton.addEventListener("mouseup", () => {
    if (mediaRecorder && mediaRecorder.state === "recording") {
      mediaRecorder.stop();
      audioChunks = []; // Reset audioChunks for the next recording
    }
  });

  const searchInput = document.getElementById("searchInput");
  searchInput.addEventListener("input", () => {
    const searchQuery = searchInput.value.toLowerCase();

    const userList = document.getElementById("userList");
    const userItems = userList.querySelectorAll(".user-item");

    userItems.forEach((item) => {
      const username = item
        .querySelector(".user-name")
        .textContent.toLowerCase();
      const userEmail = item
        .querySelector(".user-email")
        .textContent.toLowerCase();

      if (username.includes(searchQuery) || userEmail.includes(searchQuery)) {
        item.style.display = "flex";
      } else {
        item.style.display = "none";
      }
    });
  });

  document.getElementById("sendMessageBtn").addEventListener("click", () => {
    const messageInput = document.getElementById("messageInput");
    const message = messageInput.value.trim();

    if (message !== "") {
      sendMessage(otherUser, message);
      messageInput.value = "";
    }
  });
});
