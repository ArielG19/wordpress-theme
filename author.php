<?php get_header(); ?>
<main class="contenedor no-sidebar">
        <div class="contenido-principal">
            <?php 
                //obtenemos la categoria actual
                $author_actual = get_queried_object(); 
            ?>
            <h2>Autor: <?php echo $author_actual->data->display_name;?></h2>
            
            <ul class="lista-blog">
                <!--Cargando loop/contenido de blog-->
                <?php get_template_part('template-parts/loop', 'blog') ?>
            </ul>
        </div>
        
        <hr>
    </main>
<?php get_footer(); ?>
