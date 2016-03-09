<?php

class wp_ng_theme {
	
	function enqueue_scripts() {
		
		wp_enqueue_style( 'bootstrapCSS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '1.0', 'all' );
		wp_enqueue_script( 'angular-core', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js', array( 'jquery' ), '1.0', false );
		wp_enqueue_script( 'angular-resource', '//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-resource.js', array('angular-core'), '1.0', false );
		wp_enqueue_script( 'ui-router', 'https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.min.js', array( 'angular-core' ), '1.0', false );
		wp_enqueue_script( 'config', get_template_directory_uri() . '/assets/js/config.js', array(), '1.0', false );
		wp_enqueue_script( 'application', get_template_directory_uri() . '/assets/js/application.js', array(), '1.0', false );
		wp_enqueue_script( 'core-module', get_template_directory_uri() . '/assets/js/modules/core/core.client.module.js', array(), '1.0', false );
		wp_enqueue_script( 'core-routes', get_template_directory_uri() . '/assets/js/modules/core/config/core.client.routes.js', array(), '1.0', false );
		wp_enqueue_script( 'core-ctrl-p', get_template_directory_uri() . '/assets/js/modules/core/controllers/posts.client.controller.js', array(), '1.0', false );
		wp_enqueue_script( 'core-ctrl-s', get_template_directory_uri() . '/assets/js/modules/core/controllers/post.client.controller.js', array(), '1.0', false );
		wp_enqueue_script( 'core-serv', get_template_directory_uri() . '/assets/js/modules/core/services/agencies.client.service.js', array(), '1.0', false );
		wp_enqueue_script( 'core-filt', get_template_directory_uri() . '/assets/js/modules/core/services/filter.client.service.js', array(), '1.0', false );
		wp_localize_script( 'core-routes', 'appInfo',
			array(
				
				'api_url'			 => rest_get_url_prefix() . '/wp/v2/',
				'template_directory' => get_template_directory_uri() . '/',
				'nonce'				 => wp_create_nonce( 'wp_rest' ),
				'is_admin'			 => current_user_can('administrator')
				
			)
		);
		
	}

}

$ngTheme = new wp_ng_theme();
add_action( 'wp_enqueue_scripts', array( $ngTheme, 'enqueue_scripts' ) );

?>