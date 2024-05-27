<style>
  .latest-posts {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    font-family: Arial, sans-serif;
    margin: 20px 0;
}

.latest-posts ul {
    list-style: none;
    padding: 0;
}

.latest-posts li {
    margin-bottom: 15px;
}

.latest-posts a {
    font-size: 18px;
    color: #0073aa;
    text-decoration: none;
}

.latest-posts a:hover {
    text-decoration: underline;
}

.latest-posts p {
    font-size: 14px;
    color: #666;
}

</style>

<?php
/*
Plugin Name: Latest Posts Shortcode
Plugin URI: http://yourwebsite.com/
Description: A simple plugin to display the latest posts using a shortcode.
Version: 1.0
Author: Your Name
Author URI: http://yourwebsite.com/
License: GPL2
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register the shortcode
function latest_posts_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'posts' => 5,
    ), $atts, 'latest_posts' );

    $posts = intval( $atts['posts'] );

    // Query for the latest posts
    $query = new WP_Query( array(
        'posts_per_page' => $posts,
        'post_status'    => 'publish',
    ) );

    if ( $query->have_posts() ) {
        ob_start();
        ?>
        <div class="latest-posts">
            <ul>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <p><?php echo get_the_date(); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <?php
        wp_reset_postdata();
        return ob_get_clean();
    } else {
        return '<p>No posts found.</p>';
    }
}
add_shortcode( 'latest_posts', 'latest_posts_shortcode' );

// Enqueue the plugin styles
function latest_posts_styles() {
    wp_enqueue_style( 'latest-posts-style', plugin_dir_url( __FILE__ ) . 'css/latest-posts.css' );
}
add_action( 'wp_enqueue_scripts', 'latest_posts_styles' );

?>
