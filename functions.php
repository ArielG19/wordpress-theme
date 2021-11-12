<?php 

//creamos nuestra funcion personalizada para nuestro menu
function sport_menu(){

    //registramos nuestro menu
    register_nav_menus(array(
        'menu-principal' => __('Menu principal sport', 'my sport training')
    ));

}

//Hacemos el llamado a nuestra funcion
//el primer parametro 'init' es para que se inicie cada vez que wordpress se inicie
//add_action('init','sport_menu');
add_action( 'after_setup_theme', 'sport_menu' );

//script y style (mediante esta funcion cargamos estilos)
function sport_scripts_styles(){
    //agregando más archivos de estilo
    wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css',array(),'8.0.1');

    //cargando estilo cdn
    wp_enqueue_style('GoogleFont','https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap',array(),'1.0.1');
    wp_enqueue_style('Fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array(),'1.0.1');
    

    //hoja de estilos principal
    // Handle para el nombre, src para la ruta, deps para dependencia, version, media
    //primero va a cargar las dependencias, en este caso normalize, y despues nuestros estilos.
    wp_enqueue_style('style',get_stylesheet_uri(),array('normalize','GoogleFont'),'1.0.0');
    wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js',array('jquery'),'3.3.2',true);
    

    
}
add_action('wp_enqueue_scripts','sport_scripts_styles');


?>