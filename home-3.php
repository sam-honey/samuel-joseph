<?php /* Template Name: samueljoseph home page 3 */ ?>
<?php get_header('2'); ?>
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
<!-- test -->
<style>
.fade-in.visible { opacity: 1; transform: translateY(0); }
</style>
<div id="home-page" class="home-page parallax">
  <div id="container">
    
    <div id="section-logo"> <!-- div not section, no h2 tags -->
        <?php  get_template_part('template-parts/main-logo-2'); ?>
        <p class="logo-text-1" id="samuel-joseph">SAMUEL JOSEPH</p>
        <p class="logo-text-2"  id="decor">DECORATOR</p>
    </div>

    <!-- About Section -->
  
<section class="js-top-padding" id="section-hero">
    <div id="fade-in-target"></div>
    <div class="section-content">
     <h2>Breathe New Life Into Your Living Space</h2>
      <p>
      Your home is where life happens, and giving it a fresh new feel can gently transform how it welcomes you each day. Interior painting helps your living space breathe, bringing a sense of light, comfort, and calm. It allows you to create an environment that feels more personal, more complete, and more enjoyable to be in. Whether you are updating one room or your whole home, it is an opportunity to create a space you love, feel proud of, and truly feel at home in.

      </p>
    </div>
</section>




   <section class="js-top-padding" id="section-about">
    <div id="fade-in-target"></div>


    <div class="section-content">
      <h2 aria-label="About Samuel Joseph Decorator – Professional Painter and Decorator in Bath">About Samuel Joseph </h2>
      <p>
      <strong>Samuel Joseph</strong> is an experienced <strong>painter and decorator in Bath</strong>, providing high-quality interior and exterior decorating for homes throughout Bath and the surrounding areas. He is known for his careful preparation, attention to detail, and commitment to achieving a clean, lasting finish.
      </p>

      <p>
<img class="profile-image"
     width="500"
     height="500"
     loading="lazy"
     src="<?php echo get_template_directory_uri(); ?>/img/profile/sam-1000.jpg"
     alt="Samuel Joseph professional painter and decorator in Bath">

With years of practical experience, Samuel has worked on a wide range of properties, from modern homes to traditional period interiors. His approach combines technical skill with an understanding of how colour, light, and finish contribute to the overall feel of a space.
</p>

<p>
As a <strong>professional decorator in Bath</strong>, he is valued not only for the quality of his workmanship, but also for his reliability, clear communication, and respectful manner when working in clients’ homes.
</p>

<p>
Samuel provides <strong>free quotations and honest advice</strong>, helping homeowners make informed decisions about their decorating. His aim is always to deliver work that enhances the home and provides long-term satisfaction.
</p>

<p>
You can view examples of his <a href="#projects">decorating projects in Bath</a>, or
<a role="button" class="style-inline-link contact-toggle" href="#">
request a free quote here
</a>.
</p>

    </div>


  </section><!-- Projects Section --> 
  

  <section id="projects">
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

<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "LocalBusiness",
 "name": "Samuel Joseph Decorator",
 "image": "https://samueljoseph.uk/images/logo-01.png",
 "url": "https://samueljoseph.uk",
 "telephone": "07932877017",
 "address": {
   "@type": "PostalAddress",
   "addressLocality": "Bath",
   "addressCountry": "GB"
 },
 "description": "Professional painter and decorator in Bath specialising in interior and exterior decorating."
}
</script>




<?php get_footer(); ?>
