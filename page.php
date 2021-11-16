<?php get_header();  ?>


<div class="content">
    
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
                the_post_thumbnail('blog');
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
</div>
<?php get_footer();  ?>


