let progressBar = document.querySelector(".progress-bar");
let documentHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

window.onscroll = function(){
   let progress = (scrollY / documentHeight) * 100;
   progressBar.style.width = progress + "%";
}


document.addEventListener("DOMContentLoaded", () => {

let body = document.querySelector('body') ;
let mouse = document.querySelector('#cursor') ;
let height = window.innerHeight;
let width = window.innerWidth;

document.addEventListener("mousemove", (e) =>{
   body.style.backgroundPositionY = e.clientY + "px";
   body.style.backgroundPositionX = e.clientX + "px";

   mouse.style.top = e.clientY - 40 + "px";
   mouse.style.left = e.clientX - 40 + "px";
});
});

function SendToWork(){
   document.querySelector('#mywork').scrollIntoView({
   behavior:'smooth'
   });
   };

   