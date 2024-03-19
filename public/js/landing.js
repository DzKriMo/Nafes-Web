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