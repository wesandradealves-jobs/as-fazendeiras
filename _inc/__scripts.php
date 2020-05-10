<?php

	function regScripts() {
        wp_dequeue_script('jquery');
        wp_deregister_script('jquery');
        wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css', array(), '', 'all');
	}