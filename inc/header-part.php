<header id="header-am" class="header-am flex-main flex-center sticked">
    <!-- logo then menu then CTA then night mode -->
    <div class="header-menu-am max-width-container flex-main flex-center flex-between">

      <!-- logo -->
      <div class="logo-mi6 flex-main flex-center">
        <?php the_custom_logo(); ?>
      </div>

      <!-- Toggle Button for Mobile Menu -->
      <div class="mobile-menu-toggle">
        <span class="menu-icon">&#9776;</span>
      </div>

      <!-- menu -->

      <nav id="navbar-am" class="menu navbar-am">
        <ul class="nabbar-menu-am">
        <li class="cross-icon-am"><span class="menu-icon">&#735;</span></li>
        <?php display_custom_menu_am('header-menu'); ?>
        </ul>
      </nav>

      <!-- CTA (hidden on mobile) -->

      <div class="menu-btn">
        <a href="<?php echo get_theme_mod( 'cta-link' ); ?>" class="btn cta-blue"><?php echo get_theme_mod( 'cta-text' ); ?></a>
      </div>

      <!-- night mode button centered -->
       <?php if(get_theme_mod( 'dark-mode-option' )) { ?>
      <div class="night-mode-btn">
        <label class="toggle" arial-label="Toggle dark mode">
          <input type="checkbox">
          <span>☀️</span>
          <span>🌙</span>
        </label>
      </div>
      <?php } ?>

    </div>
  </header>