<?php get_header();  ?>


    <main class="contenedor-con-sidebar">
        <div class="contenido-principal">
            <!--Cargando loop/contenido de pagina nosotro/blog-->
            <?php get_template_part('template-parts/loop-page'); ?>
        </div>
            <!--Cargando sidebar-->
            <?php get_sidebar(); ?>
        
        <hr>
    </main>
<?php get_footer();  ?>


