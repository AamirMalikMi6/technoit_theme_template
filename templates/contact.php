<?php
/**
 * Template Name: Contact Page
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

  <div id="contact-am" class="contact-am contact-section">
    <div class="max-width-container">
      <div class="contact-main flex-main">
        <div class="contact-text-area">
          <div class="contact-information-box">
            <div class="contact-information-main">
              <div class="contact-information-inner">
                <div class="single-contact-info-box">
                <span><i class="bi bi-geo-alt-fill"></i></span> 
                  <div class="contact-info">
                    <h6><?php echo get_field('address_heading', 'option'); ?></h6>
                    <p><?php echo get_field('address_details', 'option'); ?></p>
                  </div>
                </div>
              </div>

              <div class="contact-information-inner">
                <div class="single-contact-info-box">
                <span><i class="bi bi-telephone"></i></span> 
                  <div class="contact-info">
                    <h6><?php echo get_field('phone_heading', 'option'); ?></h6>
                    <p><?php echo get_field('phone_details', 'option'); ?></p>
                  </div>
                </div>
              </div>

              <div class="contact-information-inner">
                <div class="single-contact-info-box">
                <span><i class="bi bi-envelope-at"></i></span> 
                  <div class="contact-info">
                    <h6><?php echo get_field('email_heading', 'option'); ?></h6>
                    <p><?php echo get_field('email_details', 'option'); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-form-area">
          <div class="contact-form-box contact-form">
            <form class="contact-form form" id="contact-form">
              <!-- add name and email in one row then subject message and submit -->
              <div class="form-name-email">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
              </div>
              <div class="form-sub-msg-btn">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                <textarea class="form-control" id="message" name="message" placeholder="Message*" rows="7"
                  required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
// Include footer
get_footer();
?>