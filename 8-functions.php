// for loading css and js we need this file must be functions.php

<?php 
    function fictional_university_files() {
        wp_enqueue_style('main-style', get_stylesheet_uri()); // linked the css file
    }

    add_action('wp_enqueue_scripts', 'fictional_university_files');

?>

# 8- Linking the CSS in WordPress functions.php File

## Description
This `functions.php` file is a crucial part of a WordPress theme. It's used to enqueue styles and scripts, define theme features, and add custom functionality. In this specific example, it's set up to load the main stylesheet of the theme.

## Usage
Place this code in a file named `functions.php` in the root directory of your WordPress theme.

## Code Explanation
<?php function fictional_university_files() { wp_enqueue_style('main-style', get_stylesheet_uri()); } add_action('wp_enqueue_scripts', 'fictional_university_files'); ?>
text

- `function fictional_university_files()`: Defines a custom function to enqueue styles and scripts.
- `wp_enqueue_style('main-style', get_stylesheet_uri());`: Enqueues the main stylesheet of the theme.
  - 'main-style' is the handle (name) for the stylesheet.
  - `get_stylesheet_uri()` retrieves the URL of the theme's style.css file.
- `add_action('wp_enqueue_scripts', 'fictional_university_files');`: Hooks the custom function to the WordPress 'wp_enqueue_scripts' action, ensuring it runs at the appropriate time.

## Key Points
1. The `functions.php` file is automatically loaded by WordPress for themes.
2. It's used to define theme features and functionality.
3. Proper enqueueing of styles and scripts is crucial for performance and avoiding conflicts.