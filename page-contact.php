<?php get_header(); ?>
<!-- .secondary-banner -->
<div class="secondary-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bannerinterior6-2.jpg);">
	<div class="container">
		<h1>Contact</h1>
	</div>
</div>
<!-- end .secondary-banner  -->


<!-- #form -->
<section class="section border-block __up">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class = "contact-title">Get in touch with us</h1>
			</div>
			<div class="col-md-6">
				<div class ="contact-list">
					<div class="row">
						<div class="col-xs-2"><img class ="contact-img" src ="<?php echo get_template_directory_uri(); ?>/img/iconscontact1-u3657.png"></div>
						<div class="col-xs-6">
						<div class ="contact-text">
						8588 Katy Freeway<br>
						Suite 445<br>
						Houston, TX 77024<br>
						</div></div>
					</div><br><br>
					<div class="row">
						<div class="col-xs-2"><img class ="contact-img" src ="<?php echo get_template_directory_uri(); ?>/img/iconscontact3-u3661.png"></div>
						<div class="col-xs-6"><div class ="contact-text">713.722.0162</div></div>
					</div><br><br>
					<div class="row">
						<div class="col-xs-2"><img class ="contact-img" src ="<?php echo get_template_directory_uri(); ?>/img/iconscontact2-u3659.png"></div>
						<div class="col-xs-6"><div class ="contact-text">info@constructionfa.com</div></div>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default form-panel2">
					<div class="panel-body">
						<form class = "request-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
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
								<textarea class = "form-control request-area" value ="" placeholder = "Enter your Message or Question"/ name="message"></textarea>
							</div>  
							<button type = "submit" class = "btn btn-primary btn-lg request-input">Submit</button>
						</form>
		                    <button type = "button" id="modal-open" class = "btn btn-primary btn-block btn-lg request-input hidden" data-toggle="modal" data-target="#SuccessWindow">Hidden</button>
		                    <!-- Success Window -->
		                    <div class="modal fade success-modal" id="SuccessWindow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		                      <div class="modal-dialog" role="document">
		                        <div class="modal-content">
		                          <div class="modal-header">
		                          <div class="modal-body">
		                          	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                            <div class="success-content text-center">
		                            	<h1>Your message has been sent</h1>
		                            	<p>Thank you for contacting us</p>
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