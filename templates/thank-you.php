<?php
/**
 * Template Name: Thank You Page
 *
 * @package WordPress
 * @subpackage technoit
 * @since technoit 1.0
 */
// Include header
get_header();
?>
<!-- after form submission thank you page  -->
<div class="pages-breadcrumbs-am">
    <div class="page-header-am flex-main">
        <div class="max-width-container hero-heading-main">
            <div class="hero-heading-inner flex-main">
                <div class="hero-heading-content thank-you-page-am">
                    <h2><?php echo get_field('thank_you_page_heading', get_the_ID()); ?></h2>
                    <p><?php echo get_field('thank_you_page_description_', get_the_ID()); ?></p>
                    <a class="cta-blue" href="<?php echo get_field('back_button_link', get_the_ID()); ?>"><?php echo get_field('back_button_text', get_the_ID()); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer
get_footer();
?>