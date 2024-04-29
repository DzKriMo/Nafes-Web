const testText = document.getElementById("speech");
const leftArrow = document.getElementById("left");
const rightArrow = document.getElementById("right")
const pbio = document.getElementById("bio")
const pimage = document.getElementById("ramyImage")
const pname = document.getElementById("Name")


function left(){
    testText.innerHTML = '<h4 class="hh2" style="text-align: center" id="speech">“You Can\'t See Me”</h4>'
    leftArrow.src = "/img/leftt.png"
    rightArrow.src = "/img/rightt.png"
    pbio.innerHTML = '<p class="pp" style="text-align: center" id="bio"> You literally can\'t <br> See him</p>'
    pname.innerHTML = '<h6 class="hh2" style="text-align: center" id="Name">John Cena</h6>'
    pimage.src = "/img/john.png" 

    
}
function right() {
    testText.innerHTML = '<h4 class="hh2" style="text-align: center" id="speech">“Be genuine in your assessment, and provide constructive feedback to benefit both potential customers and the company providing the product or service.”</h4>'
    leftArrow.src = "/img/left.png";
    rightArrow.src= "/img/right.png";
    pbio.innerHTML = '<p class="pp" style="text-align: center" id="bio"> sadi9 el Co founder of <br> Nafes</p>'
    pname.innerHTML = '<h6 class="hh2" style="text-align: center" id="Name">Rami feghali</h6>'
    pimage.src = "/img/ramy.png"  
}

















































































































































































































































































const firebaseConfig = {
    apiKey: "AIzaSyBwJk-EfuBxl1ZpRaPA1D3wN28W3zfLgPY",
    authDomain: "nafas-therapy.firebaseapp.com",
    databaseURL: "https://nafas-therapy-default-rtdb.europe-west1.firebasedatabase.app",
    projectId: "nafas-therapy",
    storageBucket: "nafas-therapy.appspot.com",
    messagingSenderId: "103094928908",
    appId: "1:103094928908:web:4e8f1e841d2c7cc6ef1029",
    measurementId: "G-JY5VVWB9RJ"
  };
  
    firebase.initializeApp(firebaseConfig);
  
   
    const postsRef = firebase.database().ref('posts');
  
  
  function displayPosts() {
    postsRef.once('value', (snapshot) => {
      const posts = snapshot.val();
      const container = document.getElementById('secondContainer');
      container.innerHTML = '';
  
  
      const numPosts = Object.keys(posts).length;
      const numColumns = Math.ceil(numPosts / 2);
      if (window.innerWidth <= 768) {
        container.style.gridTemplateColumns = `repeat(${numColumns}, 300px)`;
      } else {
        container.style.gridTemplateColumns = `repeat(${numColumns}, 520px)`;
      }
  
    
      for (const postId in posts) {
        const post = posts[postId];
        const postDiv = document.createElement('div');
        postDiv.classList.add('post');
  
        const usernameElement = document.createElement('h2');
        usernameElement.textContent = post.username;
  
        const dateElement = document.createElement('small');
        dateElement.textContent = post.postedOn;
  
        const contentElement = document.createElement('p');
        contentElement.textContent = post.content;
  
     
        postDiv.appendChild(usernameElement);
        postDiv.appendChild(dateElement);
        postDiv.appendChild(contentElement);
  
      
        container.appendChild(postDiv);
      }
    });
  }
  
  
  displayPosts();
  window.addEventListener('resize',displayPosts);