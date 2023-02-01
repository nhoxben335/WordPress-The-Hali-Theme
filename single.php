<?php 
    get_header();
    if(have_posts())
    {
        while(have_posts()) : the_post();
?>
            <h1 class='postTitle'><?php the_title() ?></h1>
            <p><?php the_category() ?></p>
            <p><?php the_time() ?></p>
            <p>Author: <?php the_author() ?></p>
            <p class='postContent'>content: <?php the_content() ?></p>
<?php 
        endwhile;
    }
    else
    {
        _e("No posts matched your criteria.", "textdomain");
    }
    get_footer();
?>