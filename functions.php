<?php

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'footer-left',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

register_sidebar(array('name'=>'footer-right',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

add_filter('show_admin_bar', '__return_false');



add_action( 'init', 'register_cpt_testimonial' );

function register_cpt_testimonial() {

    $labels = array( 
        'name' => _x( 'Testimonials', 'testimonial' ),
        'singular_name' => _x( 'Testimonial', 'testimonial' ),
        'add_new' => _x( 'Add New', 'testimonial' ),
        'add_new_item' => _x( 'Add New Testimonial', 'testimonial' ),
        'edit_item' => _x( 'Edit Testimonial', 'testimonial' ),
        'new_item' => _x( 'New Testimonial', 'testimonial' ),
        'view_item' => _x( 'View Testimonial', 'testimonial' ),
        'search_items' => _x( 'Search Testimonials', 'testimonial' ),
        'not_found' => _x( 'No testimonials found', 'testimonial' ),
        'not_found_in_trash' => _x( 'No testimonials found in Trash', 'testimonial' ),
        'parent_item_colon' => _x( 'Parent Testimonial:', 'testimonial' ),
        'menu_name' => _x( 'Testimonials', 'testimonial' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'testimonial', $args );
}

function display_cpt_testimonial() {
	$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		echo '<div class="col-xs-12 col-md-6 col-lg-6">';
			echo '<blockquote class="clearfix">';
				 the_content();
			echo '<cite>'; the_title(); echo'</cite></blockquote>';
		echo '</div>';
	endwhile;
}
add_shortcode('testimonials', 'display_cpt_testimonial');

?>