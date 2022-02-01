<?php get_header('front'); ?>
    
    <div class="seccion-inicio">
        <h1> <?php the_field('titulo_de_seccion'); ?> </h1>
        <?php the_field('contenido_de_seccion'); ?>
    </div>
<?php get_footer();
