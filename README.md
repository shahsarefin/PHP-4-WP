# PHP-4-WP

# Creating a Basic WordPress Theme

## Steps to Create and Activate a New Theme

1. Create a new folder in `wp-content/themes` called `fictional-university-theme`

2. Create two files in the `fictional-university-theme` folder:
   - `index.php`
   - `style.css`

3. Add the following content to `style.css`:

```css
/*
Theme Name: Fictional University
Author: Firstname Lastname
Version: 1.0
Description: Theme created for fictional university
*/
```

This header provides WordPress with essential information about your theme.

4. Add the following content to `index.php`:

```php
<?php echo "Hello World, this is a new theme"; ?>
```

This is a basic placeholder for your theme's main template file.

5. Add a screenshot image for your theme:
   - Create an image file named `screenshot.png` or `screenshot.jpg`
   - Place it in the `fictional-university-theme` folder
   - Recommended size is 1200x900 pixels

6. Activate the theme:
   - Go to WordPress admin panel (wp-admin)
   - Navigate to Appearance > Themes
   - Find "Fictional University" in the list of available themes
   - Click "Activate" to make it your current theme

7. Refresh the Themes page to see your new theme with the screenshot

## Key Points
- The `style.css` file must include the theme header comment for WordPress to recognize it as a theme
- `index.php` is the main template file and is required for all WordPress themes
- Adding a screenshot helps identify your theme in the WordPress admin panel

## Next Steps
- Expand your theme by adding more template files like `header.php`, `footer.php`, `single.php`, etc.
- Customize your theme's appearance and functionality in `functions.php`
- Add more styles to `style.css` to design your theme

## Note
This is a basic setup. A full-fledged theme typically requires more files and advanced PHP, HTML, and CSS knowledge.

# 5- The Famous Loop in WP in the index.php

## Description
This code snippet demonstrates how to display the latest 3 posts in WordPress using the standard WordPress loop. It includes the post title (linked to the full post), the content, and a horizontal line separator between posts.

## Usage
To use this template, insert it into your WordPress theme files where you want to display the latest posts. Typically, this would be in `index.php`, `home.php`, or a custom page template.

## Code Explanation
```php
<?php 
    while(have_posts()){
        the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a></h2>

        <?php the_content(); ?>

        <hr>

    <?php
    }
?>
```

- `while(have_posts())`: This initiates the WordPress loop, which will continue as long as there are posts to display
- `the_post()`: This function sets up each post's data
- `the_permalink()`: Retrieves the URL for the current post
- `the_title()`: Displays the title of the current post
- `the_content()`: Displays the full content of the current post
- `<hr>`: Adds a horizontal line after each post for separation

## Customization
1. To limit the number of posts, use `query_posts()` or a custom WP_Query before the loop
2. Adjust the HTML structure to match your theme's design
3. Add additional WordPress template tags to display more post information (e.g., author, date, categories)

# 5.1- WordPress Single Post Template

## Description
This code snippet is designed to display a single post in WordPress. It includes the post title and the full content of the post. This template is typically used in `single.php` or a custom single post template file.

## Usage
Insert this code into your `single.php` file or a custom template file designated for single post display in your WordPress theme.

## Code Explanation
```php
<?php while(have_posts()){ the_post(); ?>
    <h2>
        <?php the_title(); ?>
    </h2>

    <?php the_content(); ?>

<?php
}
?>
```

- `while(have_posts())`: Initiates the WordPress loop. For single posts, this will typically run only once
- `the_post()`: Sets up the post data for the current post
- `the_title()`: Displays the title of the current post
- `the_content()`: Displays the full content of the current post

## Key Points
1. No permalink is used for the title, as we're already on the single post page
2. The loop is still used, even though we're only displaying one post, to ensure proper WordPress functionality

# 5.2- WordPress Single Page Template

## Description
This code snippet is designed to display a single page in WordPress. It includes a custom heading to differentiate it from posts, the page title, and the full content of the page. This template is typically used in `page.php` or a custom page template file.

## Usage
Insert this code into your `page.php` file or a custom template file designated for single page display in your WordPress theme.

## Code Explanation
```php
<?php while(have_posts()){ the_post(); ?>
    <h1>THIS IS A PAGE, NOT A POST</h1>

    <h2>
        <?php the_title(); ?>
    </h2>

    <?php the_content(); ?>

<?php
}
?>
```

- `while(have_posts())`: Initiates the WordPress loop. For single pages, this will typically run only once
- `the_post()`: Sets up the post data for the current page
- `<h1>THIS IS A PAGE, NOT A POST</h1>`: A custom heading to clearly indicate that this is a page template
- `the_title()`: Displays the title of the current page
- `the_content()`: Displays the full content of the current page

## Key Points
1. The custom `<h1>` heading helps differentiate pages from posts visually
2. No permalink is used for the title, as we're already on the single page
3. The loop is still used, even though we're only displaying one page, to ensure proper WordPress functionality

# 6 - WordPress Header Template

## Description
This code snippet represents the header portion of a WordPress theme. It includes the essential HTML structure for the beginning of a webpage and incorporates the WordPress `wp_head()` function. This template is typically used as the `header.php` file in a WordPress theme.

## Usage
1. Save this code as `header.php` in your WordPress theme directory
2. Include this header in other template files (like `index.php`, `single.php`, and `page.php`) using the `get_header();` function

## Code Explanation
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
    <h1>Fictional University header</h1>
```

- `<!DOCTYPE html>`: Declares that this is an HTML5 document
- `<html lang="en">`: Opens the HTML tag with English set as the language
- `<?php wp_head(); ?>`: Calls the WordPress wp_head() function, which is crucial for including WordPress-generated CSS, JavaScript, and other metadata
- `<body>`: Opens the body tag of the HTML document
- `<h1>Fictional University header</h1>`: A placeholder heading for the site title

## Key Points
- The `<body>` and `<html>` tags are intentionally left unclosed in this file
- To use this header, add `<?php get_header(); ?>` at the beginning of your index.php, single.php, page.php, and other template files

# 7- WordPress Footer Template

## Description
This code snippet represents the footer portion of a WordPress theme. It includes the essential `wp_footer()` function and closes the `<body>` and `<html>` tags. This template is typically used as the `footer.php` file in a WordPress theme.

## Usage
1. Save this code as `footer.php` in your WordPress theme directory
2. Include this footer in other template files (like `index.php`, `single.php`, and `page.php`) using the `get_footer();` function

## Code Explanation
```php
    <?php wp_footer(); ?>
</body>
</html>
```

- `<?php wp_footer(); ?>`: Calls the WordPress wp_footer() function, which is crucial for including WordPress-generated JavaScript and other functionality
- `</body>`: Closes the body tag of the HTML document
- `</html>`: Closes the HTML tag, completing the HTML structure

## Key Points
- The `wp_footer()` function should always be included just before the closing `</body>` tag
- To use this footer, add `<?php get_footer(); ?>` at the end of your index.php, single.php, page.php, and other template files