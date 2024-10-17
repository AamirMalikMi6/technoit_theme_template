<?php
/**
 * Template Name: Single Blog Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
// Include header
get_header();
include(TEMPLATEPATH . '/template-parts/Pages-Heros.php');
$author_name = get_the_author_meta('display_name', get_post_field('post_author', get_the_ID()));
?>

<section class="single-blog-page-am">

    <div class="blog-page-main-am max-width-container">
        <div class="blog-page-main flex-main">
            <div class="blog-page-inner-left">
                <h2 class="blog-title">
                    <?php the_title(); ?>
                </h2>
                <div class="flex-main details-post-data">
                    <div class="post-meta flex-main">
                        <p class="post-author"><?php echo $author_name; ?></p>
                        <p class="post-sperator"> - </p>
                        <p class="post-date">
                            <time
                                datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('M j, Y')); ?></time>
                        </p>
                    </div>
                </div>
                <div class="blog-image">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="blog-featured-image" alt="">
                </div>
                <?php echo the_content(); ?>
                <div class="flex-main previous-next-blogs">
                    <?php
                    // Get the previous and next post objects
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();

                    // Check if there is a previous post
                    if ($prev_post): ?>
                        <a href="<?php echo get_permalink($prev_post->ID); ?>"
                            class="fill-btn prevoius-post-btn-am">Previous Post</a>
                    <?php endif; ?>
                    <?php
                    // Check if there is a next post
                    if ($next_post): ?>
                        <a href="<?php echo get_permalink($next_post->ID); ?>" class="fill-btn next-post-btn-am">Next
                            Post</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="blog-page-inner-right">
                <div class="blog-sidbar">
                    <div class="search-form">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                    <div class="blog-imag-gallery-am">
                        <div class="blog-gal-img"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg"
                                class="blog-imgs" alt=""></div>
                        <div class="blog-gal-img"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg"
                                class="blog-imgs" alt=""></div>
                        <div class="blog-gal-img"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg"
                                class="blog-imgs" alt=""></div>
                        <div class="blog-gal-img"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg"
                                class="blog-imgs" alt=""></div>
                        <div class="blog-gal-img"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg"
                                class="blog-imgs" alt=""></div>
                        <div class="blog-gal-img"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg"
                                class="blog-imgs" alt=""></div>
                        <div class="blog-gal-img"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg"
                                class="blog-imgs" alt=""></div>
                        <div class="blog-gal-img"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg"
                                class="blog-imgs" alt=""></div>
                        <div class="blog-gal-img"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg"
                                class="blog-imgs" alt=""></div>
                    </div>
                    <hr />
                    <h3>Top Posts</h3>
                    <ul>
                        <?php
                        // Custom query to fetch recent posts
                        $args = array(
                            'post_type' => get_post_type(),
                            'posts_per_page' => 5, // Limit to 5 latest posts
                        );
                        $service_query = new WP_Query($args);
                        // Check if any posts exist
                        if ($service_query->have_posts()) {
                            while ($service_query->have_posts()) {
                                $service_query->the_post(); ?>
                                <li><a href="<?php echo esc_url(get_permalink()); ?>"><i
                                            class="bi bi-arrow-right-circle-fill"></i>
                                        <?php the_title(); ?></a></li>
                            <?php }
                            // Reset post data to avoid conflicts
                            wp_reset_postdata();
                        } else {
                            echo '<li>No posts found.</li>';
                        }
                        ?>
                    </ul>

                    <hr />

                    <h3>Categories</h3>
                    <ul>
                        <?php
                        $current_post_type = get_post_type();

                        // Set the taxonomy based on the post type
                        if ($current_post_type === 'post') {
                            $taxonomy = 'category'; // Default taxonomy for 'post'
                        } else {
                            // For custom post types, get the custom taxonomy
                            // Replace 'custom_taxonomy' with your actual custom taxonomy name
                            $taxonomy = $current_post_type . '-category'; // Assuming custom taxonomy follows this pattern
                        }

                        // Get all terms (categories) for the determined taxonomy
                        $categories = get_categories(array(
                            'taxonomy' => $taxonomy,
                            'hide_empty' => false, // Show categories even if they are empty
                        ));
                        //<?php echo esc_url(get_category_link($category->term_id));
                        // $categories = get_the_category(get_the_ID());
                        if (!empty($categories)) {
                            foreach ($categories as $category) { ?>
                                <li><a href=""><i class="bi bi-arrow-right-circle-fill"></i>
                                        <?php echo esc_html($category->name); ?></a></li>
                            <?php }
                        } else {
                            echo '<li>No categories found.</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>


<?php
// Include footer
get_footer();
?>