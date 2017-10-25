<?php  
	function resources(){
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/theme.css');
		wp_enqueue_style('bootstrap-theme-extended', get_template_directory_uri() . '/css/theme-extended.css');
		wp_enqueue_style('style-name', get_stylesheet_uri());
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'parallaxie', get_template_directory_uri() . '/js/parallaxie.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'viewportjs', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery'), '1.0.0', true );
	}

	add_action('wp_enqueue_scripts', 'resources');

	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function special_nav_class ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
		return $classes;
	}

	class Description_Walker extends Walker_Nav_Menu{
	    function start_el(&$output, $item, $depth, $args){
	        $classes = empty($item->classes) ? array () : (array) $item->classes;
	        $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
	        !empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
	        $output .= "<div id='menu-item-$item->ID' $class_names>";
	        $attributes  = '';
	        !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
	        !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
	        !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
	        !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
	        $title = apply_filters( 'the_title', $item->title, $item->ID );
	        $item_output = $args->before
	        . "<a $attributes>"
	        . $args->link_before
	        . $title
	        . '</a></div>'
	        . $args->link_after
	        . $args->after;
	        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	    }
	}

	function setup(){
			//Navigation Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu')
		));
			//Add featured image support
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
	}
	add_action('after_setup_theme', 'setup');

	function get_link_by_slug($slug, $type = 'post'){
		$post = get_page_by_path($slug, OBJECT, $type);
		return get_permalink($post->ID);
	}

	add_action('admin_menu', 'theme_contact_setup_menu');
 
	function theme_contact_setup_menu(){
	    add_menu_page( 'Theme Contact Page', 'Theme Options', 'manage_options', 'theme-option', 'init' );
	}
	 
	function init(){
		$success = '';
		if(isset($_GET['success'])){
			$success = ' <div id="message" class="updated notice notice-success is-dismissible"><p>Recipient updated.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
		}
	    echo '<div class="wrap">
	    <h1>Edit Theme Options</h1><br>
	   	'.$success.'
	    <form action="'.esc_url( admin_url('admin-post.php') ).'" method="post">
	    <input type="hidden" name="action" value="cfatheme_update_theme_options">
	    <table class="form-table">
	    	<tbody>
	    		<tr class="form-field form-required">
	    		<th scope="row"><label for="recipient-email">Recipient <span class="description">(required)</span></label></th>
	    		<td><input name="recipient-email" type="text" id="recipient-email" value="'.get_option('cfatheme_recipient_email', '').'" aria-required="true" autocapitalize="none" autocorrect="off"></td>
	    		</tr>
	    	</toby>
	    </table>
	    <input type="submit" value="Update" name="submit" class="button button-primary">
	    </div>';
	}

	function update_theme_options(){
		$email = $_POST['recipient-email'];
		update_option('cfatheme_recipient_email', $email);
		wp_redirect(admin_url('admin.php?page=theme-option&success'));
		exit;
	}

	add_action( 'admin_post_nopriv_cfatheme_update_theme_options', 'update_theme_options' );
	add_action( 'admin_post_cfatheme_update_theme_options', 'update_theme_options' );

	function send_contact_form(){
		$pageid = $_POST['pageid'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$body = 'Full Name: ' . $name . "\r\n";
		$body .= 'Email Address: ' . $email . "\r\n";
		$body .= 'Message: ' . $message;

		$success = 'false';
		if(wp_mail(get_option('cfatheme_recipient_email', ''), 'Construction Funding Access Contact Form', $body)){
			$success = 'true';
		}

		wp_redirect(get_the_permalink($pageid) . '?sent=' . $success);
		exit;
	}

	add_action( 'admin_post_nopriv_cfatheme_contact_form', 'send_contact_form' );
	add_action( 'admin_post_cfatheme_contact_form', 'send_contact_form' );

	function create_requests_table(){
		global $wpdb;

		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $table_name = $wpdb->prefix . "cfatheme_requests"; 
		$sql = "CREATE TABLE $table_name ( `id` INT(11) NOT NULL AUTO_INCREMENT , `product_type` VARCHAR(45) NOT NULL , `loan_range` VARCHAR(45) NOT NULL , `fast` VARCHAR(45) NOT NULL , `name` VARCHAR(200) NOT NULL , `phone` VARCHAR(45) NOT NULL , `city` VARCHAR(200) NOT NULL , `email` VARCHAR(200) NOT NULL , `date` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}

	add_action("after_switch_theme", "create_requests_table");

	function request_form(){
		global $wpdb;

		$pageid = $_POST['pageid'];
		$product_type = $_POST['product_type'];
		$loan_range = $_POST['loan_range'];
		$fast = $_POST['fast'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$city = $_POST['city'];
		$email = $_POST['email'];

		$table_name = $wpdb->prefix . 'cfatheme_requests';

		$result = $wpdb->insert( 
			$table_name, 
			array( 
				'product_type' => $product_type,
				'loan_range' => $loan_range,
				'fast' => $fast,
				'name' => $name, 
				'phone' => $phone, 
				'city' => $city,
				'email' => $email,
				'date' => current_time( 'mysql' )
			) 
		);

		$success = 'false';
		if($result){
			$success = true;
		}

		wp_redirect(get_the_permalink($pageid) . '?success=' . $success);
		exit;
	}

	add_action( 'admin_post_nopriv_cfatheme_request_form', 'request_form' );
	add_action( 'admin_post_cfatheme_request_form', 'request_form' );
?>