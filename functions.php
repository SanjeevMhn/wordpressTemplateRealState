<?php 
	
	function realState_theme_support(){
		add_theme_support('title-tag');
	}

	add_action('after_setup_theme','realState_theme_support');

	function realState_enqueue_scripts(){
		wp_enqueue_style('stylesheet',get_template_directory_uri().'/style.css', array());
	}

	add_action('wp_enqueue_scripts', 'realState_enqueue_scripts');
