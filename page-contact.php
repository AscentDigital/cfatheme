<?php get_header(); ?>
<!-- .secondary-banner -->
<div class="secondary-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bannerinterior6-2.jpg);">
	<div class="container">
		<h1>Contact</h1>
	</div>
</div>
<!-- end .secondary-banner  -->


<!-- #form -->
<section id="about" class="section border-block __up">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class = "contact-title">Get in touch with us</h1>
			</div>
			<div class="col-md-5">
				<div class ="contact-list">
					<div class="row">
						<div class="col-xs-2"><img class ="contact-img" src ="<?php echo get_template_directory_uri(); ?>/img/iconscontact1-u3657.png"></div>
						<div class="col-xs-6"><div class ="contact-text">1234 Street Name Suite 789 Houston, TX 77043</div></div>
					</div><br><br>
					<div class="row">
						<div class="col-xs-2"><img class ="contact-img" src ="<?php echo get_template_directory_uri(); ?>/img/iconscontact2-u3659.png"></div>
						<div class="col-xs-6"><div class ="contact-text">832.1234.5678<br>832.1234.5689</div></div>
					</div><br><br>
					<div class="row">
						<div class="col-xs-2"><img class ="contact-img" src ="<?php echo get_template_directory_uri(); ?>/img/iconscontact3-u3661.png"></div>
						<div class="col-xs-6"><div class ="contact-text">info@constructionfa.com</div></div>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default form-panel">
					<div class="panel-body">
						<form class = "request-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
							<?php  
								if(isset($_GET['sent']) && $_GET['sent'] == 'true'){
									echo '<div class="alert alert-success">Your message has been successfully sent.</div>';
								}else if(isset($_GET['sent']) && $_GET['sent'] == 'false'){
									echo '<div class="alert alert-danger">Your message has not been successfully sent.</div>';
								}
							?>
							<input type="hidden" name="action" value="cfatheme_contact_form">
							<input type="hidden" name="pageid" value="<?php echo get_the_ID(); ?>">
							<h1 class ="form-title">Quick Contact</h1>
							<div class="form-group">
								<label >Name</label>
								<input type = "text" class = "form-control request-input" value ="" placeholder = "Full Name" name="name"/>
							</div>
							<div class="form-group">
								<label>Email address</label>
								<input type = "email" class = "form-control request-input" value ="" placeholder = "Email" name="email"/>
							</div>  
							<div class="form-group">
								<label>Message</label>
								<textarea class = "form-control request-input" value ="" rows="5" style="resize:none;" placeholder = "Enter your Message or Question"/ name="message"></textarea>
							</div>  
							<button type = "submit" class = "btn btn-primary btn-lg request-input">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end #form --><!-- #about -->
<section id="about" class="section border-block __up __plus" style ="min-height:200px">
	<div class="container text-center"  style ="min-height:200px">

		<div class="call-us" style = "margin-top:100px">

			<p class ="bottom-message">Economically empowering the small business community through enhanced access to working capital.</p>

		</div>
	</div>
</section>
    <!-- end #about -->
<?php get_footer(); ?>