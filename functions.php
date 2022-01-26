<?php 

//----------------- Consultas reutilizables -----------------------------------------------
require get_template_directory() . '/inc/queries.php';
//-----------------Funcion cuando el tema esta activado------------------------------------

function sport_menu_setup(){
    //-----Funcion para titulo/ayuda a seo------
    add_theme_support('title-tag');
    //-----Funcion para titulo/ayuda a seo------
    
    //habilitar imagen destacada
    add_theme_support('post-thumbnails');
    //personalizando el tamaño de subida de iamgenes
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('box-clase', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}

add_action( 'after_setup_theme', 'sport_menu_setup' );



//--------------Funcion para el menu---------------------------------------------------------
//creamos nuestra funcion personalizada para nuestro menu
function sport_menu(){
    //registramos nuestro menu
    register_nav_menus(array(
        'menu-principal' => __('Menu principal sport', 'my sport training')
    ));

}

//Hacemos el llamado a nuestra funcion
//el primer parametro 'init' es para que se inicie cada vez que wordpress se inicie
add_action('init','sport_menu');
//add_action( 'after_setup_theme', 'sport_menu' );






//----------script y style (mediante esta funcion cargamos estilos)---------------------------

function sport_scripts_styles(){

    //agregando más archivos de estilo
    wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css',array(),'8.0.1');

    //Cargando estilo unicamente a una pagina por su slug
    if(is_page('galeria')) :
        wp_enqueue_style('lightboxCSS',get_template_directory_uri().'/css/lightbox.min.css',array(),'2.11.2');
    endif;

    //cargando estilo cdn
    wp_enqueue_style('GoogleFont','https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap',array(),'1.0.1');
    wp_enqueue_style('Fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array(),'1.0.1');
    

    //hoja de estilos principal
    // Handle para el nombre, src para la ruta, deps para dependencia, version, media
    //primero va a cargar las dependencias, en este caso normalize, y despues nuestros estilos.
    wp_enqueue_style('style',get_stylesheet_uri(),array('normalize','GoogleFont'),'1.0.0');

    if(is_page('galeria')) :
        wp_enqueue_script('lightboxJS',get_template_directory_uri().'/js/lightbox.min.js',array('jquery'),'2.11.2',true);
    endif;
    wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js',array('jquery'),'3.3.2',true);
    

    
}
add_action('wp_enqueue_scripts','sport_scripts_styles');

//------------------ Zona de widgets -----------------------

function gymfitness_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar Blog',
        'id' => 'sidebar_blog',
        'before_widget' => '<div class="widget-blog"> ', //clase de nuestro widget
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4'
    ));
    register_sidebar(array(
        'name' => 'Sidebar personalizado(Clases)',
        'id' => 'sidebar_clase',
        'before_widget' => '<div class="widget-personalizado"> ', //clase de nuestro widget
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
    register_sidebar(array(
        'name' => 'Footer Info 1',
        'id' => 'footer_info_1',
        'before_widget' => '<div class="widget"> ', //clase de nuestro widget
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4'
    ));
    register_sidebar(array(
        'name' => 'Footer Info 2',
        'id' => 'footer_info_2',
        'before_widget' => '<div class="widget"> ', //clase de nuestro widget
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4'
    ));
    register_sidebar(array(
        'name' => 'Footer Info 3',
        'id' => 'footer_info_3',
        'before_widget' => '<div class="widget"> ', //clase de nuestro widget
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4'
    ));
}
add_action('widgets_init', 'gymfitness_widgets');

?>