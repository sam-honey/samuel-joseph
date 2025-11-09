<?php /* Template Name: samueljoseph home page 2 */ ?>
<?php get_header(); ?>
<script>
const DEBUG_ELEMENT_LOGGER = false; // switch to true to disable
if (DEBUG_ELEMENT_LOGGER) return;
(() => {
  const methods = ['getElementById', 'querySelector', 'querySelectorAll', 'getElementsByClassName', 'getElementsByTagName'];
  const logs = [];
  methods.forEach(fn => {
    const original = Document.prototype[fn];
    Document.prototype[fn] = function (...args) {
      const result = original.apply(this, args);
      logs.push({ fn, args, result });
      return result;
    };
  });
  window.showFetchedElements = () => {
    console.group('Elements fetched by your scripts');
    logs.forEach(({ fn, args, result }, i) => {
      console.log(`${i + 1}. ${fn}(${args.join(', ')}) →`, result);
    });
    console.groupEnd();
  };
})();
</script>
<style>
.fade-in.visible { opacity: 1; transform: translateY(0); }
</style>
<div id="home-page" class="home-page parallax">
  <div id="container">

    <!-- Logo Section -->
    <section id="section-logo"> 
   
      
        <?php  get_template_part('template-parts/main-logo-2'); ?>

      
      <h1 id="samuel-joseph">SAMUEL JOSEPH</h1>
        <h2 id="decor">DECORATOR</h2>
      
    </section>

    <!-- About Section -->
    <section id="section-about" class="js-top-padding" >
      <div id="fade-in-target"></div>
      <div class="section-content">
        <p>
           Samuel Joseph Decor provides an exceptional decorating services backed by years of professional experience. Every project is approached with meticulous attention to detail, creativity, and a commitment to exceeding expectations. From small refreshes to full-scale renovations, each space is transformed with care, professionalism, and a passion for quality. Customer satisfaction is always the top priority.
        </p>
        <p>
As a trusted local decorator in Bath, Samuel Joseph Decor delivers expert painting and decorating services for homes and businesses. Every project is handled with meticulous attention to detail, creativity, and a commitment to quality craftsmanship. From small refreshes to full-scale renovations, each space is transformed with care and professionalism, ensuring complete customer satisfaction.
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
 <?php get_template_part('template-parts/content', 'contact'); ?>
  
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

  const enablePadding = true;
  if (!enablePadding) return;
 
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






<?php get_footer(); ?>
