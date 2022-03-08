<?php get_header('front'); ?>
    
    <div class="seccion-inicio">
        <h1> <?php the_field('titulo_de_seccion'); ?> </h1>
        <p> <?php the_field('contenido_de_seccion'); ?></p>
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

    <section class="clases-inicio">
        <h1 class="h1-inicio">Nuestras Clases</h1>
        <?php gym_lista_clases(4); ?>
        <div class="btn-clases">
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('clases'))); ?>">Ver todas las clases</a>
        </div>
    </section>

    <section class="instructores-inicio">
        <h1 class="h1-instructores">Nuestros Instructores</h1>
        <ul class="listado-instructores">
                <?php 
                    //consultando los datos de post_type
                    $datos_post_type = array('post_type' => 'instructores','posts_per_page' =>30);
                    //trayendo los datos de la bd
                    $datos_instructores = new WP_Query($datos_post_type);
                    //imprimimos los datos
                    while($datos_instructores->have_posts()): $datos_instructores->the_post();
                ?>
                        <li class="instructores">
                            <?php the_post_thumbnail('box',array('class'=>'img-instructor')); ?> 
                            <h3><?php the_title(); ?></h3>
                            <?php the_content();?>
                            <!--imprimimos los campos de acf-->
                            <div class="especialidades">
                                <?php
                                    $especialidades = get_field('especialidad');
                                    foreach($especialidades as $especialidad):?>
                                        <span class="etiqueta">
                                            <?php echo esc_html($especialidad); ?>
                                        </span>
                                <?php endforeach;?>
                            </div>
                        </li>
                <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </section>
    <section class="testimoniales">
        <h1>Testimoniales</h1>
        <div class="contenedor-testimoniales">
            <ul class="listado-testimoniales">
                <?php
                    $data = array(
                        'post_type' => 'testimoniales',
                        'posts_per_page' => 10
                    );
                    $testimoniales = new WP_Query($data);
                    while($testimoniales->have_posts()): $testimoniales->the_post();
                ?>
                <li class="testimonial">
                    <blockquote> <?php the_content(); ?> </blockquote>
                    <div class="testimonial-footer">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <p> <?php the_title(); ?> </p>
                    </div>
                </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
<?php get_footer();
