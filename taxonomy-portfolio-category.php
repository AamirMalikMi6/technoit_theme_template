<?php

get_header('other');


$taxonomy_prefix = 'portfolio-category';
$term_id = get_queried_object_id();
?>
<div class="archive-cat-main">
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

                                <div class="archive-portfolio-item all">
                                    <div class="archive-portfolio-wrap">
                                        <a href="<?php the_permalink(); ?>" class="archive-portfolio-popup-link">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <div class="archive-portfolio-overlay">
                                                <h3><?php the_title(); ?></h3>
                                                <p><?php the_excerpt(); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- End archive-Portfolio Item -->


                                <?php
                            endwhile;
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