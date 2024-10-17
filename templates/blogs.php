<?php
/**
* Template Name: Blog Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
// Include header
get_header();
include(TEMPLATEPATH . '/template-parts/Pages-Heros.php');
?>

<div class="single-page">

 <!--  Recent Blog Posts Section  -->
 <section id="recent-posts-am" class="recent-posts-am posts-sections-bg">
    <div class="max-width-container">
      <div class="recent-post-main flex-main">
        <div class="recent-post-inner">
          <article>
            <div class="recent-post-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" alt="" class="post-img">
            </div>
            <p class="post-category">Domain & Hosting</p>
            <h2 class="title">
              <a href="<?php echo esc_url(home_url('/single-blog-page'));?>">How to host website on any hosting provider?</a>
            </h2>
            <div class="flex-main flex-center">
              <div class="post-meta">
                <p class="post-author">William Bla</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Feb 1, 2022</time>
                </p>
              </div>
            </div>
          </article>
        </div><!-- End post list item -->

        <div class="recent-post-inner">
          <article>
            <div class="recent-post-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" alt="" class="post-img">
            </div>
            <p class="post-category">Domain & Hosting</p>
            <h2 class="title">
              <a href="<?php echo esc_url(home_url('/single-blog-page'));?>">How to host website on any hosting provider?</a>
            </h2>
            <div class="flex-main flex-center">
              <div class="post-meta">
                <p class="post-author">William Bla</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Feb 1, 2022</time>
                </p>
              </div>
            </div>
          </article>
        </div><!-- End post list item -->

        <div class="recent-post-inner">
          <article>
            <div class="recent-post-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg" alt="" class="post-img">
            </div>
            <p class="post-category">Domain & Hosting</p>
            <h2 class="title">
              <a href="<?php echo esc_url(home_url('/single-blog-page'));?>">How to host website on any hosting provider?</a>
            </h2>
            <div class="flex-main flex-center">
              <div class="post-meta">
                <p class="post-author">William Bla</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Feb 1, 2022</time>
                </p>
              </div>
            </div>
          </article>
        </div><!-- End post list item -->

      </div><!-- End recent posts list -->

    </div>
  </section><!-- End Recent Blog Posts Section -->
</div>


<?php
// Include footer
get_footer();
?>