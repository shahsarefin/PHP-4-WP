// add 3 post in wordpress

<?php 
    while(have_posts){
        the_post(); ?> // gets all the posts

        <h2<a href= "<?php the_permalink(); ?>" ></a>> // gets the permalink for each post title and make the slug in  url
            <?php the_title(); ?> // gets the titles
        </h2>

        <?php the_content(); ?>

        <hr>

        <?php

    }
?>