<!--  Footer  -->
<footer id="footer" class="footer footer-section">
  <div class="max-width-container">
    <div class="footer-content-main footer-paddings">
      <div class="footer-content flex-main">
        <div class="footer-content-logo-area">
          <div class="footer-widget">
            <div class="footer-logo">
              <?php the_custom_logo(); ?>
            </div>
            <div class="footer-text">
              <p><?php echo get_theme_mod('footer-description'); ?></p>
            </div>
            <div class="footer-social-icon">
              <span><?php echo get_theme_mod('footer-social-icon-heading'); ?></span>
              <?php if (get_theme_mod('footer-twitter')) { ?><a href="<?php echo get_theme_mod('footer-twitter'); ?>"
                  class="twitter"><i class="bi bi-twitter"></i></a> <?php } ?>
              <?php if (get_theme_mod('footer-facebook')) { ?><a href="<?php echo get_theme_mod('footer-facebook'); ?>"
                  class="facebook"><i class="bi bi-facebook"></i></a><?php } ?>
              <?php if (get_theme_mod('footer-instagram')) { ?><a href="<?php echo get_theme_mod('footer-instagram'); ?>"
                  class="instagram"><i class="bi bi-instagram"></i></a><?php } ?>
              <?php if (get_theme_mod('footer-linkedin')) { ?><a href="<?php echo get_theme_mod('footer-linkedin'); ?>"
                  class="linkedin"><i class="bi bi-linkedin"></i></a><?php } ?>
            </div>
          </div>
        </div>

        <div class="footer-content-service-area">
          <div class="service-widget footer-widget">
            <div class="footer-widget-heading">
              <h3><?php echo get_theme_mod('footer-service-menu-heading'); ?></h3>
            </div>
            <ul class="list">
              <!-- <li><a href="services.html">Web Design</a></li>
              <li><a href="services.html">App Developemnt</a></li>
              <li><a href="services.html">Cloud Services</a></li>
              <li><a href="services.html">Domain adn Hosting</a></li>
              <li><a href="services.html">Seo Optimization</a></li>
              <li><a href="services.html">Social Media</a></li> -->
              <?php display_custom_menu_am('Service Menu'); ?>
            </ul>
          </div>
        </div>
        <div class="footer-content-information-area">
          <div class="service-widget footer-widget">
            <div class="footer-widget-heading">
              <h3><?php echo get_theme_mod('footer-information-menu-heading'); ?></h3>
            </div>
            <ul class="list">
              <!-- <li><a href="about.html">About</a></li>
              <li><a href="packages.html">Pricing</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="porfolio.html">Portfolio</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="blogs.html">Blogs</a></li>
              <li><a href="blogs-details.html">Blog Details</a></li>
              <li><a href="coming-soon.html">Coming Soon</a></li>
              <li><a href="privacy-policy.html">Terms & Conditions</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li> -->
              <?php display_custom_menu_am('Information Menu'); ?>
            </ul>
          </div>
        </div>
        <div class="footer-contact-area">
          <div class="contact-widget footer-widget">
            <div class="footer-widget-heading">
              <h3><?php echo get_theme_mod('footer-contact-section-heading'); ?></h3>
            </div>
            <div class="footer-text">
              <p><i class="bi bi-geo-alt-fill footer-icon-margin"></i>
                <?php echo get_theme_mod('footer-contact-address-text'); ?></p>
              <a href="tel:<?php echo get_theme_mod('footer-contact-phone-text'); ?>">
                <p><i class="bi bi-telephone-inbound-fill footer-icon-margin"></i>
                  <?php echo get_theme_mod('footer-contact-phone-text'); ?></p>
              </a>
              <a href="mailto:<?php echo get_theme_mod('footer-contact-email-text'); ?>">
                <p><i class="bi bi-envelope-fill footer-icon-margin"></i>
                  <?php echo get_theme_mod('footer-contact-email-text'); ?></p>
              </a>
            </div>
          </div>
          <div class="footer-widget" id="widget-subs-form">
            <div class="footer-widget-heading">
              <h3><?php echo get_theme_mod('footer-contact-newslatter-heading'); ?></h3>
            </div>
            <div class="footer-text footer-text-margin">
              <p><?php echo get_theme_mod('footer-contact-newslatter-text'); ?></p>
            </div>
            <div class="subscribe-form" id="subscribe-form">
                <input name="email-subs" id="email-subs" type="email" placeholder="Email Address">
                <button id="subscribe-btn" type="submit"><i class="bi bi-telegram"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copy-right-area">
        <div class="footer-copy-right-inner">
          <div class="copyright-text">
            <p><?php echo get_theme_mod('footer-copyright-text'); ?> <a
                href="<?php echo get_theme_mod('footer-copyright-link'); ?>"><?php bloginfo('name'); ?></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" class="scroll-top-in-bottom-am">
    <i class="bi bi-arrow-up-short"></i>
  </a>

