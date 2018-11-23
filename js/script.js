//แสดงรูป
// $(document).ready(function(){
//     $("#show").fadeIn(2000);
//     $(".showname").fadeIn(2000);
// });

//navber scrill
//********************************************************************************** */
// $(window).scroll(function(e){
//     //here the bar is id'ed myBar
//     if ($(this).scrollTop() > 30) { // choose the value you want.
//         $('.navbar:hidden').slideDown();
//     } else {
//         $('.navbar:visible').slideUp();
//     }
// });

$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('nav').addClass('shrink');
    } else {
      $('nav').removeClass('shrink');
    }
  });
//content scrill
//*********************************************************************************** */
// $(window).scroll(function(){
//     if ($(document).scrollTop() = 250) {
//         $('.card:visible').slideUp(2000);
//       }
// });
// window.onscroll = function(){
//   if($(window).scrollTop() >= 450){
//        $("#ct1").fadeIn(1000);
//        $("#ct2").fadeIn(1500);
//        $("#ct3").fadeIn(2000);
//        $("#ct4").fadeIn(2500);
//   }
//   else{
//       $("#ct1").hide(1000);
//       $("#ct2").hide(1000);
//       $("#ct3").hide(1000);
//       $("#ct4").hide(1000);
//   }
// }

$(document).ready(function(){

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });

})
