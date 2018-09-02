// window.onscroll = function() {scrollFunction()};
// function scrollFunction() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//         document.getElementsByClassName("bottom-arrow")[0].style.display = "block";
//     } else {
//         document.getElementsByClassName("bottom-arrow")[0].style.display = "none";
//     }
// }
// $(document).ready(function(){
//  if(document.body.scrollTop >20 || document.documentElement.scrollTop >20){
//    $(".bottom-footer .bottom-arrow").show();}
//    else
//    {$(".bottom-footer .bottom-arrow").hide()}; 
//  }
// );
  // $(window).scroll(funtion(){
  //  if(document.body.scrollTop >20 || document.documentElement.scrollTop > 20){
  //    $('.bottom-arrow').fadeIn();
  //  }
  //  else
  //  {
  //    $('.bottom-arrow').fadeOut();
  //  }
  // });
$(window).scroll(function(){
    var height = $(window).scrollTop();
    if (height > 100) {
        $('.bottom-arrow').fadeIn();
    } else {
        $('.bottom-arrow').fadeOut();
    }
});
$(document).ready(function(){
    $(".bottom-arrow").click(function(event){
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
});     
$('.dh-container').directionalHover(); 
 $('.dh-container').directionalHover({
  // CSS class for the overlay
  overlay: "dh-overlay",
  // Linear or swing
  easing: "swing",
  // <a href="https://www.jqueryscript.net/animation/">Animation</a> speed in ms
  speed: 400
});
$('.slides_images').slick({
  "slidesToShow": 3, 
  "slidesToScroll": 1,
  "arrows" : true,
  "prevArrow":'.rightangle',
  "nextArrow":'.leftangle',
  //appendArrows
   "responsive": [{
        "breakpoint": 500,
        "settings": {
            "slidesToShow": 1
        }
    }]
    }); 
$('.slides_images1').slick({
  "slidesToShow": 3, 
  "slidesToScroll": 1,
  "arrows" : true,
  "prevArrow":'.rightangle',
  "nextArrow":'.leftangle',
  //appendArrows
   "responsive": [{
        "breakpoint": 500,
        "settings": {
            "slidesToShow": 1
        }
    }]
    }); 
    $("#newsletter").on('submit', function(e){
      e.preventDefault();
       var str = 'action=display';
       var firstname=$( "#name" ).val();
       var email=$("#email").val();
       var melding=$("#melding").val();
       jQuery.ajax({
       type: "POST",
       dataType: "json",
       url: myAjax.ajaxurl,
       data:{action:'display',firstname:firstname,email:email,melding:melding},
       success: function(data){
        console.log(data.response);
        },
        error : function(data){
         alert("error");
        },
      });
    });
 });   
// $(document).ready(function(){
//  $('.dh-container').directionalHover(); 
//  $('.dh-container').directionalHover({
//   // CSS class for the overlay
//   overlay: "dh-overlay",
//   // Linear or swing
//   easing: "swing",
//   // <a href="https://www.jqueryscript.net/animation/">Animation</a> speed in ms
//   speed: 400
// });
// $('.brands').slick({
//   "slidesToShow": 3, 
//   "slidesToScroll": 1,
//   "prevArrow":'.rightangle',
//   "nextArrow":'.leftangle',
//    "responsive": [{
//         "breakpoint": 500,
//         "settings": {
//             "slidesToShow": 1
//         }
//     }]
//     });
// });