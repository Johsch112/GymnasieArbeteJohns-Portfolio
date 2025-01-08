let progressBar = document.querySelector(".progress-bar");
let documentHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

window.onscroll = function () {
   let progress = (scrollY / documentHeight) * 100;
   progressBar.style.width = progress + "%";
}


document.addEventListener("DOMContentLoaded", () => {

   let body = document.querySelector('body');
   let mouse = document.querySelector('#cursor');
   let height = window.innerHeight;
   let width = window.innerWidth;

   document.addEventListener("mousemove", (e) => {
      body.style.backgroundPositionY = e.clientY + "px";
      body.style.backgroundPositionX = e.clientX + "px";

      mouse.style.top = e.clientY - 40 + "px";
      mouse.style.left = e.clientX - 40 + "px";
   });
});

function SendToWork() {
   document.querySelector('#mywork').scrollIntoView({
      behavior: 'smooth'
   });
};

function SendToAbout() {
   document.querySelector('#perspectiveattempt').scrollIntoView({
      behavior: 'smooth'
   });
};


// --------------------------------------------- GSAP ---------------------------------------------

// use a script tag or an external JS file
document.addEventListener("DOMContentLoaded", () => {


   gsap.registerPlugin(ScrollTrigger, TextPlugin)
   gsap.to(".window", {
      scrollTrigger: {
         trigger: ".windowwrapper",
         // start: "top ",
         markers: true,
         scrub: true,
         toggleActions: "restart pause reverse pause"
      },
      // transformOrigin: "-500% 50% -100px",
      z: 500,
      duration: 3,
   });


   gsap.to(".post", {
      scrollTrigger: {
         trigger: ".post",
         start: "top ",
         markers: true,

         pin: true,
         toggleActions: "restart pause reverse pause"
      },
      z:100,
      duration: 3,
   });



   scrollTrigger.create


});


// gsap.to(".square", {
//    scrollTrigger: {
//       trigger: ".square",
//       // start: "top center",
//       markers: true,
//       scrub: true,
//       toggleActions: "restart pause reverse pause"
//    },
//    x: 700,
//    duration: 3,
// });