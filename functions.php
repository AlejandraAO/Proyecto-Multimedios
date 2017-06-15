


<?php
    function load_assets(){
       
        wp_enqueue_style('boostrap-min', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri().'/vendor/font-awesome/css/font-awesome.min.css');
        wp_enqueue_style('agency', get_template_directory_uri().'/css/agency.css');
        wp_enqueue_style('style',get_stylesheet_uri());
        
        wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.min.js');
        wp_enqueue_script('bootstrap_js', get_template_directory_uri(). '/js/bootstrap.min.js');
        wp_enqueue_script('easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');
        //wp_enqueue_script( 'bootstrap js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js',array( 'jquery' ) );

        wp_enqueue_script( 'agency_js', get_template_directory_uri() . '/js/agency.min.js');
        wp_enqueue_script( 'ajax_googleapis', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
        wp_enqueue_script( 'maps_google', 'http://maps.google.com/maps/api/js?sensor=true');
        wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/js/gmaps.js');
        
        wp_register_script( 'gmap', get_template_directory_uri() . '/js/gmap.js');

        
        $translation_array = array(
            'directorio' => get_stylesheet_directory_uri()   
            );
    
        //el wp_localize_script funciona para enviar datos desde el archivo functions.php a un archivo javascritp o jquery
        //necesario para enviar la ruta del get_template_directory_uri() al gmap.js, esto para llamar una imagen 
        //utilizada como marcador que indica la pocision de la empresa.
        wp_localize_script( 'gmap', 'ruta', $translation_array );

        wp_enqueue_script( 'gmap', get_template_directory_uri() . '/js/gmap.js');
        
        
        
    }
    add_action('wp_enqueue_scripts','load_assets');

    
?>
 
