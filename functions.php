<?php
/**
 * @package WordPress
 * @subpackage Pixelism Paranoia_Theme
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
						'categories-submenu' => __( 'Categories Sub-Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
	
function pixelismparanoia_customize_register( $wp_customize ) {
	// add "Content Options" section
	$wp_customize->add_section( 'pixelismparanoia_content_options_section' , array(
		'title'      => __( 'Pixelism Paranoia Options', 'pixelismparanoia' ),
		'priority'   => 1,
	) );
	
	// add setting for page comment toggle checkbox
	$wp_customize->add_setting( 'pixelismparanoia_page_comment_toggle', array( 
		'default' => 1 
	) );
	
	// add control for page comment toggle checkbox
	$wp_customize->add_control( 'pixelismparanoia_page_comment_toggle', array(
		'label'     => __( 'Show comments on pages?', 'pixelismparanoia' ),
		'section'   => 'pixelismparanoia_content_options_section',
		'priority'  => 10,
		'type'      => 'checkbox'
	) );

//Change logo
$wp_customize->add_setting(
		'pixelismparanoia_options[upload_image_logo]',
		array(
			'type'    => 'option',
			'default'=>$wl_theme_options['upload_image_logo'],
			'sanitize_callback'=>'esc_url_raw',
			'capability'        => 'edit_theme_options',
		)
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pixelismparanoia_upload_image_logo', array(
			'label'        => __( 'Pixelism Paranoia Logo', 'pixelismparanoia' ),
			'section'    => 'pixelismparanoia_content_options_section',
			'settings'   => 'pixelismparanoia_options[upload_image_logo]',
		) ) );
	
}
add_action( 'customize_register', 'pixelismparanoia_customize_register' );

function pixelismparanoia_sanitize_integer( $input ) {
    return (int)($input);
}

function pixelismparanoia_customize_css()
{
    ?>
									<style type="text/css">
h1 {
color:<?php echo get_theme_mod('header_color', '#000000');
?>;
}
</style>
									<?php
}
add_action( 'wp_head', 'pixelismparanoia_customize_css');

//Change header image background
$args = array(
	'default-image' => get_template_directory_uri() . '/images/bgd-header.png',
	'uploads'       => true,
);
add_theme_support( 'custom-header', array(
		'header-text' => true
	) );

//Change page background
$args = array(
	'default-color' => 'ffffff',
);
add_theme_support( 'custom-background', $args );

//Sane Defaults
	function pixelismparanoia_default_settings()
	{
		$wl_theme_options=array(
				//Logo and Fevicon header			
				'upload_image_logo'=>'',
				
			);
			return apply_filters( 'pixelismparanoia_options', $wl_theme_options );
	}
	
//Function To get the Options-DATA
	function pixelismparanoia_get_options() {
    // Options API
    return wp_parse_args( 
        get_option( 'pixelismparanoia_options', array() ), 
        pixelismparanoia_default_settings() 
    );
	}
	
/**
 * Widgetizing
 * Register our sidebars and widgetized areas.
 *
 */
function nsomnium_widgets_init() {
	
	register_sidebar( array(
			'name'          => 'Sidebar Links',
			'id'            => 'sidebar_links',
		) );
}
add_action( 'widgets_init', 'nsomnium_widgets_init' );	
	
	add_theme_support( 'post-thumbnails' ); 
?>
