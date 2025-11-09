
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<title>Local Decorator in Bath | Professional Painting &amp; Decorating Services</title>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5G8TPVPMBQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5G8TPVPMBQ');
</script>
<link rel="preload"
      as="image"
      href="<?php echo get_stylesheet_directory_uri(); ?>/img/blue-wallpaper.jpg"
      type="image/jpeg"
      fetchpriority="high" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

 
<meta name="keywords" content="local decorator, local decorator Bath, painter Bath, professional decorator Bath, painting and decorating Bath, interior decorator Bath, home decorating Bath, residential painting Bath, property renovation Bath, Bath decorator services">


<meta name="description" content="Local decorator in Bath providing expert painting and decorating services with quality craftsmanship, attention to detail, and customer satisfaction.">




<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.svg" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png" />
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest" />



<script>
document.documentElement.classList.remove('no-js');
document.documentElement.classList.add('js-enabled');
</script>
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>	
<?php wp_body_open(); ?>
<header>
	<div id="sticky-header">
		<div class="inner-width-constraint">

			<div id="header-el-wrap">

				<img id="logo-header"  src="<?php echo get_template_directory_uri(); ?>/img/logo-transbg.svg" alt="LOgo">
				<div id="header-text">
					<h1 id="header-title-name">SAMUEL JOSEPH</h1>
					<h2 id="header-title-service">DECOR</h2>
				</div>
			</div>


			<div id="header-el-2-contact">

				<a class="emailLink header-link" href="#">
					<span class="mobile-label mobile-header-display">Email</span>
        			<span class="desktop-label desktop-header-display"><!--JS--></span>
				</a> 

				<a href="#" class="callLink header-link">
        			<span class="mobile-label mobile-header-display">Telephone</span>
       				<span class="desktop-label desktop-header-display"><!--JS--></span>
      			</a>

			</div>
		</div>
	</div><!-- #masthead -->
	</header><!-- #masthead -->




<script>
/*Size logo to text and sibling padding */
document.addEventListener("DOMContentLoaded", function () {
  const headerText = document.getElementById("header-text");     // text wrap (2 lines)
  const logo = document.getElementById("logo-header");           // logo image
  const stickyHeader = document.getElementById("sticky-header"); // entire sticky header
  const jsTopPaddingEls = document.querySelectorAll(".js-top-padding");

  if (!headerText || !logo || !stickyHeader) return;

  function updateLayout() {
    const textHeight = headerText.offsetHeight;
    const headerHeight = stickyHeader.offsetHeight;

    // 1️⃣ Make logo same height as header text
    logo.style.height = textHeight + "px";
    logo.style.width = textHeight + "px"; // keep square

    // 2️⃣ Add top padding to sections based on full header height
    jsTopPaddingEls.forEach(el => {
      el.style.paddingTop = (headerHeight + 20) + "px";
    });
  }

  // Initial setup
  updateLayout();

  // Observe header-text and sticky-header for dynamic changes
  const resizeObserver = new ResizeObserver(() => updateLayout());
  resizeObserver.observe(headerText);
  resizeObserver.observe(stickyHeader);

  // Also update on window resize just in case
  window.addEventListener("resize", updateLayout);
});
</script>
