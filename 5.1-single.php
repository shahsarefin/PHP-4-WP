// this file is for single posts
<?php 
    while(have_posts){
        the_post(); ?> // gets all the posts

        <h2> // no need for permalink because we are on a single post
            <?php the_title(); ?> // gets the titles
        </h2>

        <?php the_content(); ?>

        <?php

    }
?>