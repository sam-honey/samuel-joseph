


	
							

<?php get_header(); ?>
<!-- single-projexts.php -->
<script>

</script>


 <div id="enlarged-image">
  <div class="image-wrap">
    <button id="previous-btn" class="navigation-btn">&#8249;</button>
    <img id="enlarged-img" src="" alt="SJHoney Project Image Example">
    <button id="next-btn" class="navigation-btn">&#8250;</button>
   
  </div>
   <span id="close-btn">&times;</span>
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
 
 <?php get_template_part('template-parts/content', 'contact'); ?>
  


</section>

<script>
function adjustContentPadding() {

  const enablePadding = true;
  if (!enablePadding) return;
 
  const header = document.getElementById('sticky-header');
  const firstSection = document.querySelector('#single-project-wrap'); // adjust to first content section
  if (header && firstSection) {
    const headerHeight = header.offsetHeight + 30;
    firstSection.style.paddingTop = `${headerHeight}px`;
  }
}
document.addEventListener('DOMContentLoaded', adjustContentPadding);
window.addEventListener('resize', adjustContentPadding);
</script>

<?php get_footer(); ?>