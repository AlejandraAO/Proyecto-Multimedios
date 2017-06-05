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
        wp_enqueue_style('style',get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts','load_assets');

    function load_js()
    {
        wp_register_script('miscript', get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '1', true );
        wp_enqueue_script('miscript');
        //wp_enqueue_script( 'bootstrap js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js',array( 'jquery' ) );

        wp_enqueue_script( 'jquery js', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');
        wp_enqueue_script( 'agency js', get_template_directory_uri() . '/js/agency.min.js');

    }
    add_action( 'wp_enqueue_scripts', 'load_js' );
?>
    <!--
function load_js()
{
	// Register the script like this for a theme:
	//wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'bootstrap js', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.js');
    wp_enqueue_script( 'agency js', get_template_directory_uri() . '/js/agency.min.js');

}
add_action( 'wp_enqueue_scripts', 'load_jquery' );

//add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

-->
