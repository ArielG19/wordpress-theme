<?php while(have_posts()) : the_post(); ?>
    <li class="card-blog gradient-blog">
        <?php the_category(); ?>
        <?php the_post_thumbnail('box',array('class'=>'img-blog')); ?> 
        <div class="contenido-blog">  
                <a class="title-blog" href="<?php the_permalink(); ?>">
                     <?php the_title(); ?>
                </a>
                <!--imprimimos la fecha-->                
                <span><?php the_time(get_option('date_format')); ?></span>
                <p>Por:
                    <!--filtramos post_url de autor por el id, y mostramos el nombre-->
                    <!--get_the_author_meta contiene toda la informacion del usurio-->
                    <a href="
                        <?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <?php echo get_the_author_meta('display_name'); ?>
                    </a>   
                </p>
                            
        </div>
    </li>
<?php endwhile; ?>