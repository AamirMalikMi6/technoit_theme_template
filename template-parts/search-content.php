<?php
/**
 * Template part for displaying search results
 *
 *
 * @package WordPress
 * @subpackage Technoit
 * @since Technoit 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h2 class="entry-title"><a href="'. esc_url( get_permalink() ). '" rel="bookmark">', '</a></h2>' );?>

</article><!-- #post-${ID} -->