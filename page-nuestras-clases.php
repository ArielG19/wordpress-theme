<?php
/*
 * Template especifico, solo funciona si es creado "page + slug.php"
 */
get_header();  ?>
    <main class="contenedor no-sidebar">
        <div class="contenido-principal">
            <!--Cargando loop/contenido de pagina-->
          <?php get_template_part('template-parts/loop-page'); ?>
          <?php gym_lista_clases(); ?>

        </div>
        
        <hr>
    </main>
<?php get_footer();  ?>


