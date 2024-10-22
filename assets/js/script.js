jQuery(document).ready(function ($) {
  // dark mode change
  $(".toggle input").on("change", function () {
    $("html").attr("data-mode", $(this).is(":checked") ? "dark" : "light");
  });

  //add calss on scroll for menu styling
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $("#header-am").addClass("sticky-menu");
      $(".scroll-top-in-bottom-am").addClass("active");
    } else {
      $("#header-am").removeClass("sticky-menu");
      $(".scroll-top-in-bottom-am").removeClass("active");
    }
  });

  // porfolio section accordingly on click
  $(".portfolio-am .portfolio-fiters li").on("click", function () {
    //check if another li has class then remove it
    $(".portfolio-am .portfolio-fiters li").removeClass("filter-active");
    if (!$(this).hasClass("filter-active")) {
      $(this).addClass("filter-active");
    } else {
      $(this).removeClass("filter-active");
    }

    let selectedTab = $(this).attr("data-atrrb");

    if (selectedTab == "1") {
      $(".portfolio-item").show();
    } else {
      $(".portfolio-item").hide();
      $('.portfolio-item[data-atrrb="' + selectedTab + '"]').show();
    }
  });

  //testimonila section slider
  $(".testimonial-card-inner").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  // client section slider
  $(".clients-wrapper").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 1000,
    autoplay: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  // $(".purecounter").each(function () {
  //   $(this).text("0");

  //   const updateCounter = () => {
  //     const target = +$(this).attr("data-counter");
  //     const c = +$(this).text();

  //     const increment = target / 200;

  //     if (c < target) {
  //       $(this).text(Math.ceil(c + increment));
  //       setTimeout(updateCounter, 1);
  //     } else {
  //       $(this).text(target);
  //     }
  //   };

  //stats counter for homepage and starts counter when scroll on that section
  let counterStarted = false; // Flag to check if the counter has started

  $(window).on("scroll", function () {
    const offset = $("#stats-counter-am").offset().top; // Get the top offset of the counter section
    const scrollPos = $(window).scrollTop() + $(window).height(); // Get the current scroll position

    // Check if the counter section is in view
    if (scrollPos > offset && !counterStarted) {
      counterStarted = true; // Set the flag to true

      $(".purecounter").each(function () {
        $(this).text("0"); // Reset counter

        const updateCounter = () => {
          const target = +$(this).attr("data-counter");
          const c = +$(this).text();

          const increment = target / 200; // Increment value

          if (c < target) {
            $(this).text(Math.ceil(c + increment));
            setTimeout(updateCounter, 20); // Recursively call to update
          } else {
            $(this).text(target); // Ensure it ends at the target value
          }
        };

        updateCounter(); // Start the counter
      });
    }
  });

  //accordion faqs

  var $firstAccordionCollapse = $(".faq-am .faq-accordion-collapse.faq-show");
  $firstAccordionCollapse.css("display", "block");
  $(".faq-am .faq-accordion-header").on("click", function () {
    var $accordionItem = $(this).closest(".faq-accordion-item");
    var $accordionCollapse = $(this).next(".faq-accordion-collapse");

    $(".faq-am .faq-accordion-item").not($accordionItem).removeClass("is-open");
    $(".faq-am .faq-accordion-collapse")
      .not($accordionCollapse)
      .slideUp()
      .removeClass("faq-show");

    $accordionCollapse.stop(true, true).slideToggle().toggleClass("faq-show");
    $accordionItem.toggleClass("is-open");
  });

  //mobile menu

  $(".mobile-menu-toggle").on("click", function () {
    $(".mobile-menu-toggle").toggleClass("menu-open");
    $(".navbar-am").toggleClass("menu-open");
  });

  $(".cross-icon-am").on("click", function () {
    $(".mobile-menu-toggle").removeClass("menu-open");
    $(".navbar-am").removeClass("menu-open");
  });

  // protfolio image popup
  // $(".portfolio-popup-link").on("click", function (e) {
  //   e.preventDefault(); // Prevent default link behavior
  //   var imgSrc = $(this).attr("href"); // Get the image URL from the href
  //   $("#portfolio-popup-img").attr("src", imgSrc); // Set the image source in the popup
  //   $("#portfolio-popup-am").addClass("show"); // Show the popup with fade-in effect
  // });

  // When the close button is clicked
  // $(".close-btn").on("click", function () {
  //   $("#portfolio-popup-am").removeClass("show"); // Hide the popup with fade-out effect
  // });

  // Close the popup when clicking outside the image
  // $("#portfolio-popup-am").on("click", function (e) {
  //   if ($(e.target).is("#portfolio-popup-am")) {
  //     $("#portfolio-popup-am").removeClass("show"); // Hide the popup with fade-out effect
  //   }
  // });

  // header drop down for small screen
  $("#header-am").on("click", ".dropdown-am", function () {
    if ($(window).width() < 992) {
      $(".dropdown-menu-am").toggleClass("dropdown-active");
      $(this).find(".dropdown-menu-am").slideToggle();
    }
  });

  //subscribe form ajax

  $("#subscribe-form").on("click", "#subscribe-btn", function (e) {
    e.preventDefault(); // prevent the default form submission
    var email = $("#email-subs").val();
    console.log("Email entered: " + email);

    // Clear previous messages (both success and error)
    $(
      "#widget-subs-form .error-message, #widget-subs-form .success-message"
    ).remove();

    if (email === "") {
      $("#widget-subs-form").append(
        "<p class='error-message'>Please Enter email.</p>"
      );
      return;
    }

    $.ajax({
      data: {
        action: "subscribe_form",
        email: email,
      },
      type: "post",
      url: "/wp-admin/admin-ajax.php",
      success: function (response) {
        $(
          "#widget-subs-form .error-message, #widget-subs-form .success-message"
        ).remove();
        if (response.success) {
          // Display success message
          $("#subscribe-form").hide();
          $("#widget-subs-form").append(
            "<p class='success-message'><i class='bi bi-check-circle-fill'></i> Thank you for subscribing!</p>"
          );
        } else {
          // Display error message
          $("#widget-subs-form").append(
            "<p class='error-message'>Something went wrong. Please try again later.</p>"
          );
        }
      },
      error: function () {
        // Handle error
        $(
          "#widget-subs-form .error-message, #widget-subs-form .success-message"
        ).remove(); // Remove any existing messages
        $("#widget-subs-form").append(
          "<p class='error-message'>There was an error processing your request. Please try again.</p>"
        );
      },
    });
  });

  //contact form popup after submission
  // $('#contact-form').on('submit', function(e) {
  //   e.preventDefault(); // Prevent the form from submitting the normal way

  //   // Serialize the form data
  //   var formData = $(this).serialize();

  //   // Clear any existing popup message
  //   $('#form-popup-message').text('');

  //   // Send the AJAX request
  //   $.ajax({
  //     url: '/wp-admin/admin-ajax.php', // WordPress AJAX URL
  //     type: 'POST',
  //     data: formData,
  //     success: function(response) {
  //       if (response.success) {
  //         // Display success message in popup
  //         $('#form-popup-message').text(response.data);
  //         $('#contact-form-popup').fadeIn();
  //       } else {
  //         // Display error message in popup
  //         $('#form-popup-message').text(response.data);
  //         $('#contact-form-popup').fadeIn();
  //       }
  //     },
  //     error: function() {
  //       // Display a generic error message
  //       $('#form-popup-message').text('There was an error. Please try again.');
  //       $('#contact-form-popup').fadeIn();
  //     }
  //   });
  // });

  // // Close the popup when clicking the close button
  // $('#form-close-popup').on('click', function() {
  //   $('#contact-form-popup').fadeOut();
  // });





  
});
