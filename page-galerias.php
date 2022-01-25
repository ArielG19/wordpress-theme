<?php
    /*
    * Template Name: Template para Galeria
    */
     get_header();  ?>


    <main class="contenedor no-sidebar">
        <div class="contenido-principal">
            <!--Cargando loop/contenido de pagina-->
            <?php while(have_posts()): the_post(); ?>
                <h1> <?php the_title(); ?> </h1>

                <?php
                    // the_content(); 
                    //creando galeria personalizada, para ello obtenemos los id de la galeria
                    $galeria = get_post_gallery( get_the_ID(), false);

                    //almacenamos los id
                    $galeria_img_id = explode(',', $galeria['ids']);
                    //echo "<pre>";
                    //var_dump($galeria);
                    //echo "</pre>";

                ?>
                <ul class="galeria-imagenes">
                    
                    <?php
                     $i = 1;
                     foreach($galeria_img_id as $id): 

                        $size = ($i == 4 || $i == 6 ) ? 'portrait' : 'square';
                        $img_galeria = wp_get_attachment_image_src($id, 'medium') [0]; 
                        $img_grande = wp_get_attachment_image_src($id, 'medium') [0]; 
                        
                    //echo "<pre>";
                    //var_dump($img_galeria);
                    //echo "</pre>";
                    ?>
                    <!--Agregamos lightbox a la galeria-->
                    <li>
                        <a href="<?php echo $img_grande; ?>" data-lightbox="galeria"><img src="<?php echo $img_galeria; ?>" style="width:100%; height:auto" alt="imagen"></a>
                        
                    </li>

                    <?php endforeach; ?>
                </ul> 
                
            <?php endwhile; ?>
        </div>
        
        <hr>
    </main>
<?php get_footer();  ?>


