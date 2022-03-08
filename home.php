<?php get_header(); ?>
<main class="contenedor no-sidebar">
        <div class="contenido-principal">
        <div>
                <h1 id="resultado">prueba</h1>
                <select name="categorias de blog " id="categoria-blog">
                    <option value="">Selecciona una categoria</option>
                    <?php 
                        //si esta vacio no nos devuelve nada(estas son la taxonomias default(category))
                        $terminos = get_terms('category',array('hide_empty' => true)); 
                        //var_dump($terminos);
                    ?>
                    <?php 
                        foreach($terminos as $termino){
                            echo '<option value="'.$termino->slug.'">'.$termino->name.'</option>';
                        } 
                    ?>
                </select>
            </div>
            <div id="resultado-posts"></div>
            <ul class="lista-blog">
        
                <!--Cargando loop/contenido de blog-->
                <?php get_template_part('template-parts/loop', 'blog') ?>
            </ul>
        </div>
        
        <hr>
    </main>
<?php get_footer(); ?>
