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

   // --------------------------------------------- GSAP ---------------------------------------------

   gsap.registerPlugin(ScrollTrigger, TextPlugin)

   const horizontalscroll = document.querySelector(".horizontalscroll")
   let horizontalscrollwidth = horizontalscroll.scrollWidth;
   let ScrollAmmount = horizontalscrollwidth - window.innerWidth;


   console.log(ScrollAmmount)

   gsap.to(".horizontalscroll", {
      scrollTrigger: {
         trigger: ".horizontalscrollwrapper",
         start: "top 20%",
         pin: true,
         end: "+=" + ScrollAmmount,
         scrub: 1,
      },
      x: -ScrollAmmount,
      ease: "none",
   });


   gsap.to(".outerring1", {
      scrollTrigger: {
         trigger: "footer",
         start: "top center",
         scrub: 1,
      },
      x: 400
   });

   gsap.to(".outerring2", {
      scrollTrigger: {
         trigger: "footer",
         start: "top center",
         scrub: 1,
      },
      x: -400
   });

   gsap.to("#textanim1",{
      duration: 2,
      yPercent: 0,
      stagger: 0.02,
      text: {
      value:"Creative",
      oldClass: "start",
      newClass: "end",
      },
      });
   
    let windowwrapper = document.getElementsByClassName('windowwrapper')[0];

      gsap.to(".window", {
         scrollTrigger: {
            trigger: ".windowwrapper",
            start: "top",
             end: '+=400px',
            scrub: true,
            pin:true,
            toggleActions: "restart pause reverse pause"
         },
         z: 300,
         duration: 5,
      });


});

function SendToWork() {
   document.querySelector('.windowwrapper').scrollIntoView({
      behavior: 'smooth'
   });
};

function SendToAbout() {
   document.querySelector('#perspectiveattempt').scrollIntoView({
      behavior: 'smooth'
   });
};