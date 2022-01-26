<!--loop custom post-->
<?php
    while(have_posts()): the_post();
?>
        <h1> <?php the_title(); ?> </h1>

        <?php
            //Si hay imagen destacada
            if(has_post_thumbnail()):
                //cargamos nuestra imagen con tamaño personalizado en nuestro function
                //insertamos tambien nuestra propia clase a la imagen
                the_post_thumbnail('blog',array('class' => 'imagen-destacada'));
            endif;
        ?>

        <?php
            //Revisar si el custom post es Clase 
            if(get_post_type() == 'gymfitness_clases'){
                   //Utilizando los campos personalizados advance custom field
                    $h_inicio = get_field('hora_inicio');
                    $h_fin = get_field('hora_fin');
        ?>
                    <p class="informacion-clase"> <?php the_field('dias_clase');?> / <?php echo $h_inicio . " - " . $h_fin;  ?> </p>
        <?php  
             }

        ?>


        <div class="text-content">
            <?php the_content(); ?> 
            
        </div>
        
<?php
    endwhile;
?>


