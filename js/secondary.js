/* =============================Global Variables================================== */

var height;
var width;
window.navHeight = jQuery("#affix-nav").height();

/* =============================Full Width Home================================== */

$(document).ready( function() {
	height = $( window ).height();
	width = $( window ).width();
	$('#home').height(height);
	$('#home').width(width);

	if(height > 700){
		$('#about').height(height - 65);
		$('#about').width(width);
	}else{
		$('#about').height(600);
		$('#about').width(width);
	}
	$('#logo').offset({ top: (height/2)*.85 });
	$('#entrar').offset({ top: (height-100) });
	//$('#footer').offset({ top: height-300 });
} );

$( window ).resize(function(){
	height = $( window ).height();
	width = $( window ).width();
	$('#home').height(height);
	$('#home').width(width);

	if(height > 700){
		$('#about').height(height - 65);
		$('#about').width(width);
	}else{
		$('#about').height(600);
		$('#about').width(width);
	}
	$('#logo').offset({ top: (height/2)*.85 });
	$('#entrar').offset({ top: (height-100) });
	//$('#footer').offset({ top: height-300 });
} );

/* =============================NAV================================== */


$(document).ready( function() {
	$.localScroll();
	$('#entrar').localScroll({ duration: 'slow', offset: -63});
	$('#affix-nav').localScroll({ duration: 'slow', offset: -63});
} );

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

	/*

	//13
	$('.portafolioImage13').mouseenter( function() {
		$('#caption13').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption13').addClass('hidden');
	});

	

	//14
	$('.portafolioImage14').mouseenter( function() {
		$('#caption14').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption14').addClass('hidden');
	});

	//15
	$('.portafolioImage15').mouseenter( function() {
		$('#caption15').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption15').addClass('hidden');
	});

	//16
	$('.portafolioImage16').mouseenter( function() {
		$('#caption16').removeClass('hidden');
	}).mouseleave( function() {
		$('#caption16').addClass('hidden'); 
	}); */

} );


