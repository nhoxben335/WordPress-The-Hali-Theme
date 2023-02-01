<?php  get_header(); ?>

<?php
if ( have_posts() ) :  
    while ( have_posts() ) : the_post(); 
    ?> 
        <h2><?php the_title() ?></h2> 
        <?php the_content(); ?> 
    <?php 
        endwhile; 
    else : 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
?>

<!-- <p><i>This in my Index.php page.</i></p> -->

<?php get_footer(); ?>