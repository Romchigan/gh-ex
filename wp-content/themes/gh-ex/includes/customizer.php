<?php
/**
 * _tk Theme Customizer
 *
 * @package _tk
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _tk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', '_tk_customize_register' );


/*Header info*/
function header_title_customize_register ($wp_customize) {
    $wp_customize->add_section( 'header_title' , array(
        'title'      => __( 'Header title', '_tk' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'header_heading' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_heading_control', array(
        'label'      => __( 'Add your site heading', '_tk' ),
        'section'    => 'header_title',
        'settings'   => 'header_heading',
    ) ) );

}

add_action( 'customize_register', 'header_title_customize_register' );

/* Header banner */
function header_banner_customize_register ($wp_customize) {
    $wp_customize->add_section( 'header_banner' , array(
        'title'      => __( 'Header banner', '_tk' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'header_banner_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_banner_control', array(
        'label'      => __( 'Add your banner', '_tk' ),
        'section'    => 'header_banner',
        'settings'   => 'header_banner_settings',
    ) ) );

}
add_action( 'customize_register', 'header_banner_customize_register' );

/* Blog */
function blog_customize_register ($wp_customize) {
    $wp_customize->add_section( 'blog_info' , array(
        'title'      => __( 'Blog info', '_tk' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'heading_blog_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heading_blog_control', array(
        'label'      => __( 'Add your blog heading', '_tk' ),
        'section'    => 'blog_info',
        'settings'   => 'heading_blog_settings',
    ) ) );

    $wp_customize->add_setting( 'text_btn_blog_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text_btn_blog_control', array(
        'label'      => __( 'Add your btn text', '_tk' ),
        'section'    => 'blog_info',
        'settings'   => 'text_btn_blog_settings',
    ) ) );

}

add_action( 'customize_register', 'blog_customize_register' );

/* Background color site*/
function background_site_customize_register ($wp_customize) {
    $wp_customize->add_section( 'color_site' , array(
        'title'      => __( 'Color site', '_tk' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'color_site_settings' , array(
        'default'   => '#ffd500',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_site_control', array(
        'label'      => __( 'Change color site', '_tk' ),
        'section'    => 'color_site',
        'settings'   => 'color_site_settings',
    ) ) );

}

add_action( 'customize_register', 'background_site_customize_register' );

/* Footer */
function footer_info_customize_register ($wp_customize) {
    $wp_customize->add_section( 'footer_info' , array(
        'title'      => __( 'Footer info', '_tk' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'footer_ifo_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_ifo_control', array(
        'label'      => __( 'Add your footer text', '_tk' ),
        'section'    => 'footer_info',
        'settings'   => 'footer_ifo_settings',
    ) ) );



    $wp_customize->add_setting( 'sub_footer_logo_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sub_footer_logo_control', array(
        'label'      => __( 'Add your sub-footer logo', '_tk' ),
        'section'    => 'footer_info',
        'settings'   => 'sub_footer_logo_settings',
    ) ) );



    $wp_customize->add_setting( 'footer_contact_banner_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_contact_banner_control', array(
        'label'      => __( 'Add your footer contact banner', '_tk' ),
        'section'    => 'footer_info',
        'settings'   => 'footer_contact_banner_settings',
    ) ) );




    $wp_customize->add_setting( 'footer_contact_heading_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_heading_control', array(
        'label'      => __( 'Add your contact heading', '_tk' ),
        'section'    => 'footer_info',
        'settings'   => 'footer_contact_heading_settings',
    ) ) );



    $wp_customize->add_setting( 'footer_contact_info_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_info_control', array(
        'label'      => __( 'Add your contact info', '_tk' ),
        'section'    => 'footer_info',
        'settings'   => 'footer_contact_info_settings',
    ) ) );


    $wp_customize->add_setting( 'footer_contact_phone_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_phone_control', array(
        'label'      => __( 'Add your contact phone', '_tk' ),
        'section'    => 'footer_info',
        'settings'   => 'footer_contact_phone_settings',
    ) ) );


    $wp_customize->add_setting( 'footer_contact_address_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_contact_address_control', array(
        'label'      => __( 'Add your contact address', '_tk' ),
        'section'    => 'footer_info',
        'settings'   => 'footer_contact_address_settings',
    ) ) );

}
add_action( 'customize_register', 'footer_info_customize_register' );


/*Output Customize CSS*/
function blog_customize_css() { ?>
    <style type="text/css">
        .navbar-default .navbar-nav>.active>a:before {
            background-color: <?php echo get_theme_mod( 'color_site_settings' ); ?>;
        }
        .navbar-default .navbar-nav>.active>a:hover:before {
            background-color: <?php echo get_theme_mod( 'color_site_settings' ); ?>;
        }
        .navbar-default .navbar-nav>li a:hover:before {
            background-color: <?php echo get_theme_mod( 'color_site_settings' ); ?>;
        }
        .site-title-heading {
            color: <?php echo get_theme_mod( 'color_site_settings' ); ?>;
        }
    </style>
<?php }
add_action( 'wp_head', 'blog_customize_css' );
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _tk_customize_preview_js() {
	wp_enqueue_script( '_tk_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_tk_customize_preview_js' );
