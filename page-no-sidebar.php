<?php
    /*
    * Template Name: Contenido Centrado (No Sidebar)
    */
     get_header();  ?>


    <main class="contenedor no-sidebar">
        <div class="contenido-principal">
            <!--Cargando loop/contenido de pagina-->
          <?php get_template_part('template-parts/loop-page'); ?>
        </div>
        
        <hr>
    </main>
<?php get_footer();  ?>


