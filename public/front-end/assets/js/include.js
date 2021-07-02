$(document).ready(function(){

    $("#footer").load( "include/footer.html", function() {
      //alert("Load was performed." );
    });
    $("#topbar").load( "include/topbar.html", function() {
      //alert("Load was performed." );
    });

    /*$( "#mavMobile" ).load( "include/meanMobile.html", function() {
      //alert("Load was performed." );
    });*/

    
    
    /*$( "#aside" ).load( "include/aside.html", function() {
      alert("Load was performed." );
    });*/

    /*$( "#meanDashboard" ).load( "include/meanDashboard.html", function() {
      /*alert("Load was performed." );
    });

    $("#styleLink").load( "include/styleLink.html", function() {
      //alert("Load was performed." );
    });*/

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
    }

    $('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 4
          }
      }, {
          breakpoint: 520,
          settings: {
              slidesToShow: 3
          }
      }]
    });
    
});