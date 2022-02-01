<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    
</head>
<body>    
    <header class="header-front">
        <!--Barra de navegacion-->
        <nav>
            <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/coding.png" alt="">
            </div>
            <?php
                            //imprimiendo menu, pasando menu que vamos a usar, y las clases css
                            $args = array(
                                    'theme_location' => 'menu-principal',
                                    'container' => 'nav',
                                    'container_class' => 'menu-principal'
                            ); 
                            
                            wp_nav_menu($args); 
            ?> 
        
            </nav>
        <!--Barra de navegacion-->
                <!--banner y texto-->
                <div class="banner">
                <h1><?php the_field('encabezado_hero'); ?></h1>
                <p><?php the_field('contenido_hero');?></p>
            </div>
            <!--banner y texto-->
    </header>
     