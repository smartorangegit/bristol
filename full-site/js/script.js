$(document).ready(function() {
  var controller = new ScrollMagic.Controller();
  new WOW().init();

  $(".underprice").click(function(){
    $(".mesage").css("display","block");
    $(".mesage").css("left","0");
  });

  $('.modal_close, .main_overlay').click(function(){
  $('main_modal').hide(),
  $('.main_overlay').fadeOut();
  });

  // (function(){
//   if($(window).width() < 767)
//       {
//         var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".header", {marginTop:"-30px"}).addTo(controller);
//         var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 800}).setTween(".header_wrapper", {height: "50px", overflow:"hidden", background:"rgba(230,230,230,0.9)"}).addTo(controller);
//   };
// })

var scene = new ScrollMagic.Scene({triggerElement: ".trigger-1", duration: 600}).setTween(".one_search", {transform: "scale(1)"}).addTo(controller);
var scene = new ScrollMagic.Scene({triggerElement: ".section_eight", duration: 600}).setTween(".section_eight .one_callback", {transform: "scale(1)"}).addTo(controller);
var scene = new ScrollMagic.Scene({triggerElement: ".lamps", duration: 300}).setTween(".lamps img", {opacity: "1"}).addTo(controller);
// var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 800}).setTween(".header_wrapper", {height: "50px", overflow:"hidden", background:"rgba(230,230,230,0.9)"}).addTo(controller);
// var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".header", {marginTop:"-30px"}).addTo(controller);
// var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 800}).setTween(".round-block", {height:"90px", width:"222px", marginLeft:"-100px"}).addTo(controller);
// var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".nav .nav_wrapper", {marginTop:"16px"}).addTo(controller);
// var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".round-block a svg", {marginTop:"-16px"}).addTo(controller);


// var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 800}).setClass(".round-block", "resized").addTo(controller);


$(window).scroll(function() {
  if($(this).scrollTop() != 0) {
  $('.header_wrapper').addClass("resized");
     } else {
  $('.header_wrapper').removeClass("resized");
     }
     });










$(function () {
        var scene = new ScrollMagic.Scene({triggerElement: "trigger-0", duration: 800, offset: 150})
                        .setPin(".one_text")
                        .setTween(".one_text", {opacity: "0"})
                        .addTo(controller);

    });

//  мобильное меню

$('.menu_link').click(function(e){
  e.preventDefault();
  $('.mini-menu').addClass('stick_mini_menu');
})
$('#close').click(function(e){
  e.preventDefault();
  // $('.mini-menu').delay(200).fadeOut('slow');
  $('.mini-menu').removeClass('stick_mini_menu');
})
       $(function() {
        $(window).scroll(function() {
          if($(this).scrollTop() != 0) {
          $('#toTop, #callMy').fadeIn();
             } else {
          $('#toTop, #callMy').fadeOut();
             }
          if($(this).scrollTop()>=155) {
            $('.menu_link').addClass('stick_menu_link');
          } else {
            $('.menu_link').removeClass('stick_menu_link');
          }
        });

      $('#toTop').click(function() {
      $('body,html').animate({scrollTop:0},800);
      });
        });



  // каллбек меню
  $('#phone').click(function () {
  $('#one_callback').animate({opacity: 1, top: '170px'}, 500);
  $('#one_callback').css('display', 'block');
  $('#overlay').animate({opacity: 1}, 200);
  $('#overlay').css('display', 'block');
  $('.header_wrapper').css('z-index','99');
  })
  $('#overlay, .close_popup').click(function () {
  $('#one_callback').animate({opacity: 0, top: '-100px'}, 200);
  $('#one_callback').css('display', 'none');
  $('#overlay').animate({opacity: 0}, 200);
  $('#overlay').css('display', 'none');
  $('.header_wrapper').css('z-index','999999');

  })
  $(this).keydown(function(eventObject){
    if (eventObject.which == 27){
      $('#one_callback').animate({opacity: 0, top: '-100px'}, 200);
      $('#one_callback').css('display', 'none');
      $('#overlay').animate({opacity: 0}, 200);
      $('#overlay').css('display', 'none');
    }
  });

  $(function() {
    $(window).scroll(function() {
      if($(this).scrollTop() != 0) {
      $('#toTop, #callMy').fadeIn();
         } else {
      $('#toTop, #callMy').fadeOut();
         }
         });

    $('#toTop').click(function() {
    $('body,html').animate({scrollTop:0},800);
      });
  });


  var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 800}).setTween(".header_wrapper", {height: "80px", overflow:"hidden", backgroundColor:"rgba(230,230,230,0.9)"}).addTo(controller);
  var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".header", {marginTop:"0px"}).addTo(controller);


  function mob_phone_replace(){
  	var winWidth = $(window).width();

  	if( winWidth < 768 ){
  		var a = $('#phone_ring').html();

  		a = a.replace(/\D/g, '');
  		a = "tel:" + a;
  		$('#phone_mob').attr('href', a);
  		$('#phone_mob1').attr('href', a);
  	}
  }
     mob_phone_replace();
     $(window).on('resize', mob_phone_replace);

    //============ / Telephone masked input ===

    //Документация по выборе с флагами https://github.com/jackocnr/intl-tel-input
    //Документация по маске (да, это 2 разных плагина...) http://digitalbush.com/projects/masked-input-plugin/
    jQuery(function($){
      $.mask.definitions['#']='[0-9]';
      $.mask.definitions['9'] = '';    
      $("form input[type='tel']").mask("+(38) ### ###-##-##",{placeholder:"_"});
    });

    var telInput = $("form input[type='tel']");

    telInput.intlTelInput({
      initialCountry: 'ua',
      preferredCountries: ['ua' ,'ru'],
      nationalMode: false
    });

    $(telInput).on("countrychange", function(e, countryData) {
      $(this).intlTelInput("setNumber", "");    
      $(this).trigger('blur');
      $(this).mask( '+(' + countryData.dialCode + ')' + ' ### ###-##-##',{placeholder:"_"});
    });
    //============ / END Telephone masked input ===

    $('#owl-main-page').owlCarousel({
      loop:true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplaySpeed: 2000,     
      margin:10,
      nav:false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
    });

    $('.owl-build-page').owlCarousel({
        responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:4
          }
        }
    });

    // $('#owl-main-page').owlCarousel({
    //   items : 4,
    //   userSelect: true,
    //   touchDrag: true,
    //   itemsDesktop : [1199,3],
    //   itemsDesktopSmall : [979,2]
    // });
    
}); //end document ready


