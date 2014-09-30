/* =============================Global Variables================================== */

var height;
var width;
var mainHeight;
var h1, h2;
var is_safari = navigator.userAgent.indexOf("Safari") > -1;
var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
if ((is_chrome)&&(is_safari)) {is_safari=false;}

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

var aparece2 = function(){
	$('#tagline2').fadeIn("slow", 
		function complete(){
			$('#tagline2').delay(5000).fadeOut(1500, 
				function complete(){
					aparece1();
				}
			);
		}
	);
}

var aparece1 = function(){
	$('#tagline1').fadeIn("slow", 
		function complete(){
			$('#tagline1').delay(5000).fadeOut(1500, 
				function complete(){
					aparece2();
				}
			);
		}
	);
}

window.navHeight = jQuery("#affix-nav").height();

/* =============================Full Width Home================================== */

$(document).ready( function() {
	height = $( window ).height();
	width = $( window ).width();
	h1 = $('#frases-about').height();
	h1 = h1 * .5;
	h2 = (height/2)*.8;
	h3 = height-100;
	$('#home').height(height);
	$('#home').width(width);
	$('#logo').css("margin-top", h2 + "px");
	$('#tagline2').removeClass('hidden');
	$('#tagline2').hide();


	if(height > 700){
		$('#about').height(height - 65);
		$('#contenido-about').height(height - 165);
		//$('#frases-about').css("margin-top", ((height-165) - h1)/2 + "px");
		$('#frases-about').css("margin-top", "0px");
		//$('#tagline1').css("margin-top", -((((height-165) - h1)/2)-80) + "px");
		$('#tagline1').css("margin-top", ( (height-165) - $('#tagline1').height() )/2 + "px");
		$('#tagline2').css("margin-top", ( (height-165) - $('#tagline2').height() )/2 + "px");
		$('#about').width(width);
	}else{
		$('#about').height(650);
		$('#about').height(650 - 165);
		$('#tagline1').css("margin-top", ( (650-165) - $('#tagline1').height() )/2 + "px");
		$('#tagline2').css("margin-top", ( (650-165) - $('#tagline2').height() )/2 + "px");
		$('#about').width(width);
	}

	//$('#logo').css("margin-top", h1 });
	$('#entrar').css("top", h3 + "px");
	//$('#footer').offset({ top: height-300 });
	$('#site-wrapper').offset({ top: height });
	$('#affix-nav').offset({ top: height });
	$('#tagline1').delay(5000).fadeOut("slow", 
		function complete(){
			aparece2();
		}
	);

	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
} );

$(window).resize( function() {
	height = $( window ).height();
	width = $( window ).width();
	h1 = $('#frases-about').height();
	h1 = h1 * .85;
	h2 = (height/2)*.8;
	h3 = height-100;
	$('#home').height(height);
	$('#home').width(width);
	$('#logo').css("margin-top", h2 + "px");

	if(height > 700){
		$('#about').height(height - 65);
		$('#contenido-about').height(height - 165);
		$('#frases-about').css("margin-top", "0px");
		$('#tagline1').css("margin-top", ( (height-165) - $('#tagline1').height() )/2 + "px");
		$('#tagline2').css("margin-top", ( (height-165) - $('#tagline2').height() )/2 + "px");
		$('#about').width(width);
	}else{
		$('#about').height(650);
		$('#about').height(650 - 165);
		$('#tagline1').css("margin-top", ( (650-165) - $('#tagline1').height() )/2 + "px");
		$('#tagline2').css("margin-top", ( (650-165) - $('#tagline2').height() )/2 + "px");
		$('#about').width(width);
	}

	//$('#logo').css("margin-top", h1 });
	$('#entrar').css("top", h3 + "px");
	//$('#footer').offset({ top: height-300 });
	$('#site-wrapper').offset({ top: height });
	$('#affix-nav').stickUp();
	var flechaHeight = $('.mainProyecto').height();
	$('.flecha').offset({ top: flechaHeight });
} );

/* =============================Flecha Portafolio================================== */
function flecha(){
	$(document).ready( function(){
		var flechaHeight = $('.mainProyecto').height();
		$('.flecha').offset({ top: flechaHeight });
	});
}


/* =============================Contacto================================== */
$('#email').focus( function(){
	$('#valid').removeClass('hidden');
});

/* =============================NAV================================== */
$(document).ready( function() {
	$.localScroll();
	$('#entrar').localScroll({ duration: 'slow', offset: -63});
	$('#affix-nav').localScroll({ duration: 'slow', offset: -63});
	$('#entraPortafolio').localScroll({ duration: 'slow', offset: -63});
	$('#masinfo').localScroll({ duration: 'slow', offset: -63});
} );

/* =============================Portafolio Item================================== */

$(document).ready(function() {
	$("#owl-main").owlCarousel({
		navigation : false, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		autoHeight: true
	});
});

/* =============================Portafolio================================== */
$(document).ready( function() {

	//1
	$('.portafolioImage1').mouseenter( function() {
		$('#caption1').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption1').addClass('hidden');
	});

	//2
	$('.portafolioImage2').mouseenter( function() {
		$('#caption2').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption2').addClass('hidden');
	});

	//3
	$('.portafolioImage3').mouseenter( function() {
		$('#caption3').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption3').addClass('hidden');
	});

	//4
	$('.portafolioImage4').mouseenter( function() {
		$('#caption4').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption4').addClass('hidden');
	});

	//5
	$('.portafolioImage5').mouseenter( function() {
		$('#caption5').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption5').addClass('hidden');
	});

	//6
	$('.portafolioImage6').mouseenter( function() {
		$('#caption6').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption6').addClass('hidden');
	});

	//7
	$('.portafolioImage7').mouseenter( function() {
		$('#caption7').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption7').addClass('hidden');
	});

	//8
	$('.portafolioImage8').mouseenter( function() {
		$('#caption8').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption8').addClass('hidden');
	});

	//9
	$('.portafolioImage9').mouseenter( function() {
		$('#caption9').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption9').addClass('hidden');
	});

	//10
	$('.portafolioImage10').mouseenter( function() {
		$('#caption10').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption10').addClass('hidden');
	});

	//11
	$('.portafolioImage11').mouseenter( function() {
		$('#caption11').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption11').addClass('hidden');
	});

	//12
	$('.portafolioImage12').mouseenter( function() {
		$('#caption12').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption12').addClass('hidden');
	});

} );


