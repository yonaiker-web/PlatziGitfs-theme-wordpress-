<?php

function init_template()
{
    //permite agregar una imagen
    add_theme_support('post-thumbnail');
    //permite agregar un titulo a la pagina usando el hook add_action
    add_theme_support( 'title-tag');

    //creamos un seccion nueva de menus 
    register_nav_menus(array('top_menu' => 'Menu Principal') );
}

//cuando alguien seleccione el theme ajecuta estas opciones
add_action('after_setup_theme','init_template');


//agregamos estas librerias para que se carguen de una como dependencias
function assets(){
    wp_enqueue_style('boostrap','https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css','','4.4.1','all' );

    wp_enqueue_style('montserrat','https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap','','1.0','all' );

    wp_enqueue_style( 'estilo', get_template_directory_uri() . '/style.css' );

    wp_enqueue_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js','','1.16.0',true );

    wp_enqueue_script('boostrap','$src:string', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js',array('jquery', 'popper'),'4.4.1', true );

    //agregamos un template manual, y le pasamos la ruta en donde va a estar
    wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js','','1.0', true );
}

add_action('wp_enqueue_scripts','assets' );

?>