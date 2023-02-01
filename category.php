<?php 
    get_header();
    echo "<h1>".the_category()."</h1>";
    if(have_posts())
    {
        while(have_posts()) : the_post();
?>
            <a href='<?php the_permalink() ?>'><h1 class='postTitle'><?php the_title() ?></h1></a>
            <p class='postContent'>content: <?php the_excerpt() ?></p>
<?php 
        endwhile;
    }
    else
    {
        _e("No posts matched your criteria.", "textdomain");
    }
    get_footer();
?>