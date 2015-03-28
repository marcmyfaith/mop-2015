jQuery('document').ready(function($){
	
	$('#hero-video').css( 'max-height', $(window).height() );

	var scrollStartTop = 0;

	$('#location-menu .open-menu').on('click', function(){
		$('#side-menu').addClass('open');
	});

	$('.close-menu').on('click', function(){
		$('#side-menu').removeClass('open');
	});

	// Change navigation background color
	$(window).scroll(function ( scroll_event ) {
		
		// if( $(window).scrollTop() > 100 ) {
		// 	$('#navigation').addClass('fade');
		// } else {
		// 	$('#navigation').removeClass('fade');
		// }

		// var scrollPosition = $(window).scrollTop();

		// console.log( $(document).offset() + ' ' + $(window).scrollTop() );

	     $('.hero').each(function () {

	        var w = $(window).scrollTop();
	        var t = $(this).offset().top - 100;
	        
	        if (w > t) {
	        	
	            // $('#navigation').css({
	            //     "color": $(this).css('color')
	            // });
	        }
	    }); 

	});

});