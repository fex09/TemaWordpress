<?php get_header();?>
<h1>Este es el index.php de mi tema.</h1>

    <?php 
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>

           <h3><?php the_title(); ?></h3> 
           <small>Publicado el: <?php the_time( 'F j, y')?>, la categoria: <?php the_category( ) ?> </small>

            <p><?php the_content(); ?></p>

            <hr>
    <?php endwhile;
    endif;
    ?>



<?php get_footer();?>