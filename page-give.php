<?php
/** Template Name: Give */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body>
		<?php get_template_part( 'views/navigation' ); ?>
		<div id="hero-give" class="hero container-fluid pad-top">
			<div class="row text-center">
				<h3>Give</h3>
				<!-- <p>To give you must have a FREE Monument of Praise account. This account allows you to give securely, review your giving history and comment on sermons.</p> -->
				<!-- <p>To pay your tithes or offering complete the form below</p> -->
				<p>We thank you for your desire to give and support the work we're doing in High Point, NC. You may give securely using the form below. Please note that your credit card information is NOT stored on our servers, but safely with our credit card proccessor.</p>
				<!-- <p><a class="btn btn-default white" href="<?php echo home_url('account?action=signin') ?>">Sign In to Give</a></p> -->
				<!-- <p>Create an Account</p> -->
			</div>
		</div>
		<div class="hero container-fluid content">
			<div style="max-width: 600px; margin: 0 auto;">
				<form class="stripe-form" method="POST" style="padding: 0 20px;">
					<div>
						<h3>Contact Info</h3>
						<div class="form-group stripe-field required">
						    <label for="exampleInputEmail1">First Name</label>
						    <input type="text" class="form-control" name="user[first_name]" placeholder="">
						</div>
						<div class="form-group stripe-field required">
						    <label for="exampleInputEmail1">Last Name</label>
						    <input type="text" class="form-control" name="user[last_name]" placeholder="">
						</div>
						<div class="form-group stripe-field required">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" name="user[email]" placeholder="">
						</div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Mobile Number</label>
						    <input type="tel" class="form-control mobile" name="user[meta][mobile]" placeholder="(336) 370-8583">
						</div>
						<div class="form-group stripe-field required">
						    <label for="exampleInputEmail1">Zip Code</label>
						    <input type="number" class="form-control" name="user[meta][zipcode]"  placeholder="27406" maxlength="5">
						</div>
					</div>
					<div>
						<h3>Giving</h3>
						<table class="table">
							<thead>
								<tr>
									<th>Item</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										Tithe
										<input type="hidden" name="product_description[]" value="Tithe" />
									</td>
									<td>
										<input type="number" name="product_amount[]" />
									</td>
								</tr>
								<tr>
									<td>
										Offering
										<input type="hidden" name="product_description[]" value="Offering" />
									</td>
									<td>
										<input type="number" name="product_amount[]" />
									</td>
								</tr>
								<tr>
									<tr>
										<td><strong>Total</strong></td>
										<td><span id="charge-total"><strong>$0.00</strong></span></td>
									</tr>
								</tr>
							</tbody>
						</table>
					</div>
					<div>
						<h3>Debit/Credit Card</h3>
						<div class="row" style="padding: 0;">
							<div class="col-md-12" style="padding: 0;">
								<div class="form-group">
								    <label>Card Number</label>
								    <input type="number" class="form-control" data-stripe="number" placeholder="" >
								</div>
							</div>
							<div class="col-md-4 col-xs-4" style="padding-left: 0;">
								<div class="form-group">
								    <label>Exp Month</label>
								    <input type="number" class="form-control" data-stripe="exp-month" placeholder="MM" maxlength="2" >
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="form-group">
								    <label>Exp Year</label>
								    <input type="number" class="form-control" data-stripe="exp-year" placeholder="YY" maxlength="2" >
								</div>
							</div>
							<div class="col-md-4 col-xs-4" style="padding-right: 0;">
								<div class="form-group">
								    <label>CVC Code</label>
								    <input type="number" class="form-control" data-stripe="cvc" placeholder="123" maxlength="3" >
								</div>
							</div>
						</div>
					</div>
					<input type="hidden" name="amount" value="" />
					<input type="hidden" name="stripe_token" value="" />
					<input type="hidden" name="action" value="proccess_credit_card" />
					<button class="btn btn-default" type="submit">Give</button>
				</form>
			</div>
		</div>
		<div class="hero container-fluid content">
			<div class="row text-center">
				<h5>Why should I give?</h5>
				<h2>Your giving produces tangible results</h2>
				<p>Monument of Praise Ministries has purchased 25 acres of land—the first step in the fulfillment of the vision to establish ministries capable of meeting the spiritual, emotional, and physical needs of a hurting community, and of establishing a legacy of praise and worship to honor the Lord, and His commitment to His people.</p>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>