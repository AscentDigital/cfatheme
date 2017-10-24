<?php get_header(); ?>
<!-- .secondary-banner -->
<div class="secondary-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bannerinterior2-2.jpg);">
	<div class="container">
		<h1>Submit a Request</h1>
	</div>
</div>
<!-- end .secondary-banner  -->


<!-- #form -->
<section id="about" class="section border-block __up">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-6">
				<div class ="need-list">
					<h1>Let us know what you need</h1>
					<ul>
						<li><span class ="text-list">Funding lines up to $500,000</span></li>
						<li><span class ="text-list">Funding as fast as 2 business days</span></li>
						<li><span class ="text-list">Minimum of 3 years in business</span></li>
						<li><span class ="text-list">No recent bankruptcies</span></li>
						<li><span class ="text-list">Pass a background check</span></li>
						<li><span class ="text-list">Provide at least 2 business references</span></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default form-panel">
					<div class="panel-body">
						<form class = "request-form" action="#" method = "">
							<select class ="form-control request-input">
								<option value="" disabled selected>Product Type</option>
								<option value = "Loan">Loan</option>
								<option value = "Line of Credit">Line of Credit</option>
							</select>
							<select class ="form-control request-input">
								<option value="" disabled selected>Desired Loan Range</option>
								<option value = "$30,000-$50,000">$30,000-$50,000</option>
								<option value = "$50,000-$100,000">$50,000-$100,000</option>
								<option value = "$100,000-$250,000">$100,000-$250,000</option>
								<option value = "$250,000-$500,000">$250,000-$500,000</option>
								<option value = "$50,000-$1,000,000">$500,000-$1,000,000</option>
							</select>
							<select class ="form-control request-input">
								<option value="" disabled selected>How Fast you need the loan?</option>
								<option value = "Within 1 Week">Within 1 Week</option>
								<option value = "Within 1 Month">Within 1 Month</option>
								<option value = "More than a month away">More than a month away</option>
							</select>
							<input type = "text" class = "form-control request-input" value ="" placeholder = "Full Name"/>
							<input type = "text" class = "form-control request-input" value ="" placeholder = "Phone Number"/>
							<input type = "text" class = "form-control request-input" value ="" placeholder = "City"/>
							<input type = "text" class = "form-control request-input" value ="" placeholder = "Email"/>
							<button type = "submit" class = "btn btn-primary btn-block btn-lg request-input">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    <!-- end #form -->
<?php get_footer(); ?>