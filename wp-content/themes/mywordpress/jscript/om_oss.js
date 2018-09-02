$(window).scroll(function($) {
var height = $(window).scrollTop();
if (height > 100) {
$('.bottom-arrow').fadeIn();
}else{
$('.bottom-arrow').fadeOut();
}
});
$(document).ready(function($) {
$(".bottom-arrow").click(function(event){
event.preventDefault();
$("html, body").animate({ scrollTop: 0 }, "slow");
return false;
});
$("#test_ajax").on('click' , function(){
alert("in");
});   
});   