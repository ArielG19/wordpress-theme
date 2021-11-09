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



?>