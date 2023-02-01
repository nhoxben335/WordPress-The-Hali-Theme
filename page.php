<?php  get_header(); ?>

<p></p>
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

<p><i>This in my Page.php page.</i></p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra vitae libero at tempor. Aliquam nec tempus eros.

Donec laoreet tempor lacus, ac semper enim congue nec. Phasellus at convallis diam. Phasellus luctus nisl quam, at laoreet

orci dictum finibus. Fusce pulvinar leo quis nunc suscipit, ac elementum mauris porttitor. Suspendisse dapibus metus eget 

placerat placerat. Aenean ac velit congue, commodo ligula vulputate, euismod dolor. Sed sit amet est non lectus imperdiet

pharetra. Praesent a iaculis tortor. Praesent vel sollicitudin tortor. Etiam dignissim cursus tempor. Vestibulum sodales sapien ac est ullamcorper, a aliquet tellus pellentesque. Pellentesque facilisis nisl eu lacus mollis aliquam.

Nulla ut condimentum ligula. Donec ultricies arcu ac ex iaculis, in mattis nunc ultrices. Nam condimentum elit sed massa 

sollicitudin, a pulvinar mi sollicitudin. In a ullamcorper nulla. Cras suscipit eget nulla at ultrices. Curabitur sed mi 

suscipit, volutpat nisi id, imperdiet arcu. Nullam maximus viverra venenatis. Sed ornare quam mi, ac feugiat nisi condimentum in. 

Aenean pellentesque dui tincidunt ante posuere, et tempus purus mollis. Nulla id bibendum lacus, sed tempus purus. Vestibulum

condimentum eu libero vel porta. Proin nec semper lorem, sed euismod urna. Proin tempor quam rutrum, elementum ante ut, mattis

purus. Integer dui tortor, iaculis eu arcu a, hendrerit fringilla eros. Fusce hendrerit quam sed augue molestie, at convallis

nisl vestibulum. Curabitur porta ante risus, at molestie ipsum suscipit non.
<?php get_footer(); ?>