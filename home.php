<?php /* Template Name: Example Template */ ?>
<?php get_header(); ?>
<style>
.fade-in.visible { opacity: 1; transform: translateY(0); }
</style>
<div id="home-page" class="home-page">
  <div id="container">

    <!-- Logo Section -->
    <section id="section-logo"> 
      <div id="logo">
        <?php get_template_part('template-parts/main-logo'); ?>
      </div>
    </section>

    <!-- About Section -->
    <section id="section-about" class="parallax">
      <div id="fade-in-target"></div>
      <div class="section-content">
        <p>
          SJHoney Property Solutions delivers complete home and workplace transformations. 
          Services include professional painting and decorating as well as a wide range of 
          renovations, from updated fixtures and fittings to full bathroom installations. 
          Each project is carried out with care, attention to detail, and a consistently 
          professional finish.
        </p>
        <p>
          View past <a href="#projects">projects</a> to see the range of services provided 
          or <a href="#" class="contact-toggle">get in touch</a> for a free and friendly consultation.
        </p>
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="parallax">
      <div class="section-content">
        <?php get_template_part('template-parts/content', 'project-thumbs'); ?>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-section" class="parallax">
      <div class="section-content">
        <h2>Contact Me</h2>
        <div id="contact-options">
          <a class="btn-contact" href="mailto:info@sjhoney.co.uk">
            <span class="mobile-label">Email</span>
            <span class="desktop-label">info@sjhoney.co.uk</span>
          </a>
          <a class="btn-contact" href="#" id="callLink">
            <span class="mobile-label">Telephone</span>
            <span class="desktop-label">767676767</span>
          </a>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>

        <p class="address">
          SJHoney Property Solutions, 55 Ringwood Rd, Oldfield, Bath, BA2 3JL
        </p>
      </div>
    </section>

  </div>
</div>

<!-- Scripts -->
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

  const lastElement = document.querySelector(".fadein-with-delay-3");
  if (lastElement) {
    lastElement.addEventListener("animationend", function () {
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
document.addEventListener("DOMContentLoaded", function() {
  const numberParts = ["+44", "7932", "877017"];
  const fullNumber = numberParts.join("");
  const link = document.getElementById("callLink");
  if (link) {
    link.href = "tel:" + fullNumber;
    link.querySelector(".desktop-label").textContent = fullNumber;
  }
});
</script>

<?php get_footer(); ?>
