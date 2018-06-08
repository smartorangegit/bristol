// JavaScript Document


		
	$(window).load(function() {
	
		"use strict";	
		
		
		/*----------------------------------------------------*/
		/*	Preloader
		/*----------------------------------------------------*/
	
		$(".loader").delay(100).fadeOut();
		$(".animationload").delay(100).fadeOut("fast");
		
		$(".genplanDownload").css({visibility:"visible"});
		
		/*----------------------------------------------------*/
		/*	Stellar
		/*----------------------------------------------------*/
		
		//$(window).stellar({});
		
		
		/*----------------------------------------------------*/
		/*	Parallax
		/*----------------------------------------------------*/
		
	//	parallaxInit();
		

	});
	
	
	
	$(window).scroll(function(){	

		"use strict";	
		
		
		/*----------------------------------------------------*/
		/*	Scroll Navbar
		/*----------------------------------------------------*/
	
		var b = $(window).scrollTop();
		
		if( b > 200 ){		
			$(".navbar.navbar-fixed-top").addClass("scroll-fixed-navbar");	
		} else {
			$(".navbar.navbar-fixed-top").removeClass("scroll-fixed-navbar");
			
		}
		
		//myne
		
			//alert();
			
			//var intro_text_top = $('#intro-text').offset().top;
			
			//var new_top = intro_text_top + 100;
			//alert(intro_text_top);
			//alert(new_top);
			
			//$("#intro-text").css({top:new_top});
			//var map_fact_height = $("#map-image").height();
			
			//alert($("#intro").height());
			
	
		
		//myne
		
		
		/*----------------------------------------------------*/
		/*	Parallax
		/*----------------------------------------------------*/

		/*function parallaxInit() {
			if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				$('#services').parallax("30%", 0.3);
				$('#statistic_banner').parallax("30%", 0.3);
				$('#team').parallax("30%", 0.3);
				$('#skills').parallax("30%", 0.3);	
				$('#developer').parallax("30%", 0.3);	
				//$('#developer').parallax("30%", 0.3);	
				$('#call-to-action').parallax("30%", 0.3);				
				$('#video').parallax("30%", 0.3);
				$('#newsletter').parallax("30%", 0.3);			
			}	
		}*/
		
			
		/*----------------------------------------------------*/
		/*	Circle Progress Bars
		/*----------------------------------------------------*/

		/*if ($().easyPieChart) {
			var count = 0 ;
			var colors = ['#1fb4da']; // Circle bar color
			$('.percentage').each(function(){

					
				var imagePos = $(this).offset().top;
				var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+600) {

					$(this).easyPieChart({
						barColor: colors[count],
						trackColor: 'rgba(20, 20, 20, .3)',
						scaleColor: false,
						scaleLength: false,
						lineCap: 'butt',
						lineWidth: 22,
						size: 150,
						rotate: 0,
						animate: 1750,
						onStep: function(from, to, percent) {
								$(this.el).find('.percent').text(Math.round(percent));
							}
					});
				}

				count++;
				if (count >= colors.length) { count = 0};
			});
		}
		*/
		
	});	
	
	$("a#i-kv5").click(function () 
	{
		
		//return false;
		
	});
	
	function show_tel()
	{
		if($(window).width() < 1200)
		{
			$('#menu_tel').css({display:"none"});
			
		}
		else
		{
			$('#menu_tel').css({display:"block"});
		}
	}
	
	function set_download_pos()
	{
		if($(window).width() > 1000)
		{
			var new_left_download = $(window).width() - 35 - 20;
			var new_top_download = $(window).height() - 35 - 70;
			$("#download-genplan").css({display:"block"});
			$("#download-genplan").css({left:new_left_download});
			$("#download-genplan").css({top:new_top_download});
		}
		else
		{
			$("#download-genplan").css({display:"none"});
		}
	}
	
	$(document).ready(function() {
		
		
		
		"use strict";	
		
		set_download_pos();
	
	
		$("#user_phone").mask("(999) 999-99-99");
		
		/*----------------------------------------------------*/
		/*	Mobile Menu Toggle
		/*----------------------------------------------------*/
		
		//MYNE
		$('#nav-right').onePageNav();
		//$(function(){$("[data-toggle = 'tooltip']").tooltip()});
		// new ScrollFlow(); 
		// $( "#h1-scroll" ).ScrollFlow();
		//dzsprx_init('#prx1, { direction: "normal", mode_scroll:"fromtop"}); 
		//$("#navigation-menu").neo_pager();

		/*$("a#i-kv5").fancybox({
		'hideOnContentClick': true
		});*/
		
		show_tel();
		
		$(window).resize(function() {
			show_tel();
			set_download_pos();
		});	
		
		
		
		$("#callback_top").click(function(e){
			
			$("#myModal").modal('show');
			e.preventDefault();
			//$(body).focus();
		
		});
		
		$("#download-genplan").click(function(e){
			
			//$("#myModal").modal('show');
			//e.preventDefault();
			
		
		});
		
		$('#myModal').on('hidden.bs.modal', function () {
			//alert("closed");
			
			//$(body).focus();
			//$("body").click();
		});
		
		
		
		$('#download_button_top').click(function (e) {
			//alert("closed");
			//e.preventDefault();
			//$(body).focus();
			//$("#download_button_top").click();
			
		});
		
		
		
		
		$("a.grouped_elements").fancybox();
		
		$('a#i-kv5').fancybox({
		  helpers: {
			overlay: {
			  locked: false
			}
		  }
		});
		
		$('a#i-kv6').fancybox({
		  helpers: {
			overlay: {
			  locked: false
			}
		  }
		});
		
		 //MYNE
		
		$('.navbar-nav li a').click(function() {				
			$('#navigation-menu').css("height", "1px").removeClass("in").addClass("collapse");
			$('#navigation-menu').removeClass("open");				
		});	
		
		
		/*----------------------------------------------------*/
		/*	Intro Slider
		/*----------------------------------------------------*/
	
		$("#slides").superslides({
			play: 6000,
			animation: "fade",
			pagination: true
		});
		
		
		/*----------------------------------------------------*/
		/*	OnScroll Animation
		/*----------------------------------------------------*/
		
		$('.animated').appear(function() {

	        var elem = $(this);
	        var animation = elem.data('animation');

	        if ( !elem.hasClass('visible') ) {
	        	var animationDelay = elem.data('animation-delay');
	            if ( animationDelay ) {
	                setTimeout(function(){
	                    elem.addClass( animation + " visible" );
	                }, animationDelay);

	            } else {
	                elem.addClass( animation + " visible" );
	            }
	        }
	    });
		
		
		/*----------------------------------------------------*/
		/*	Parallax
		/*----------------------------------------------------*/
	
		/*function parallaxInit() {
			if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				$('#intro').parallax("30%", 0.3);
				$('#services').parallax("30%", 0.3);
				$('#statistic_banner').parallax("30%", 0.3);
				$('#team').parallax("30%", 0.3);
				$('#skills').parallax("30%", 0.3);	
				$('#developer').parallax("30%", 0.3);	
				$('#call-to-action').parallax("30%", 0.3);				
				$('#video').parallax("30%", 0.3);
				$('#newsletter').parallax("30%", 0.3);			
			}	
		}*/
		
		
		/*----------------------------------------------------*/
		/*	ScrollUp
		/*----------------------------------------------------*/
		
		$.scrollUp = function (options) {

			// Defaults
			var defaults = {
				scrollName: 'scrollUp', // Element ID
				topDistance: 600, // Distance from top before showing element (px)
				topSpeed: 800, // Speed back to top (ms)
				animation: 'fade', // Fade, slide, none
				animationInSpeed: 200, // Animation in speed (ms)
				animationOutSpeed: 200, // Animation out speed (ms)
				scrollText: '', // Text for element
				scrollImg: false, // Set true to use image
				activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			};

			var o = $.extend({}, defaults, options),
				scrollId = '#' + o.scrollName;

			// Create element
			$('<a/>', {
				id: o.scrollName,
				href: '#top',
				title: o.scrollText
			}).appendTo('body');
			
			// If not using an image display text
			if (!o.scrollImg) {
				$(scrollId).text(o.scrollText);
			}

			// Minium CSS to make the magic happen
			$(scrollId).css({'display':'none','position': 'fixed','z-index': '2147483647'});

			// Active point overlay
			if (o.activeOverlay) {
				$("body").append("<div id='"+ o.scrollName +"-active'></div>");
				$(scrollId+"-active").css({ 'position': 'absolute', 'top': o.topDistance+'px', 'width': '100%', 'border-top': '1px dotted '+o.activeOverlay, 'z-index': '2147483647' });
			}

			// Scroll function
			$(window).scroll(function(){	
				switch (o.animation) {
					case "fade":
						$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).fadeIn(o.animationInSpeed) : $(scrollId).fadeOut(o.animationOutSpeed) );
						break;
					case "slide":
						$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).slideDown(o.animationInSpeed) : $(scrollId).slideUp(o.animationOutSpeed) );
						break;
					default:
						$( ($(window).scrollTop() > o.topDistance) ? $(scrollId).show(0) : $(scrollId).hide(0) );
				}
			});

			// To the top
			$(scrollId).click( function(event) {
				$('html, body').animate({scrollTop:0}, o.topSpeed);
				event.preventDefault();
			});

		};
		
		$.scrollUp();
		
		
		/*----------------------------------------------------*/
		/*	Animated Scroll To Anchor
		/*----------------------------------------------------*/
		
		$.fn.scrollTo = function( options ) {

			var settings = {
				offset : -60,       //an integer allowing you to offset the position by a certain number of pixels. Can be negative or positive
				speed : 'slow',   //speed at which the scroll animates
				override : null,  //if you want to override the default way this plugin works, pass in the ID of the element you want to scroll through here
				easing : null //easing equation for the animation. Supports easing plugin as well (http://gsgd.co.uk/sandbox/jquery/easing/)
			};

			if (options) {
				if(options.override){
					//if they choose to override, make sure the hash is there
					options.override = (override('#') != -1)? options.override:'#' + options.override;
				}
				$.extend( settings, options );
			}

			return this.each(function(i, el){
				$(el).click(function(e){
					var idToLookAt;
					if ($(el).attr('href').match(/#/) !== null) {
						e.preventDefault();
						idToLookAt = (settings.override)? settings.override:$(el).attr('href');//see if the user is forcing an ID they want to use
						//if the browser supports it, we push the hash into the pushState for better linking later
						if(history.pushState){
							history.pushState(null, null, idToLookAt);
							$('html,body').stop().animate({scrollTop: $(idToLookAt).offset().top + settings.offset}, settings.speed, settings.easing);
						}else{
							//if the browser doesn't support pushState, we set the hash after the animation, which may cause issues if you use offset
							$('html,body').stop().animate({scrollTop: $(idToLookAt).offset().top + settings.offset}, settings.speed, settings.easing,function(e){
								//set the hash of the window for better linking
								window.location.hash = idToLookAt;
							});
						}
					}
				});
			});
		};
		  
		$('#GoToHome, #GoToAbout, #GoToLocation, #GoToDeveloper, #GoToTeam, #GoToApartments, #GoToBlog, #GoToContacts' ).scrollTo({ speed: 1400 });
		
		
		/*----------------------------------------------------*/
		/*	Blog Timeline
		/*----------------------------------------------------*/
		var timelineAnimate;
		
		timelineAnimate = function(elem) {
			return $(".timeline.animated .timeline-row").each(function(i) {
			var bottom_of_object, bottom_of_window;
			bottom_of_object = $(this).position().top + $(this).outerHeight();
			bottom_of_window = $(window).scrollTop() + $(window).height();
			if (bottom_of_window > bottom_of_object) {
				return $(this).addClass("active");
				}
			});
		};
		
		timelineAnimate();
		return $(window).scroll(function() {
			return timelineAnimate();
		});

		
	});		
	
	
	/*----------------------------------------------------*/
	/*	Current Menu Item
	/*----------------------------------------------------*/
	
	$(document).ready(function() {
		
		//Bootstraping variable
		headerWrapper		= parseInt($('#navigation-menu').height());
		offsetTolerance	= 300;
		
		//Detecting user's scroll
		$(window).scroll(function() {
		
			//Check scroll position
			scrollPosition	= parseInt($(this).scrollTop());
			
			//Move trough each menu and check its position with scroll position then add selected-nav class
			$('.navbar-nav > li > a').each(function() {

				thisHref				= $(this).attr('href');
				thisTruePosition	= parseInt($(thisHref).offset().top);
				thisPosition 		= thisTruePosition - headerWrapper - offsetTolerance;
				
				if(scrollPosition >= thisPosition) {
					
					$('.selected-nav').removeClass('selected-nav');
					$('.navbar-nav > li > a[href='+ thisHref +']').addClass('selected-nav');
					
				}
			});
			
			
			//If we're at the bottom of the page, move pointer to the last section
			bottomPage	= parseInt($(document).height()) - parseInt($(window).height());
			
			if(scrollPosition == bottomPage || scrollPosition >= bottomPage) {
			
				$('.selected-nav').removeClass('selected-nav');
				$('navbar-nav > li > a:last').addClass('selected-nav');
			}
		});
		
	});


	$(document).ready(function(){
	
		"use strict";

		//$(function(){$("[data-toggle = 'tooltip']").tooltip()});
		
		/*$('.img-floor35').maphilight({
            fillColor: '008800'
        });*/
		
		/*----------------------------------------------------*/
		/*	Filterable Portfolio
		/*----------------------------------------------------*/
	
		$("#portfolio .row").mixitup({
			targetSelector: '.portfolio-item',
		});
		
		//var intro_text_top = $('#intro-text').offset().top;
		//intro_text_top = intro_text_top+300;
		//$("#intro-text").css({'transform': 'translateY('+ intro_text_top  +'px)'});
			
			//$("#intro-text").css({top:intro_text_top + 300});
			
			//var cur_imgsky_width = $("#img-sky").width();
			//var new_imgsky_width = cur_imgsky_width + 100;
			
			//alert(cur_imgsky_width);
			//alert(new_imgsky_width);
			
			//$("#img-sky").width(1437);
			
			//cur_imgsky_width = $("#img-sky").width();
			//alert(cur_imgsky_width);
		
		var map_width = 1812;
		var map_height = 1052;
		
		var map_marker_ny_width = 40;
		var map_marker_ny_height = 64;
		
		var map_marker_width = 30;
		var map_marker_height = 48;
		
		var map_fact_width = $("#map-image").width();
		var map_fact_height = $("#map-image").height();
		//alert("height: "+map_height+" width: "+map_width);
		
		var coord_coef_width = map_fact_width/map_width;
		var coord_coef_height = map_fact_height/map_height;
		
		//alert(coord_coef_width);
		//alert(coord_coef_height);
		
		var y_ny = 670 * coord_coef_height - map_marker_ny_height;
		var x_ny = 195 * coord_coef_width + map_marker_ny_width/2;
		
		$("#div-ny").css({top:y_ny, left:x_ny});
		
		
		
		var y_olimp = 137 * coord_coef_height - map_marker_height;
		var x_olimp = 560 * coord_coef_width + map_marker_width/2;
		
		$("#div-olimp").css({top:y_olimp, left:x_olimp});
		
		var y_park = 534 * coord_coef_height - map_marker_height;
		var x_park = 237 * coord_coef_width + map_marker_width/2;
		
		$("#div-park").css({top:y_park, left:x_park});
		
		var y_kostel = 614 * coord_coef_height - map_marker_height;
		var x_kostel = 375 * coord_coef_width + map_marker_width/2;
		
		$("#div-kostel").css({top:y_kostel, left:x_kostel});
		
		var y_market = 920 * coord_coef_height - map_marker_height;
		var x_market = 389 * coord_coef_width + map_marker_width/2;
		
		$("#div-market").css({top:y_market, left:x_market});
		
		var y_metro = 1036 * coord_coef_height - map_marker_height;
		var x_metro = 516 * coord_coef_width + map_marker_width/2;
		
		$("#div-metro").css({top:y_metro, left:x_metro});
		
		//260
		
		/*----------------------------------------------------*/
		/*	Portfolio Lightbox
		/*----------------------------------------------------*/
		
		$("a[class^='prettyPhoto']").prettyPhoto();
		
		
		/*----------------------------------------------------*/
		/*	Our Clients Carousel
		/*----------------------------------------------------*/
	
		/*$("#our-customers").owlCarousel({
					  
			slideSpeed : 600,
			items : 6,
			itemsDesktop : [1199,5],
			itemsDesktopSmall : [992,4],
			itemsTablet: [768,3],
			itemsMobile : [480,2],
			navigation:false,
			pagination:false,
			navigationText : false,
			autoPlay : true
					  
		});*/
		

		/*----------------------------------------------------*/
		/*	Statistic Counter
		/*----------------------------------------------------*/
	
		$('.statistic-block').each(function() {
			$(this).appear(function() {
				var $endNum = parseInt($(this).find('.statistic-number').text());
				$(this).find('.statistic-number').countTo({
					from: 0,
					to: $endNum,
					speed: 3000,
					refreshInterval: 30,
				});
			},{accX: 0, accY: 0});
		});
		
		
		/*----------------------------------------------------*/
		/*	Testimonials Rotator
		/*----------------------------------------------------*/
		
		/*$('.flexslider').flexslider({
			animation: "fade",
			controlNav: true,
			directionNav: false,  
			slideshowSpeed: 4000,   
			animationSpeed: 800,  
			start: function(slider){
				$('body').removeClass('loading');
			}
		});*/

	});
	
	
	/*----------------------------------------------------*/
	/*	Newsletter Subscribe Form
	/*----------------------------------------------------*/	
	
	$(document).ready(function() {
	
		"use strict";
	
		$('#newsletter_form').submit(function() {
			if (!valid_email_address($("#s_email").val()))
				{
					$(".message").html("<span style='color:red;'>The email address you entered was invalid. Please make sure you enter a valid email address to subscribe.</span>");
				}
			else
				{
					$(".message").html("<span style='color:#1fb4da;'>Adding your email address...</span>");
						$.ajax({
						url: 'subscribe.php',
						data: $('#newsletter_form').serialize(),
						type: 'POST',
						success: function(msg) {
							if(msg=="success")
								{
									$("#s_email").val("");
									$(".message").html('<span style="color:#1fb4da;">You have successfully subscribed to our mailing list.</span>');
								}
							else
								{
									$(".message").html("<span style='color:red;'>The email address you entered was invalid. Please make sure you enter a valid email address to subscribe.</span>");
								}
						}
					});
				}
		 
				return false;			
		});
		
	});
	
	function valid_email_address(email) {
		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
		return pattern.test(email);		
	}
	
	
	
	/*----------------------------------------------------*/
	/*	Contact Form Validation
	/*----------------------------------------------------*/
	
	$(document).ready(function(){
	
		"use strict";

		$("#contact-form").validate({
			rules:{ 
				first_name:{
					required: true,
					minlength: 1,
					maxlength: 16,
					},
					email:{
						required: true,
						email: false,
					},
					subject:{
						required: false,
						minlength: 2,
						maxlength: 24,
					},		
					message:{
						required: true,
						minlength: 2,
						}
					},
					messages:{
							first_name:{
								required: "Введіть ім'я"
							}, 
							email:{
								required: "Введіть номер телефону або email",
								email: "Невірний email або номер телефону"
							}, 
							message:{
								required: "Введіть повідомлення"
							}, 
						},
						
						submitHandler: function(form) {
							
							
							$.ajax({
							  method: "POST",
							  url: "http://www.new-york.com.ua/contact-new.php",							  
							  data: { first_name: $("#first_name").val(), email: $("#email").val(), subject: $("#subject").val()+" | "+$("#source").val(), message: $("#comments").val() }
							});
							
							$("#first_name").val("");
							$("#email").val("");
							$("#subject").val("");
							$("#comments").val("");
							
							$('#myModalContact').modal('show');
							setTimeout(function(){$('#myModalContact').modal('hide')}, 1500);
						}
		});			
		
	});

	
	