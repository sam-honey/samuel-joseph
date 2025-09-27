
<?php /* Template Name: Example Template */ ?>
<?php get_header();?>

<div id="home-page" class="home-page">
<div id="container">

<section id="section-logo"> 
<div id="logo">
  <?php get_template_part('template-parts/main-logo'); ?>
</div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {


  const enableAutoScroll = true; // ⬅️ set to true in production, false in dev

  if (!enableAutoScroll) return;
  let userScrolled = false;
  
  window.addEventListener("scroll", () => {
    userScrolled = true;
  }, { once: true });

  // Custom smooth scroll with easing
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

      const ease = easeInOutCubic(progress); // nice smooth easing
      window.scrollTo(0, startY + distance * ease);

      if (progress < 1) {
        requestAnimationFrame(animation);
      }
    }

    requestAnimationFrame(animation);
  }

  const lastElement = document.querySelector(".fadein-with-delay-3");
  lastElement.addEventListener("animationend", function () {
    setTimeout(() => {
      const logo = document.getElementById("logo");
      logo.classList.add("fade-out");

      if (!userScrolled) {
        const nextSection = document.querySelector("#section-about");
        if (nextSection) {
          smoothScrollTo(nextSection.offsetTop, 2800); // slower, smoother
        }
      }
    }, 800);
  });
});
</script>


<script>
function adjustContentPadding() {
    const header = document.getElementById('sticky-header');
    const firstSection = document.querySelector('#projects'); // or 'main' or first section

    if (header && firstSection) {
        const headerHeight = header.offsetHeight + 30; // actual rendered height
        firstSection.style.paddingTop = `${headerHeight}px`;
    }
}

// Run on page load
document.addEventListener('DOMContentLoaded', adjustContentPadding);

// Update on window resize (responsive)
window.addEventListener('resize', adjustContentPadding);

</script>




</script>


     
<section id="section-about">
<div id="fade-in-target"></div>
<div class="section-content">
<p>
SJHoney Property Solutions delivers complete home and workplace transformations. Services include professional painting and decorating as well as a wide range of renovations, from updated fixtures and fittings to full bathroom installations. Each project is carried out with care, attention to detail, and a consistently professional finish.
</p>
<p>
View past <a href="#projects">projects</a> to see the range of services provided or <a href="#" class="contact-toggle">get in touch</a> for a free and friendly consultation.
 
</p>

</div>
</section>

<section id="projects">

<div class="section-content ">

<?php get_template_part('template-parts/content', 'project-thumbs'); ?>


</div>
</section>

<section id="contact-section">


<div class="section-content" >
  <h2>Contact Me</h2>

  <div id="contact-options">


        <a class="btn-contact" href="mailto:sjhoney.c.uk">
        <span class="mobile-label">Email</span>
         <span class="desktop-label">info@sjhoney.co.uk</span>
         </a>
          <a class="btn-contact" href="#" id="callLink">
          <span class="mobile-label">Telephone</span>
          <span class="desktop-label">767676767</span>
           </a>
      </div>

  <!-- Hidden form -->

<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>

<p class="address" >SJHoney Property Solutions 55 Ringwood Rd Oldfield Bath BA23JL</p>
</div>

</section>


</div>


<script>
const oneVW = window.innerWidth * 0.01;
console.log(oneVW + "px");


</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const numberParts = ["+44", "7932", "877017"]; // split number
    const fullNumber = numberParts.join("");       // "+447932877017"
    const link = document.getElementById("callLink");

    if(link){
        link.href = "tel:" + fullNumber;
        link.querySelector(".desktop-label").textContent = fullNumber;
    }
});



</script>

<?php get_footer(); // Loads footer.php ?>2