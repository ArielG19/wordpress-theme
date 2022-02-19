<?php get_header('front'); ?>
    
    <div class="seccion-inicio">
        <h1> <?php the_field('titulo_de_seccion'); ?> </h1>
        <?php the_field('contenido_de_seccion'); ?>
    </div>

    <div class="seccion-areas">
        <ul class="contenedor-areas">
            <li class="area">
                <?php
                    //extraemos todos los datos de las imagenes
                    $area1 = get_field('area_1');
                    //var_dump($area1);
                    //extraemos la imagen
                    $imagen = wp_get_attachment_image_src($area1['imagen_area_1'],'mediano')[0];
                ?>
                <img src="<?php echo esc_attr($imagen); ?>" alt="" width="250px" height="250px">
                <p><?php echo esc_html($area1['texto_area_1']); ?></p>
            </li>
            <li class="area">
                <?php
                    //extraemos todos los datos de las imagenes
                    $area2 = get_field('area_1');
                    //extraemos la imagen
                    $imagen2 = wp_get_attachment_image_src($area2['imagen_area_2'],'mediano')[0];
                ?>
                <img src="<?php echo esc_attr($imagen2); ?>" alt="" width="250px" height="250px">
                <p><?php echo esc_html($area2['texto_area_2']); ?></p>
            </li>
            <li class="area">
                <?php
                    //extraemos todos los datos de las imagenes
                    $area3 = get_field('area_1');
                    //extraemos la imagen
                    $imagen3 = wp_get_attachment_image_src($area3['imagen_area_3'],'mediano')[0];
                ?>
                <img src="<?php echo esc_attr($imagen3); ?>" alt="" width="250px" height="250px">
                <p><?php echo esc_html($area3['texto_area_1']); ?></p>
            </li>
        </ul>
    </div>
<?php get_footer();
