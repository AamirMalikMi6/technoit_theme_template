<?php

get_header('other');


$taxonomy_prefix = 'our-team-category';
$term_id = get_queried_object_id();
?>
<div id="archive-cat-main" class="archive-cat-main">
    <div class="archive-cat-content-inner-am max-width-container">
        <main id="archive-cat-main-container" class="archive-cat-main-container">
            <article <?php post_class(); ?>>
                <!-- Display the archive title -->
                <h1 class="the-title-am"><?php the_archive_title(); ?></h1>

                <div class="archive-content-am">
                    <?php if (have_posts()): ?>
                        <div class="archive-posts-wrapper">
                            <?php
                            // Loop through posts
                            while (have_posts()):
                                the_post();
                                // Load the post card template part for displaying each post
                                // get_template_part('template-parts/contentloop', 'card');
                                ?>
                                <div class="archive-teams-card">
                                    <div class="archive-teams-card-inner">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="teams-img" alt="">
                                        <h4><?php echo get_the_title(); ?></h4>
                                        <span><?php echo get_field('designation'); ?></span>
                                        <div class="social">
                                            <a href="<?php echo get_field('twitter_link'); ?>"><i class="bi bi-twitter"></i></a>
                                            <a href="<?php echo get_field('facebook_link'); ?>"><i
                                                    class="bi bi-facebook"></i></a>
                                            <a href="<?php echo get_field('linkedin_link'); ?>"><i
                                                    class="bi bi-linkedin"></i></a>
                                            <a href="<?php echo get_field('instagram_link'); ?>"><i
                                                    class="bi bi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Team Member -->


                                <?php
                            endwhile;
                            ?>
                        </div>

                        <!-- Pagination for navigating through the posts -->
                        <div class="pagination">
                            <?php
                            // Display pagination links if there are more posts to show
                            the_posts_pagination(array(
                                'mid_size' => 2,
                                'prev_text' => __('Previous', 'technoit'),
                                'next_text' => __('Next', 'technoit'),
                            ));
                            ?>
                        </div>

                    <?php else: ?>
                        <!-- Message displayed if no posts are found -->
                        <p><?php _e('No posts found.', 'technoit'); ?></p>
                    <?php endif; ?>
                </div>
            </article>
        </main>
    </div>
</div>


<?php get_footer(); ?>