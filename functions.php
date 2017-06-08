<!--

function load_assets(){
    wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','load_assets');

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
-->


<?php
    function load_assets(){
       
        wp_enqueue_style('boostrap-min', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css');
        wp_enqueue_style('agency', get_template_directory_uri().'/vendor/agency/agency.css');
        wp_enqueue_style('style',get_stylesheet_uri());
        
        wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.min.js');
        wp_enqueue_script('bootstrap_js', get_template_directory_uri(). '/js/bootstrap.min.js');
        wp_enqueue_script('easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');
        //wp_enqueue_script( 'bootstrap js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js',array( 'jquery' ) );

        wp_enqueue_script( 'agency_js', get_template_directory_uri() . '/js/agency.min.js');
        
    }
    add_action('wp_enqueue_scripts','load_assets');

?>
 
