<div class="archive-recent-post-inner">
    <article>
        <div class="archive-recent-post-img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="post-img">
        </div>
        <p class="archive-post-category">
            <?php
            // Get the terms of the post, 'category' is used as taxonomy
            $terms = get_the_terms(get_the_ID(), 'category');
            if ($terms && !is_wp_error($terms)) {
                $term_names = array(); // Initialize an array to store term names
                foreach ($terms as $term) {
                    $term_names[] = esc_html($term->name); // Add each term name to the array
                }
                echo implode(', ', $term_names); // Join the term names with a comma
            } else {
                echo 'No categories'; // Fallback if no terms are found
            }
            ?>
        </p>
        <h2 class="title">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="archive-author-details flex-main flex-center">
            <div class="post-meta">
                <p class="post-author"><?php echo esc_html(get_the_author()); ?></p>
                <p class="post-date">
                    <time
                        datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('M j, Y')); ?></time>
                </p>
            </div>
        </div>
    </article>
</div><!-- End post list item -->