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
			<div class="col-md-6 hidden-xs">
				<div class ="need-list">
					<h1>Let us know what you need</h1>
					<div class="listing">
						<p class ="text-list"><span class ="green-box">■</span> Funding lines up to $500,000</p>
						<p class ="text-list"><span class ="green-box">■</span> Funding as fast as 2 business days</p>
						<p class ="text-list"><span class ="green-box">■</span> Minimum of 3 years in business</p>
						<p class ="text-list"><span class ="green-box">■</span> No recent bankruptcies</p>
						<p class ="text-list"><span class ="green-box">■</span> Pass a background check</p>
						<p class ="text-list"><span class ="green-box">■</span> Provide at least 2 business references</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default form-panel">
					<div class="panel-body">
						<form class = "request-form" action="#" method = "">
							<div class="select-div">
							<select class ="form-control request-input">
								<option value="" disabled selected>Product Type</option>
								<option value = "Loan">Loan</option>
								<option value = "Line of Credit">Line of Credit</option>
							</select>
							</div>
							<div class="select-div">
							<select class ="form-control request-input">
								<option value="" disabled selected>Desired Loan Range</option>
								<option value = "$30,000-$50,000">$30,000-$50,000</option>
								<option value = "$50,000-$100,000">$50,000-$100,000</option>
								<option value = "$100,000-$250,000">$100,000-$250,000</option>
								<option value = "$250,000-$500,000">$250,000-$500,000</option>
								<option value = "$50,000-$1,000,000">$500,000-$1,000,000</option>
							</select>
							</div>
							<div class="select-div">
							<select class ="form-control request-input">
								<option value="" disabled selected>How Fast you need the loan?</option>
								<option value = "Within 1 Week">Within 1 Week</option>
								<option value = "Within 1 Month">Within 1 Month</option>
								<option value = "More than a month away">More than a month away</option>
							</select>
							</div>
							<input type = "text" class = "form-control request-input" value ="" placeholder = "Full Name"/>
							<input type = "text" class = "form-control request-input" value ="" placeholder = "Phone Number"/>
							<input type = "text" class = "form-control request-input" value ="" placeholder = "City"/>
							<input type = "text" class = "form-control request-input" value ="" placeholder = "Email"/>
							<button type = "submit" class = "btn btn-primary btn-block btn-lg request-input">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6 visible-xs">
				<div class ="need-list">
					<h1>Let us know what you need</h1>
					<div class="listing">
						<p class ="text-list"><span class ="green-box">■</span> Funding lines up to $500,000</p>
						<p class ="text-list"><span class ="green-box">■</span> Funding as fast as 2 business days</p>
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