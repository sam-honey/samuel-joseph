
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">


<meta name="viewport" content="width=device-width, initial-scale=1">



	
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.svg" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png" />
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest" />
<?php
$foo =  get_stylesheet_directory_uri();;
echo "<script>console.log('test' + " . json_encode($foo) . ");</script>";
?>
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

		<img id="logo-header"  src="<?php echo get_template_directory_uri(); ?>/img/logo-symbol[master][expanded]trans.svg" alt="LOgo">
		
		<div id="header-text">
			<h1 id="header-title-name">SAMUEL JOSEPH</h1>
			<h2 id="header-title-service">DECOR</h2>
		</div>

	</div>

</div>
</div>
	</header><!-- #masthead -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const headerText = document.getElementById("header-text");
  const logo = document.getElementById("logo-header");

  if (!headerText || !logo) return;

  // Function to set logo height and width (square)
  function updateLogoSize(height) {
    logo.style.height = height + "px";
    logo.style.width = height + "px"; // keep square
  }

  // Initial sizing
  updateLogoSize(headerText.offsetHeight);

  // Observe text height changes dynamically
  const resizeObserver = new ResizeObserver(entries => {
    for (let entry of entries) {
      const newHeight = entry.contentRect.height;
      updateLogoSize(newHeight);
    }
  });

  resizeObserver.observe(headerText);
});
</script>
