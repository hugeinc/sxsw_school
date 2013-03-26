<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get Schooled</title>

	<meta charset="utf-8">

	<!-- <script src="libs/js/prettify.js"></script> -->
	<link rel="stylesheet" type="text/css" href="libs/css/slideshow.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + 'Open+Sans:regular,semibold,italic,italicsemibold|Droid+Sans+Mono" />
	<script src="libs/js/slides.js"></script>

	<!-- references to custom stuff goes here. -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>

<body class="hidden">

	<div class="menu-container"><ul class="menu no-bullet"></ul></div>

	<div class="slides layout-regular template-huge">


	<?php
	/* CSS
	----------------------------------------------------------------------------------------------- */
	?>

		<div class="slide magenta invert white-border">
			<h1 class="v-center bigger white">CSS.</h1>
		</div>

		<?php include('slides_css/what_is_css.php') ?>

		<?php include('slides_css/selectors_and_properties.php') ?>

		<?php include('slides_css/selectors.php') ?>

		<?php include('slides_css/properties.php') ?>

		<?php include('slides_css/advanced_selectors.php') ?>

		<?php include('slides_css/box_model.php') ?>

		<?php include('slides_css/positioning.php') ?>

		<?php include('slides_css/block_inline.php') ?>

		<?php include('slides_css/floats.php') ?>

		<?php include('slides_css/fonts.php') ?>

		<?php include('slides_css/specificity.php') ?>

		<?php include('slides_css/specificity2.php') ?>

		<?php include('slides_css/specificity3.php') ?>

		<?php include('slides_css/cascading.php') ?>

		<?php include('slides_css/inheritance.php') ?>

		<?php include('slides_css/media_queries.php') ?>

	</div> <!-- /slides -->
</body>
</html>
