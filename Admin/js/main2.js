
//scroll bar//
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

//hover nav//
$(document).ready(function(){

      $("#btn1").click(function(){
      $("#nav_drop").toggle();
     $("btn_close").hide("#nav_drop");
      });

    });

//owl carausel//
        $(".company_carousel_main").owlCarousel({
            margin: 10,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,//2000 ms=2 sec
            autoplayHoverPause: true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },

                421:{
                    items:1,
                    nav:false
                },

                774:{
                    items:2,
                    nav:false
                },
                996:{
                    items:3,
                    nav:false
                }


            }
        });

//acrodian//
      var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

//video//
  function show_video(){
    document.getElementById("video-poup").style.display="block";
  }
  function hide_video(){
   document.getElementById("video-poup").style.display="none"; 
  }

//top scrollbar//
         const toTop=document.querySelector(".to_top");
window.addEventListener("scroll",() =>{
     if(window.pageYOffset > 100){
         toTop.classList.add("active");
    }
   else{
        toTop.classList.remove("active");}
 })

//popup video//
 function show_video(){
    document.getElementById("video-poup").style.display="block";
  }
  function hide_video(){
   document.getElementById("video-poup").style.display="none"; 
  }

  /*zoom*/
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /* Create lens: */
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /* Insert lens: */
  img.parentElement.insertBefore(lens, img);
  /* Calculate the ratio between result DIV and lens: */
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /* Set background properties for the result DIV */
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /* Execute a function when someone moves the cursor over the image, or the lens: */
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /* And also for touch screens: */
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /* Prevent any other actions that may occur when moving over the image */
    e.preventDefault();
    /* Get the cursor's x and y positions: */
    pos = getCursorPos(e);
    /* Calculate the position of the lens: */
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /* Prevent the lens from being positioned outside the image: */
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /* Set the position of the lens: */
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /* Display what the lens "sees": */
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /* Get the x and y positions of the image: */
    a = img.getBoundingClientRect();
    /* Calculate the cursor's x and y coordinates, relative to the image: */
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /* Consider any page scrolling: */
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}

imageZoom("myimage", "myresult");

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

//feedback//

       var owl = $('.feedback_owl_carousel');
       $(".feedback_owl_carousel").owlCarousel({
           loop: true,
           margin: 50,
           autoplay: true,
           nav: true,
           autoplayTimeout: 2000,//2000 ms=2 sec
           autoplayHoverPause: true,
           responsive:{
               0:{
                   items:1,
                   nav:false
               },
               767:{
                   items:2,
                   nav:false,
                   margin: 20
               },
               1000:{
                   items:3,
                   nav:false
               } 
       }
       });
       