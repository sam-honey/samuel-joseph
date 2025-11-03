


	
							

<?php get_header(); ?>
<!-- single-projexts.php -->
<script>
/*
function adjustContentPadding() {
    const header = document.getElementById('sticky-header');
    const firstSection = document.querySelector('#single-project-wrap'); // or 'main' or first section

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


<!-- V1 
<div id="fullWidthElement"></div>
-->
 <div id="enlarged-image">
  <div class="image-wrap">
    <button id="previous-btn" class="navigation-btn">&#8249;</button>
    <img id="enlarged-img" src="" alt="SJHoney Project Image Example">
    <button id="next-btn" class="navigation-btn">&#8250;</button>
    <span id="close-btn">&times;</span>
  </div>
</div>


  <section id="single-project-wrap"> 
    <div id="fade-in-target"></div>
	 <article class="single-project-wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php get_template_part( 'content', 'projects' ); ?>	
	 </article>
    <div id="project-contact-wrapper">
      <a class="contact-link-projects-page" href="<?php echo esc_url( home_url( '#projects' ) ); ?>">
        Back to Projects
      </a> 
    </div>
	</section>


  <section id="contact-section">
    <div class="section-content" >
    <h2>Contact Me</h2>
     <div id="contact-options">

      <!-- Email -->
      <a  href="#" class=" btn-contact emailLink">
        <span class="mobile-label mobile-label-display contact-form-details">Email</span>
        <span class="desktop-label desktop-label-display contact-form-extend-details"></span>
      </a>

      <!-- Telephone -->
      <a  href="#" class=" btn-contact callLink">
        <span class="mobile-label mobile-label-display contact-form-details">Telephone</span>
        <span class="desktop-label desktop-label-display contact-form-extend-details "></span>
      </a>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="d79f602" title="Contact form 1"]'); ?>
    <p class="address addressBlock" >SJHoney Property Solutions 55 Ringwood Rd Oldfield Bath BA23JL</p>
  </div>

</section>

<?php get_footer(); ?>