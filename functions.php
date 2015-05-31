<?php

Class MOP_2015 {
	
	public function __construct() {
		
		add_theme_support( 'post-thumbnails' );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_includes' ) );
		add_action( 'after_setup_theme', array( $this, 'menus' ) );

		add_action( 'init', array( $this, 'proccess_credit_card' ) );

	}

	public function load_includes() {
		
		wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/includes/bootstrap/css/bootstrap.min.css' );
		wp_enqueue_style( 'mop2015', get_template_directory_uri() . '/assets/css/mop2015.css' );

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/includes/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.4', true );

		wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax-js/parallax.min.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'jmask', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array('jquery'), '0.1.0', true );
		wp_enqueue_script( 'mop2015', get_template_directory_uri() . '/assets/js/mop2015.js', array('jquery','jmask'), '0.1.0', true );

	}

	public function menus() {
		register_nav_menu( 'side-menu', __( 'Side Menu', 'mop2015' ) );
	}

	public function proccess_credit_card() {

		if ( isset( $_POST ) && isset( $_POST['action'] ) && $_POST['action'] == 'proccess_credit_card' ) {
			
			if ( class_exists('Embee_Stripe') ) {

				$stripe_object = new Embee_Stripe();

				$user_email = isset( $_POST['user']['email'] ) ? $_POST['user']['email'] : array();
				$stripe_token = isset( $_POST['stripe_token'] ) ? $_POST['stripe_token'] : '';
				$save_card = isset( $_POST['save_card'] ) ? true : false;
				
				$amount = isset( $_POST['amount'] ) ? $_POST['amount'] * 100 : 0;
				$description = 'Online Giving';
				$card = isset( $_POST['card'] ) ? $_POST['card'] : '';

				$product_amounts = isset( $_POST['product_amount'] ) ? $_POST['product_amount'] : array();
				$product_descriptions = isset( $_POST['product_description'] ) ? $_POST['product_description'] : array();

				if ( empty( $stripe_token ) ) {
					echo "You are not authorized to submit a payment. Please try again.";
					exit;
				}

				if ( empty( $user_email ) ) {

					echo json_encode( array( 
						'success' => false,
						'message' => 'Please supply an email address'
					) );
					
					exit;

				}

				$stripe_customer_id = $stripe_object->customers->get_ID_by_email( $user_email );

				if ( ! $stripe_customer_id ) {

					$first_name = isset( $_POST['user']['first_name'] ) ? $_POST['user']['first_name'] : '';
					$last_name = isset( $_POST['user']['last_name'] ) ? $_POST['user']['last_name'] : '';
					$user_meta = isset( $_POST['user']['meta'] ) ? $_POST['user']['meta'] : array();

					$name = $first_name . ' ' . $last_name;

					if ( empty( $first_name ) || empty( $last_name ) ) {
						$name = $user_email;
					}

					$user_args = array(
						'description' => $name,
						'source' => $stripe_token,
						'email' => $user_email,
						'metadata' => $user_meta
					);

					$stripe_customer_id = $stripe_object->customers->create( $user_args );		

				}

				
				// Get the total and update the description to include
				if ( $amount ) {

					$description .= ' ($' . number_format( $amount / 100, 2, '.', '' ) . ')';

				} else {

					echo json_encode( array( 
						'success' => false,
						'message' => 'Amount can\'t be zero'
					) );
					
					exit;

				}

				$charge_info = array();

				foreach ( $product_amounts as $index => $value ) {

					if ( $value ) {
						$charge_info[ $product_descriptions[ $index ] ] = $value;	
					}
					
				}
				
				// Process the payment
				$charge_args = array(
					'customer' => $stripe_customer_id,
					'currency' => 'USD',
					'description' => $description,
					'amount' => $amount,
					'metadata' => $charge_info
				);

				// Choose to pay with selected card if present
				if ( $card ) {
					$charge_args['source'] = $card;
				}

				$payment_id = $stripe_object->charges->create( $charge_args );
				
				if( $payment_id ) {

					echo json_encode( array( 
						'success' => true,
						'message' => 'Thank you for your giving! You will receive an email confirmation shortly'
					) );
					
					exit;

				}

			}
			
			exit;

		}

	}
}

$mop_theme = new MOP_2015();