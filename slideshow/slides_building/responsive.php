<div class="slide black invert section">
	<h1 class="v-center white">Responsive!</h1>
</div>

<div class="slide">
	<h4>Before we start.</h4>
	<p>How we built the nav is fine, but it doesn't look super great in between the static size, and the first breakpoint.</p>
	<p>Let's add a few rules to our header area to look better in the in-between sizes.</p>
	<p>Add another css file called <strong>responsive.css</strong> and link it in the header.  We can put all our responsive-specific stuff here.</p>
</div>

<div class="slide">
<pre>
nav {
	width: 80%;
}

nav li {
	text-align: center;
}

nav li a {
	float: none;
}
</pre>
</div>

<div class="slide">
<pre>
header {
	background-position: center center;
	background-size: cover;
	width: 100%;
}
</pre>
</div>

<div class="slide">
	<h4>Our larger breakpoint.</h4>
	<p>Take the responsive stuff you've already done and stick it in responsive.css.</p>
	<p>We are also going to scale some content (vs static widths) in order to work on smaller tablets.</p>
<pre>
#content,
#menu-food,
#google-maps {
	width: 90%;
	padding: 0px 5% 5%;
}
.wrapper {
	width: 90%;
}
</pre>
</div>

<div class="slide">
<pre>
/* Update nav and header for smaller screens */
nav {
	margin: 20px auto 20px;
}

nav li a {
	font-size: 12px;
}

</pre>
</div>

<div class="slide">
<pre>
#content h2 {
	top: 10px;
	padding-top: 225px;
	margin-bottom: 20px;
}

#content img {
	display: none;
	float: none;
}

.user-text {
	width: 100%;
}
</pre>
</div>

<div class="slide">
	<h4>Resizing many columns.</h4>
	<p>So too many columns don't fit so hot on smaller screens.  Let's resize them so they display better.</p>
<pre>
.menu-bbq {
	width: 60%;
}

.menu .column {
	width: 40%;
	margin: 4%;
}

.menu-sides {
	width: 35%;
	margin-left: 4%;
}
</pre>
</div>

<div class="slide">
	<h4>Google maps area.</h4>
	<p>Embedded maps don't make a lot of sense on devices where you can click any address and then open it in a better, native app.</p>
	<p>Let's hide the maps entirely, and also resize this area for better display.</p>
</div>

<div class="slide">
<pre>
#map_canvas {
	display: none;
	width: 0px;
	height; 0px;
}

.menu-drinks {
	width: 60%;
}

#google-maps {
	margin-top: 0px;
}
</pre>
</div>

<div class="slide">
	<h4>Resizing fonts.</h4>
<pre>
#menu-food h3 {
	margin: 0 auto 20px;
}

.menu h4 {
	font-size: 24px;
}

.menu li {
	font-size: 16px;
	margin: 0px 0px 6px;
}
</pre>
</div>

<div class="slide">
	<h4>Smaller devices or screens.</h4>
	<p>Let's get rid of multiple columns and just have one long, scrolly page.</p>
<pre>
@media screen and (max-width: 480px) {

	/* all css goes here!*/

}
</pre>
</div>

<div class="slide">
	<h4>Reset the floats.</h4>
<pre>
.menu-bbq,
.menu-sides,
.menu-drinks {
	width: 100%;
	float: left;
}
.menu-bbq {
	border-right: 0px;
}
</pre>
</div>

<div class="slide">
<pre>
#google-maps {
	height: auto;
	margin-bottom: 30px;
}
#address {
	top: 0px;
	width: 90%;
	padding: 5px;
	margin-right: 0px;
	height: 230px;
}
</pre>
</div>

<div class="slide">
<pre>
#address h3 {
	background: none;
	height: auto;
	width: auto;
	margin: 10px 0px;
}

#address h3 span {
	display: block;
	font-family: sniglet, sans-serif;
	font-size: 24px;
	color: #bc0505;
	line-height: 34px;
	text-align: center;

}
</pre>
</div>

<div class="slide">
<pre>
#address a {
	width: 130px;
	margin: 7px;

}
.user-text {
	-moz-column-count: 1; /* Firefox */
	-webkit-column-count: 1; /* Safari and Chrome */
	column-count: 1;
}
</pre>
</div>

<div class="slide">
	<h4>Questions?</h4>
	<p>We now have a full website (minus some supplemental areas), totally responsive-ified!</p>
</div>








