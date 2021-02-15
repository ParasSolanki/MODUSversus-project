<?php
    function custom_theme_assets(){

        // style.css file added...
        wp_enqueue_style("style", get_stylesheet_uri() ); 

        // Bootstrap css file added...
        wp_enqueue_style("bootstrap", 
                        get_template_directory_uri()."/browser components/bootstrap/css/bootstrap.css" );
        
        // Fontawesome css icons file added..
        wp_enqueue_style("all", get_template_directory_uri()."/browser components/fontawesome/css/all.css" );
        
        // app.js file added...
        wp_register_script('app', 
                        get_template_directory_uri() .'/js/app.js',   //
                        array (),                  //depends on these, however, they are registered by core already, so no need to enqueue them.
                        false, 
                        true);
        wp_enqueue_script('app');

        // water_carousel.js file added...
        wp_register_script( 'water_carousel', 
                            get_template_directory_uri(  ).'/js/water_carousel.js', 
                            array(), 
                            false, 
                            true);
        wp_enqueue_script('water_carousel');

        // Bootstrap js file added...
        wp_register_script( 'bootstrapJs', 
                            get_template_directory_uri().'/browser components/bootstrap/js/bootstrap.min.js', 
                            array(), 
                            false, 
                            true );
        wp_enqueue_script( 'bootstrapJs' );
        

        // Jquery file added...
        wp_register_script( 'jquery', 
                            get_template_directory_uri(  ).'/browser components/jquery/jquery.min.js', 
                            array(), 
                            false, 
                            true);
        wp_enqueue_script('jquery');

    }
    add_action("wp_enqueue_scripts", "custom_theme_assets");

    function wpb_custom_new_menu() {
        register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
    }
    add_action( 'init', 'wpb_custom_new_menu' );


	/*
	* Creating a function to create our CPT
	*/
	function custom_post_type() {
	
		// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Portfolios', 'Post Type General Name', 'twentytwenty' ),
			'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'twentytwenty' ),
			'menu_name'           => __( 'Portfolios', 'twentytwenty' ),
			'parent_item_colon'   => __( 'Parent Portfolio', 'twentytwenty' ),
			'all_items'           => __( 'All Portfolios', 'twentytwenty' ),
			'view_item'           => __( 'View Portfolio', 'twentytwenty' ),
			'add_new_item'        => __( 'Add New Portfolio', 'twentytwenty' ),
			'add_new'             => __( 'Add New', 'twentytwenty' ),
			'edit_item'           => __( 'Edit Portfolio', 'twentytwenty' ),
			'update_item'         => __( 'Update Portfolio', 'twentytwenty' ),
			'search_items'        => __( 'Search Portfolio', 'twentytwenty' ),
			'not_found'           => __( 'Not Found', 'twentytwenty' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
		);
		
		// Set other options for Custom Post Type
		
		$args = array(
			'label'               => __( 'portfolio', 'twentytwenty' ),
			'description'         => __( 'Portfolio news and reviews', 'twentytwenty' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	
		);
		
		// Registering your Custom Post Type
		register_post_type( 'portfolio', $args );
	
	}
 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
 
	add_action( 'init', 'custom_post_type', 0 );


    add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );
	
	function create_topics_nonhierarchical_taxonomy() {
	
	// Labels part for the GUI
	
	$labels = array(
		'name' => _x( 'Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Categories' ),
		'popular_items' => __( 'Popular Categories' ),
		'all_items' => __( 'All Categories' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Category' ), 
		'update_item' => __( 'Update Category' ),
		'add_new_item' => __( 'Add New Category' ),
		'new_item_name' => __( 'New Category Name' ),
		'separate_items_with_commas' => __( 'Separate categories with commas' ),
		'add_or_remove_items' => __( 'Add or remove categories' ),
		'choose_from_most_used' => __( 'Choose from the most used categories' ),
		'menu_name' => __( 'Categories' ),
	); 
	
	// Now register the non-hierarchical taxonomy like tag
	
	register_taxonomy('categories','portfolio',array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'topic' ),
	));
	}
?>