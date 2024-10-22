<?php
/**
 * Template for displaying archive pages.
 *
 * @package technoit
 */

 get_header('other'); ?>

<div class="archive-page-main-am">
    <div class="acrhive-page-inner-am max-width-container">
        <main id="archive-main" class="archive-main" role="main">
            <article <?php post_class(); ?>>
                <!-- Display the archive title -->
                <h1 class="the-title-am"><?php the_archive_title(); ?></h1>
                
                <div class="archive-content-am">
                    <?php if (have_posts()) : ?>
                        <div class="archive-posts-wrapper">
                            <?php
                            // Loop through posts
                            while (have_posts()) : the_post();
                                // Load the post card template part for displaying each post
                                get_template_part('template-parts/contentloop', 'card');
                            endwhile;
                            ?>
                        </div>

                    <?php else : ?>
                        <!-- Message displayed if no posts are found -->
                        <p><?php _e('No posts found.', 'technoit'); ?></p>
                    <?php endif; ?>
                </div>
            </article>
        </main>
    </div>
</div>

<?php get_footer(); ?>
