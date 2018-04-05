<?php

function super_tema_encabezado(){
    wp_enqueue_style('customstyle',get_template_directory_uri() . '/css/supertema.css',array(),'1.0.0', 'all');
    wp_enqueue_script('customjs',get_template_directory_uri() . '/js/supertema.js' , array(), '1.0.0',true);
}

add_action('wp_enqueue_scripts', 'super_tema_encabezado');

/*para agregar la opción de menus*/
function super_tema_setup(){
    add_theme_support( 'menus' );

    register_nav_menu( 'primary', 'Primary header navigation' );
    register_nav_menu( 'secundary', 'Navegación del Pie' );
}

add_action( 'init', 'super_tema_setup' );
