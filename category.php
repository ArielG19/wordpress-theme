<?php get_header(); ?>
<main class="contenedor no-sidebar">
        <div class="contenido-principal">
            <?php 
                //obtenemos la categoria actual
                $categoria_actual = get_queried_object(); 
                //var_dump($categoria_actual);
            ?>
            <h2>Categoria actual: <?php echo $categoria_actual->name;?></h2>
            
            <ul class="lista-blog">
                <!--Cargando loop/contenido de blog-->
                <?php get_template_part('template-parts/loop', 'blog') ?>
            </ul>
        </div>
        
        <hr>
    </main>
<?php get_footer(); ?>
