<?php
/**
 * The template for displaying search results 
 *
 *
 * @package WordPress
 * @subpackage Technoit
 * @since Technoit 1.0
 */

 get_header('other');

if (have_posts()) {
    ?>
    <div id="search-result-main-am" class="search-result-main-am">
        <div class="search-result-inner-am max-width-container">
            <header class="search-page-header-am">
                <h1 class="search-page-title">
                    <?php
                    printf(
                        /* translators: %s: Search term. */
                        esc_html__('Results for "%s"'),
                        '<span class="search-page-description search-term">' . esc_html(get_search_query()) . '</span>'
                    );
                    ?>
                </h1>
            </header><!-- .search-page-header -->

            <div class="search-result-count">
                <?php
                printf(
                    esc_html(
                        /* translators: %d: The number of search results. */
                        _n(
                            'We found %d result for your search.',
                            'We found %d results for your search.',
                            (int) $wp_query->found_posts,
                        )
                    ),
                    (int) $wp_query->found_posts
                );
                ?>
            </div><!-- .search-result-count -->
            <?php
            // Start the Loop.
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/search-content');
            } // End the loop.

    // If no content, include the "No posts found" template.
} else {
    get_template_part('template-parts/search-content-none');
}
?>

    </div>
</div>
<?php
// Include footer
get_footer();
?>