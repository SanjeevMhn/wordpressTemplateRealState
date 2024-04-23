<?php 
	
	function realState_theme_support(){
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme','realState_theme_support');

	function realState_enqueue_scripts(){
		wp_enqueue_style('stylesheet',get_template_directory_uri().'/style.css', array());
	}

	add_action('wp_enqueue_scripts', 'realState_enqueue_scripts');

	function realState_menus(){
		$locations = array(
			'primary' => 'Top bar middle menu',
		);

		register_nav_menus($locations);
	}

	add_action('init', 'realState_menus');

	function realState_add_additional_classes_on_a($classes,$item,$args){
		if(isset($args->add_a_class)){
			$classes['class'] = $args->add_a_class;
		}

		return $classes;
	}

	add_filter('nav_menu_link_attributes', 'realState_add_additional_classes_on_a',1,3);


