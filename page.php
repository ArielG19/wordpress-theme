<?php get_header();  ?>
<h1>Hola desde nosotros</h1>
<?php
while(have_posts()): the_post();
?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
Escrito por: <?php the_author(); ?>
Fecha: <?php the_date(); ?>

<?php
 endwhile;
?>

<?php get_footer();  ?>