// realtor__popup
  $(".realtor__button").on("click", function() {
    $(".realtor-popup").fadeIn();
  });
// end__realtor__popup 

//anti spam
var ct = 0;
var ct2 = 0;
var ct3 = 0;
var ct4 = 0;

if(document.getElementById("one")) {
        var addCount = document.createElement('input');
        addCount.type = "hidden";
        addCount.id = "count";
        addCount.name = "count";
        addCount.value = "0";
        document.getElementById('one').appendChild(addCount);


}
if(document.getElementById("main")) {
    var addCount2 = document.createElement('input');
    addCount2.type = "hidden";
    addCount2.id = "count2";
    addCount2.name = "count2";
    addCount2.value = "0";
    document.getElementById('main').appendChild(addCount2);


}
if(document.getElementById("main2")) {
    var addCount3 = document.createElement('input');
    addCount3.type = "hidden";
    addCount3.id = "count3";
    addCount3.name = "count3";
    addCount3.value = "0";
    document.getElementById('main2').appendChild(addCount3);


}
/*
if(document.getElementById("main4")) {
    var addCount4 = document.createElement('input');
    addCount4.type = "hidden";
    addCount4.id = "count4";
    addCount4.name = "count4";
    addCount4.value = "0";
    document.getElementById('main4').appendChild(addCount4);


}
*/
function countme() {
    document.getElementById('count').value = ++ct;
}
function countme2() {
    document.getElementById('count2').value = ++ct2;
}
function countme3() {
    document.getElementById('count3').value = ++ct3;
}

function countme4() {
    document.getElementById('count4').value = ++ct4;
}

var addCount = document.createElement('input');
addCount.type = "hidden";
addCount.id = "count5";
addCount.name = "count";
addCount.value = "0";
function countmeForm(form) { var form;
    document.getElementById(form).appendChild(addCount);
    document.getElementById('count5').value = ++ct;
}


