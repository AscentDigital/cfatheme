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
?>