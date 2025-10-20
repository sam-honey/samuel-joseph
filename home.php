<?php /* Template Name: samueljoseph home page  */ ?>
<?php get_header(); ?>
<style>
.fade-in.visible { opacity: 1; transform: translateY(0); }
</style>
<div id="home-page" class="home-page parallax">
  <div id="container">

    <!-- Logo Section -->
    <section id="section-logo"> 
    <div id="logo-wrap">
      
        <?php  get_template_part('template-parts/main-logo'); ?>

      
      <h1 id="samuel-joseph">SAMUEL JOSEPH</h1>
        <h2 id="decor">DECOR</h2>
        </div>
    </section>

    <!-- About Section -->
    <section id="section-about" class="js-top-padding" >
      <div id="fade-in-target"></div>
      <div class="section-content">
        <p>
          Samuel Joseph Decor delivers exceptional decorating services backed by years of professional experience. Every project is approached with meticulous attention to detail, creativity, and a commitment to exceeding expectations. From small refreshes to full-scale renovations, each space is transformed with care, professionalism, and a passion for quality. Customer satisfaction is always the top priority..
        </p>
        <p>
          View past <a href="#projects">projects</a> to see the range of services provided 
          or <a href="#" class="contact-toggle">get in touch</a> for a free and friendly consultation.
        </p>
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" >
      <div class="section-content">
        <?php get_template_part('template-parts/content', 'project-thumbs'); ?>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-section" >
  <div class="section-content">
    <h2>Contact Me</h2>
    <div id="contact-options">

      <!-- Email -->
      <a class="btn-contact" href="#" class="emailLink">
        <span class="mobile-label mobile-label-display">Email</span>
        <span class="desktop-label desktop-label-display"></span>
      </a>

      <!-- Telephone -->
      <a class="btn-contact" href="#" class="callLink">
        <span class="mobile-label mobile-label-display">Telephone</span>
        <span class="desktop-label desktop-label-display"></span>
      </a>
    </div>

    <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>

    <p class="address" id="addressBlock"></p>
  </div>
</section>



  </div>
</div>


</script>

<!-- Auto scroll  -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const enableAutoScroll = true;
  if (!enableAutoScroll) return;

  // Track if user has scrolled
  let userScrolled = window.scrollY > 0; // initial check if page loaded scrolled down

  window.addEventListener("scroll", () => {
    userScrolled = true;
  });

  function smoothScrollTo(targetY, duration = 2800) {
    const startY = window.scrollY;
    const distance = targetY - startY;
    let startTime = null;

    function easeInOutCubic(t) {
      return t < 0.5
        ? 4 * t * t * t
        : 1 - Math.pow(-2 * t + 2, 3) / 2;
    }

    function animation(currentTime) {
      if (!startTime) startTime = currentTime;
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);

      window.scrollTo(0, startY + distance * easeInOutCubic(progress));

      if (progress < 1) requestAnimationFrame(animation);
    }

    requestAnimationFrame(animation);
  }
  const triggerAni = document.getElementById("decor");
 
  if (triggerAni) {
    triggerAni.addEventListener("animationend", function () {
      // Only scroll if user hasn't scrolled and still at the top
      if (!userScrolled && window.scrollY === 0) {
        const nextSection = document.querySelector("#section-about");
        if (nextSection) {
          smoothScrollTo(nextSection.offsetTop, 2800);
        }

      }
    });
  }
});

</script>

<script>
function adjustContentPadding() {
  const header = document.getElementById('sticky-header');
  const firstSection = document.querySelector('#projects'); // adjust to first content section
  if (header && firstSection) {
    const headerHeight = header.offsetHeight + 30;
    firstSection.style.paddingTop = `${headerHeight}px`;
  }
}
document.addEventListener('DOMContentLoaded', adjustContentPadding);
window.addEventListener('resize', adjustContentPadding);
</script>


<script>
/*
document.addEventListener("DOMContentLoaded", function () {
  const fab = document.querySelector(".fab-contact");
  if (!fab) return;

  let hasFadedIn = false; // tracks if FAB has initially appeared

  const sections = document.querySelectorAll("#section-about, #projects");
  if (sections.length === 0) {
    console.log("Error: #section-about or #projects not found in the DOM!");
    return;
  }

  // FADE IN OBSERVER
  const fadeInObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && entry.intersectionRatio > 0.3) {
        fab.classList.add("fade-in-contact-button");
        hasFadedIn = true; // mark that FAB has appeared
        obs.disconnect(); // fade in only once
      }
    });
  }, { threshold: [0.3] });

  requestAnimationFrame(() => {
    sections.forEach(section => fadeInObserver.observe(section));
  });

  // FADE OUT OBSERVER (footer)
  const footer = document.querySelector("footer");
  if (footer) {
    const fadeOutObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!hasFadedIn) return; // do nothing until FAB has faded in

        if (entry.isIntersecting) {
          fab.classList.remove("fade-in-contact-button"); // fade out
        } else {
          fab.classList.add("fade-in-contact-button"); // fade back in
        }
      });
    }, { threshold: [0.1] });

    fadeOutObserver.observe(footer);
  }
});
*/

</script>





<?php get_footer(); ?>
