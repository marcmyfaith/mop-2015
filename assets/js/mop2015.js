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

	$('.mobile').mask("(999) 999-9999");

	// Change the price on the amount
	$(document).on( 'keyup change','[name^=product_amount]', function(){
		
		var total = 0;

		$('[name^=product_amount]').each(function( index, amount ){

			total += $(amount).val() * 1;

		});

		$('input[name=amount]').val( total );

		$('#charge-total').text( '$' + total );

	});

	// Process the credit card
	if ( embee_stripe !== undefined && embee_stripe.publishable_key ) {
		Stripe.setPublishableKey( embee_stripe.publishable_key );
	} else {
		alert('The form is not connected to the payment processor. Please contact the finance department.');
	}

	$('.stripe-form button[type="submit"]').on( 'click', function( form_submit ) {

		form_submit.preventDefault();

		var form = $(this).closest('.stripe-form');
		var form_is_valid = validate_form();
		var submit_button = $(this);

		var trigger = $.event.trigger({
			type:    "stripe_submit",
			message: "stripe submit button was pressed",
			time:    new Date(),
			form:    form
		});

		if ( form_is_valid && ( trigger !== false ) ) {	

			$( submit_button ).attr( 'disabled', true ).text('Processing...');

			request = $.ajax({
				url: embee_stripe.ajax_url,
				type: "POST",
				data: $( form ).serialize(),
				dataType: "JSON"
			});

			request.done( function( response ) {
				
				$( submit_button ).removeAttr( 'disabled' ).text('Done!');
				
				if ( response.success ) {

					alert( response.message );

					location.reload();

				} else {
					alert( response.message );


				}
				
			});

		}

	});

	function validate_form() {

		var form_is_valid = true;

		$('.stripe-field.required').removeClass('has-error');

		$('.stripe-field.required').each(function(){
			
			if ( $(this).find('input,select,textarea').val() == '' ) {
				
				form_is_valid = false;
				$(this).addClass('has-error');
				
			}

		});

		if ( ! form_is_valid ) {
			alert( "Make sure you've filled in all required fields" );
		}

		return form_is_valid;

	}

	$(document).on('stripe_submit', function( freeform_submit ){

		if ( $('input[name="stripe_token"]').val() == '' ) {

			Stripe.card.createToken( $( freeform_submit.form ), stripeResponseHandler );

			function stripeResponseHandler( status, response ) {
				
				if( response.error ) {
					
					alert( response.error.message );

				} else if( response.id ) {
					
					$('input[name="stripe_token"]').val( response.id );

					$('.stripe-form button[type="submit"]').click();

				}

			}

			return false;
		}

		return true;

	});

});