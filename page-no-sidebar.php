<?php
/*
* Template Name: Plantilla (No Sidebars)
*/
    get_header();
?>



    <main class="content">
    
        <?php
            while(have_posts()): the_post();
        ?>

        <h1>
            <?php the_title(); ?>
        </h1>

        <?php
            //Si hay imagen destacada
            if(has_post_thumbnail()):
                //cargamos nuestra imagen con tamaño personalizado en nuestro function
                //insertamos tambien nuestra propia clase a la imagen
                the_post_thumbnail('blog',array('class' => 'imagen-destacada'));
            endif;
        ?>

        <p>
            <?php the_content(); ?>
        </p>

        Escrito por: <?php the_author(); ?>

        Fecha: <?php the_date(); ?>

        <?php
            endwhile;
        ?>

        <hr>
    </main>
<?php get_footer();  ?>


