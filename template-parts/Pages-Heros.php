<!-- template-parts/Pages-Heros.php -->
<?php
$title = isset($hero_title) ? $hero_title : get_the_title(); // Get post title or use passed title
$description = isset($hero_description) ? $hero_description : wp_trim_words(get_the_excerpt(), 20, '...'); // Default description
?>

<div class="pages-breadcrumbs-am">
  <div class="page-header-am flex-main">
    <div class="max-width-container hero-heading-main">
      <div class="hero-heading-inner flex-main">
        <div class="hero-heading-content">
          <h2><?php echo esc_html($title); ?></h2>
          <p><?php echo esc_html($description); ?></p>
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="max-width-container">
      <ol>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><?php echo esc_html($title); ?></li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->
