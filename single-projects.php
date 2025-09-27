


	
							

<?php get_header(); ?>
<!-- single-projexts.php -->


<div id="contact-button-position">
<a href="#contact-button" id="fab-contact" class="contact-toggle btn fab-contact">Contact</a>
</div>
</div>
<!-- V1 
<div id="fullWidthElement"></div>
-->
 <div id="enlarged-image">
  <div class="image-wrap">
    <button id="previous-btn" class="navigation-btn">&#8249;</button>
    <img id="enlarged-img" src="" alt="Enlarged Image">
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
            <a class="contact-link-projects-page" id="contact-link" href="#contact">Get in touch</a> 
            <a class="contact-link-projects-page" href="<?php echo esc_url( home_url( '#projects' ) ); ?>">
    Back to Projects
</a> 
      </div>
	</section>

<?php get_footer(); ?>