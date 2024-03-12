     
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


//top scrollbar//
         const toTop=document.querySelector(".to_top");
window.addEventListener("scroll",() =>{
     if(window.pageYOffset > 100){
         toTop.classList.add("active");
    }
   else{
        toTop.classList.remove("active");}
 })
