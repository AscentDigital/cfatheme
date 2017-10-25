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
	    add_menu_page( 'Theme Options', 'Theme Options', 'manage_options', 'theme-option', 'init' );
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
			$success = 'true';
		}

		$body = 'Product Type: ' . $product_type . "\r\n";
		$body .= 'Desired Loan Range: ' . $loan_range . "\r\n";
		$body .= 'How fast do you need the loan: ' . $fast . "\r\n";
		$body .= 'Full Name: ' . $name . "\r\n";
		$body .= 'Phone Number: ' . $number . "\r\n";
		$body .= 'City: ' . $city . "\r\n";
		$body .= 'Email: ' . $email . "\r\n";

		wp_mail(get_option('cfatheme_recipient_email', ''), 'CFA Request Form', $body);

		wp_redirect(get_the_permalink($pageid) . '?success=' . $success);
		exit;
	}

	add_action( 'admin_post_nopriv_cfatheme_request_form', 'request_form' );
	add_action( 'admin_post_cfatheme_request_form', 'request_form' );

	add_action('admin_menu', 'theme_request_setup_menu');

	function theme_request_setup_menu(){
	    add_menu_page( 'Construction Funding Access Requests', 'CFA Requests', 'manage_options', 'cfa-requests', 'init_requests' );
	}

	function init_requests(){
		require('pagination.class.php');
		global $wpdb;
		$table_name = $wpdb->prefix . 'cfatheme_requests';

		$page_num = isset( $_GET['paged'] ) ? absint( $_GET['paged'] ) : 1;
		$limit = 10; // Number of rows in page
		$offset = ( $page_num - 1 ) * $limit;
		$total = $wpdb->get_var( "SELECT COUNT(`id`) FROM $table_name" );
		$num_of_pages = ceil( $total / $limit );
		$lists = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id ASC LIMIT $offset,$limit" );

		$p = new pagination;
        $p->items($total);
        $p->limit($limit); // Limit entries per page
        $p->target("admin.php?page=cfa-requests"); 
        $p->currentPage($_GET[$p->paging]); // Gets and validates the current page
        $p->calculate(); // Calculates what to show
        $p->parameterName('paged');
        $p->adjacents(1); //No. of page away from the current page
                 
        if(!isset($_GET['paged'])) {
            $p->page = 1;
        } else {
            $p->page = $_GET['paged'];
        }
        include get_template_directory() . '/includes/requests-table.php';
	}

	function export(){
		if ( ! is_super_admin() ) {
			return;
		}
		if (!isset($_GET['export']) || (!isset($_GET['page']) && $_GET['page'] != 'cfa-requests')) {
			return;
		}

		$filename = 'cfa-requests-' . time() . '.csv';

		$header_row = array(
			0 => 'Product Type',
			1 => 'Desired Loan Range',
			2 => 'How Fast Do You Need The Loan',
			3 => 'Full Name',
			4 => 'Phone Number',
			5 => 'City',
			6 => 'Email',
			7 => 'Date Requested',
		);

		$data_rows = array();
		global $wpdb, $bp;
		$table_name = $wpdb->prefix . 'cfatheme_requests';
		$lists = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id ASC" );
		foreach ( $lists as $list ) {
			$row = array();
			$row[0] = $list->product_type;
			$row[1] = $list->loan_range;
			$row[2] = $list->fast;
			$row[3] = $list->name;
			$row[4] = $list->phone;
			$row[5] = $list->city;
			$row[6] = $list->email;
			$row[7] = date('g:i a F j, Y', strtotime($list->date));
			$data_rows[] = $row;
		}

		$fh = @fopen( 'php://output', 'w' );
		fprintf( $fh, chr(0xEF) . chr(0xBB) . chr(0xBF) );
		header( 'Cache-Control: must-revalidate, post-check=0, pre-check=0' );
		header( 'Content-Description: File Transfer' );
		header( 'Content-type: text/csv' );
		header( "Content-Disposition: attachment; filename={$filename}" );
		header( 'Expires: 0' );
		header( 'Pragma: public' );
		fputcsv( $fh, $header_row );
		foreach ( $data_rows as $data_row ) {
			fputcsv( $fh, $data_row );
		}
		fclose( $fh );
		die();
	}

	add_action( 'admin_init', 'export' );
?>