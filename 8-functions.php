// for loading css and js we need this file must be functions.php

<?php 
    function fictional_university_files() {
        wp_enqueue_style('main-style', get_stylesheet_uri()); // linked the css file
    }

    add_action('wp_enqueue_scripts', 'fictional_university_files');

?>