<?php
    get_header();

    $featured_posts = get_posts(array(
        'numberposts' => 1,
        'post_status' => 'publish',
        'tag' => 'Featured'
    ));
?>
<div class="container">
    <div class="row">
        <?php foreach($featured_posts as $featured_post)
        {
            echo "<div class='col-6'>"
                ."<a id='featuredPostImage' href='".get_permalink($featured_post)."'>"
                ."<img class='img-fluid' src='".get_the_post_thumbnail_url($featured_post)."' alt='post'></a>"
            ."</div>";
            echo "<div class='col-6'>"
                ."<h2><a id='featuredPostTitle' href='".get_permalink($featured_post)."'>".$featured_post->post_title."</a></h2><br>"
                .$featured_post->post_date."<br>"
                .get_the_excerpt($featured_post)
            ."</div>";
        } ?>
    </div>
</div>
<div class="container">
    <div class="row">
    <?php
        $categories = get_categories();
        foreach($categories as $category)
        {
            $current_category_posts = get_posts(array(
                "numberposts" => 3,
                "post_status" => "publish",
                "category" => $category->term_id,
                "orderby" => "date",
                "order" => "desc"
            ));

            echo "<div class='col-3'>"
            ."<h3><a id='categoryTitle' href='".get_category_link($category)."'>".$category->name."</a></h3>";
            
            for($i = 0; $i < count($current_category_posts); $i++)
            {
                if ($i == 0)
                {
                    echo "<a href='".get_permalink($current_category_posts[$i])."'><img class= 'img-fluid' src='".get_the_post_thumbnail_url($current_category_posts[$i])."' alt='post'></a>";
                    echo '<h5><a href="'.get_permalink($current_category_posts[$i]).'">'.$current_category_posts[$i]->post_title.'</a></h5><br>';
                }
                else 
                {
                    echo '<a href="'.get_permalink($current_category_posts[$i]).'">'.$current_category_posts[$i]->post_title.'</a><br>';
                }
            }

            echo "</div>";
        } ?>
    </div>
</div>
<?php 
    $localPosts = get_posts(array(
        'numberposts' => 4,
        'post_status' => 'publish',
        "tag" => "Local",
        "orderby" => "date",
        "order" => "desc"
    ));
    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<div class='col-12'><h3>Local</h3></div>";
    foreach($localPosts as $post)
    {
        echo "<div class='col-3'>";
        echo "<a href='".get_permalink($post)."'><img class= 'img-fluid' src='".get_the_post_thumbnail_url($post)."' alt='post'></a>";
        echo "<a href='".get_permalink($post)."'>".$post->post_title."</a>";
        echo "</div>";
    }
    echo "</div></div>";

    get_footer();
?>
