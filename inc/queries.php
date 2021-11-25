<?php
    function gym_lista_clases(){ ?> <!--Cerramos etiqueta para escribir html-->
        <ul class="lista-clases">
            
            <?php 
                $args = array(
                        //Consultamos los post(Clase) pero de nuestro plugin personalizado.
                    'post_type' =>'gymfitness_clases',
                    'post_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC'

                );

                //Creamos variable con la informacion de nuestra BD
                $clases = new WP_Query($args);
                while($clases->have_posts()): $clases->the_post();?>

                <li class="card gradient">
                            <?php the_post_thumbnail('box',array('class'=>'img-clase')); ?> 
                    <div class="contenido">
                            <a href="<?php the_permalink(); ?>"> <h4><?php the_title(); ?></h4> </a>
                        <?php
                            //Utilizando los campos personalizados advance custom field
                            // prueba almacenandolos en una variable
                            $h_inicio = get_field('hora_inicio');
                            $h_fin = get_field('hora_fin');
                        ?>
                             <p> <?php the_field('dias_clase');?></p>
                             <p> <?php echo $h_inicio . " - " . $h_fin;  ?> </p>
                        
                    </div>
                </li>

              

               <?php 
                    endwhile; 
                    wp_reset_postdata(); //finaliza el uso de datos
                ?>
        </ul>

        <?php
    }
?>