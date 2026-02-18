<?php
/*
Template Name: Construction

*/
get_header(); // Loads header.php
?>
<div id="temp-container">
<p>Website Under Construction</p>
<img src="<?php echo get_template_directory_uri(); ?>/img/main-logo-2.svg" alt="Description of image">

<div id="contact">
        <a href="mailto:info@samueljoseph.uk"><span class="mobile-label">Email</span> <span class="desktop-label">info@sjhoney.co.uk</span></a> <a href="#" id="callLink"><span class="mobile-label">Telephone</span> <span class="desktop-label">+44 7932 877017</span></a>
      </div>
</div>
<script>
  const number = "+447932877017";
  const link = document.getElementById("callLink");
  link.href = "tel:" + number;
</script>

<style>
  /* Show 'Telephone' on small screens */
  .desktop-label {
    display: none;
  }

  /* On wider screens, show the number instead */
  @media (min-width: 1068px) {
    #contact {
  
  display: flex;
  justify-content: space-around; /* equal space around items */
  align-items: center;           /* vertical centering (optional) */
  width: 100%; 
    }
    .mobile-label {
      display: none;
}
    .desktop-label {
      display: inline;
    }
  }
</style>

<?php get_footer(); // Loads footer.php ?>