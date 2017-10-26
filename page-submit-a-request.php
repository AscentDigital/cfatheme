<?php get_header(); ?>
<!-- .secondary-banner -->
<div class="secondary-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bannerinterior2-2.jpg);">
	<div class="container">
		<h1>Submit a Request</h1>
	</div>
</div>
<!-- end .secondary-banner  -->


<!-- #form -->
<section class="section border-block __up">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class = "form-h1">Let Us Know What You Need</h1>
				<div class="panel panel-default form-panel">
						<div class="panel-body">
							<form class = "request-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
								<input type="hidden" name="action" value="cfatheme_request_form">
								<input type="hidden" name="pageid" value="<?php echo get_the_ID(); ?>">
								<div class="select-div">
								<select class ="form-control request-input" name="product_type">
									<option value="" disabled selected>Product Type</option>
									<option value = "Loan">Loan</option>
									<option value = "Line of Credit">Line of Credit</option>
								</select>
								</div>
								<div class="select-div">
								<select class ="form-control request-input" name="loan_range">
									<option value="" disabled selected>Desired Loan Range</option>
									<option value = "$30,000-$50,000">$30,000-$50,000</option>
									<option value = "$50,000-$100,000">$50,000-$100,000</option>
									<option value = "$100,000-$250,000">$100,000-$250,000</option>
									<option value = "$250,000-$500,000">$250,000-$500,000</option>
									<option value = "$50,000-$1,000,000">$500,000-$1,000,000</option>
								</select>
								</div>
								<div class="select-div">
								<select class ="form-control request-input" name="fast">
									<option value="" disabled selected>How Fast do you need the loan?</option>
									<option value = "Within 1 Week">Within 1 Week</option>
									<option value = "Within 1 Month">Within 1 Month</option>
									<option value = "More than a month away">More than a month away</option>
								</select>
								</div>
								<input type = "text" class = "form-control request-input" value ="" placeholder = "Full Name" name="name">
								<input type = "text" class = "form-control request-input" value ="" placeholder = "Phone Number" name="phone">
								<input type = "text" class = "form-control request-input" value ="" placeholder = "City and State" name="city">
								<input type = "email" class = "form-control request-input" value ="" placeholder = "Email" name="email">
			                    <button type = "submit" class = "btn btn-primary btn-block btn-lg request-input">Submit</button>
			                  </form>
			                    <button type = "button" class = "btn btn-primary btn-block btn-lg request-input hidden" data-toggle="modal" data-target="#SuccessWindow">Hidden</button>
			                    <!-- Success Window -->
			                    <div class="modal fade success-modal" id="SuccessWindow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			                      <div class="modal-dialog" role="document">
			                        <div class="modal-content">
			                          <div class="modal-header">
			                          <div class="modal-body">
			                          	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                            <div class="success-content text-center">
			                            	<h1>Your Request has been Submitted</h1>
			                            	<p>One of our staff members will be<br>contacting you soon.</p>
			                            	<br>
			                            	<a href ="#" data-dismiss="modal" aria-label="Close"> Close Window</a>
			                            </div>
			                          </div>
			                        </div>
			                      </div>
			                    </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class ="need-list">
					<h1>Requirements</h1>
					<div class="listing">
						<p class ="text-list"><span class ="green-box">■</span> Minimum of 3 years in business</p>
						<p class ="text-list"><span class ="green-box">■</span> No recent bankruptcies</p>
						<p class ="text-list"><span class ="green-box">■</span> Pass a background check</p>
						<p class ="text-list"><span class ="green-box">■</span> Provide at least 2 business references</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    <!-- end #form -->
<?php get_footer(); ?>