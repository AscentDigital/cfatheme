<div class="wrap">
	<h1>Edit Theme Options</h1><br>
	<?php if(isset($_GET['success'])){ ?>
		<div id="message" class="updated notice notice-success is-dismissible">
			<p>Recipient updated.</p>
			<button type="button" class="notice-dismiss">
				<span class="screen-reader-text">Dismiss this notice.</span>
			</button>
		</div>
	<?php } ?>
	<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
		<input type="hidden" name="action" value="cfatheme_update_theme_options">
		<table class="form-table">
			<tbody>
				<tr class="form-field form-required">
					<th scope="row"><label for="recipient-email">Recipient <span class="description">(required)</span></label></th>
					<td>
						<input name="recipient-email" type="text" id="recipient-email" value="<?php echo get_option('cfatheme_recipient_email', ''); ?>" aria-required="true" autocapitalize="none" autocorrect="off"><br>
						<p class="description">Please enter comma separated values for multiple emails <i>(e.g. john@sample.com, doe@sample.com)</i></p>
					</td>
				</tr>
			</tbody>
		</table>
		<input type="submit" value="Update" name="submit" class="button button-primary">
	</form>
</div>