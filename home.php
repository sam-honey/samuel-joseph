
<?php /* Template Name: Example Template */ ?>
<?php get_header();?>

<div id="home-page">
<div id="container">
<section>
<div class="section-content">
<p  >
SJHoney Property Solutions offers complete home and workplace transformations. Alongside professional painting and decorating, we cover a wide range of renovation services—from updating fixtures and fittings to full bathroom installations. Every project is completed with care, attention to detail, and a professional approach.
</p>
<p>
Get in touch today for a free and friendly consultation.
</p>
<a href="#"class="btn-warm">Contact</a>
</div>
</section>

<section>

<div class="section-content">

<?php get_template_part('template-parts/content', 'project-thumbs'); ?>


</div>
</section>

<section>
<div class="section-content"><h2 class="page-title">Gallery</h2>
<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>


</div>
</section>
<section>
<div class="section-content">
</div>

</section>

<section>
<div class="section-content">
</div>
</section>
</div>


<script>
const oneVW = window.innerWidth * 0.01;
console.log(oneVW + "px");
</script>


<?php get_footer(); // Loads footer.php ?>