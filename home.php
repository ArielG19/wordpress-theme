<?php get_header(); ?>
<main class="contenedor no-sidebar">
        <div class="contenido-principal">
            <ul class="lista-blog">
                <!--Cargando loop/contenido de blog-->
                <?php get_template_part('template-parts/loop', 'blog') ?>
            </ul>
        </div>
        
        <hr>
    </main>
<?php get_footer(); ?>
