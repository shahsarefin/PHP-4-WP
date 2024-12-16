// this is for a single page

// create a new page in wordpress

// this file is for single posts
<?php 
    while(have_posts){
        the_post(); ?> // gets all the pages

        <h1> THIS IS A PAGE, NOT A POST</h1>

        <h2> // no need for permalink because we are on a single post
            <?php the_title(); ?> // gets the titles
        </h2>

        <?php the_content(); ?>

        <?php

    }
?>