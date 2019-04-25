<?php


function register_my_menu() {

  register_nav_menu('header-menu',__( 'Header Menu' ));

   register_nav_menu('footer-menu',__( 'Footer Menu' ));

}
add_action( 'init', 'register_my_menu' );



add_theme_support( 'post-thumbnails' ); 
add_image_size( 'event_gallery_img', 270, 203 );
add_image_size( 'team_image', 245, 245 );
add_image_size( 'homepagepost-size', 430, 590, TRUE  ); 
add_image_size( 'blog_img', 219, 152 );
add_image_size( 'singleblog_img', 753, 520, TRUE  );
add_image_size( 'homepage_img', 118, 82, TRUE  );
add_image_size( 'sidebar_img', 100, 70, TRUE  );
add_image_size( 'service_cat_image', 255, 232, TRUE  );
add_image_size( 'project_cat_image', 380, 347, TRUE  );

// Our custom post type function
function testimonial_posttype() {
 
    register_post_type( 'testimonial',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonial' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonial'),
			'supports' => array( 'title','thumbnail','editor' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'testimonial_posttype' );






// Our custom post type function
function eventvideo_posttype() {
 
    register_post_type( 'videogallery',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Video Gallery' ),
                'singular_name' => __( 'Video Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'video-gallery'),
			'supports' => array( 'title','thumbnail','editor' )
        )
    );
	
 
}
// Hooking up our function to theme setup
add_action( 'init', 'eventvideo_posttype' );





// Our custom post type function
function slider_posttype() {
 
    register_post_type( 'slider',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'slider'),
			'supports' => array( 'title','thumbnail','editor' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'slider_posttype' );


// Our custom post type function
function team_posttype() {
 
    register_post_type( 'team',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
			'supports' => array( 'title','thumbnail','editor' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'team_posttype' );



// Our custom post type function
function supplier_posttype() {
 
    register_post_type( 'supplier',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Supplier' ),
                'singular_name' => __( 'Supplier' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'supplier'),
			'supports' => array( 'title','thumbnail','editor' )
        )
    );
	
	register_taxonomy('supplier_category',array('supplier'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'supplier_category' ),
	'supports' => array( 'title','thumbnail','editor' )
  ));
	
	
}
// Hooking up our function to theme setup
add_action( 'init', 'supplier_posttype' );



// Our custom post type function
function faq_posttype() {
 
    register_post_type( 'faq',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Faq' ),
                'singular_name' => __( 'Faq' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'faq'),
			'supports' => array( 'title','thumbnail','editor' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'faq_posttype' );








// Our custom post type function
function services_posttype() {
 
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Services' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
			'supports' => array( 'title','thumbnail' )
        )
    );
	
	register_taxonomy('services_category',array('services'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'services_category' ),
	'supports' => array( 'title','thumbnail','editor' )
  ));
}
// Hooking up our function to theme setup
add_action( 'init', 'services_posttype' );




function hs_image_editor_default_to_gd( $editors ) {
$gd_editor = 'WP_Image_Editor_GD';
$editors = array_diff( $editors, array( $gd_editor ) );
array_unshift( $editors, $gd_editor );
return $editors;
}
add_filter( 'wp_image_editors', 'hs_image_editor_default_to_gd' );






function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right sidebar Blog',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );




function footer_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Menu 1',
		'id'            => 'footer1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'footer_widgets_init' );



function footermenu_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Menu 2',
		'id'            => 'footer2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'footermenu_widgets_init' );



add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
	add_dashboard_page('Payment Details', 'Payment Details', 'read', 'paymentpage', 'paymentpage_function');
}

function paymentpage_function()
{
	global $wpdb;
$results = $wpdb->get_results( "SELECT pay.txnid, pay.payment_amount, pay.createdtime,u.user_email FROM payments as pay INNER JOIN wp_users as u ON u.ID=pay.userid"); 
if(!empty($results))                        
{  
     echo "<h2>Payment Details</h2>";
     echo "<table width='100%' border='1'>";
     echo "<tbody><tr>	 <th>User Email</th><th>Transaction Id</th><th>Amonut</th><th>Date</th></tr>";
    foreach($results as $row){   
                
    echo "<tr><td align='center'>" . $row->user_email . "</td><td align='center'>" . $row->txnid . "</td><td align='center'>" . $row->payment_amount . "</td><td align='center'>" . $row->createdtime . "</td></tr>";
        }
    echo "</tbody>";
    echo "</table>"; 

}


}










?>