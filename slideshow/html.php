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
		/* HTML
		----------------------------------------------------------------------------------------------- */
		?>

		<div class="slide magenta invert white-border section">
			<h1 class="v-center bigger white">HTML.</h1>
		</div>


		<?php include('slides_html/whatishtml.php') ?>

		<?php include('slides_html/structure.php') ?>

		<?php include('slides_html/semantics.php') ?>

		<?php include('slides_html/semantics_why.php') ?>

		<?php include('slides_html/forms.php') ?>

		<?php include('slides_html/forms_types.php') ?>

	</div> <!-- /slides -->
</body>
</html>
