<div class="slide black invert section">
	<h1 class="v-center white">Building the site out.</h1>
</div>


<div class="slide">
	<h4>Global styles.</h4>
<pre>
body {
	border-top: 5px #bc0505 solid;
	color: #666666;
}

nav,
header,
h1,
section,
.wrapper {
	width: 1000px;
	margin: 0 auto;
}

</pre>
</div>

<div class="slide">
<pre>

ul {
	padding: 0;
	margin: 0;
}
li {
	list-style: none;
}
</pre>
</div>
<div class="slide">
	<h4>The top area.</h4>

<pre>
<section id="content" class="clearfix">
	<h2>"No pork butts about it; The Best BBQ in Austin."<span>-Your Mom</span></h2>
	<div class="user-text">
	Lorem ipsum...
	<br />
	ipsum dolor s...
	</div>
	<img src="images/cowboy.jpg" alt="Cowboy" width="202" height="201" />
</section>
</pre>
</div>

<div class="slide">
	<h4>The css.</h4>

<pre>
#content {
	width: 1000px;
	background: #f9f9f9;
	padding: 0 200px 100px;
}
</pre>
</div>

<div class="slide">
<pre>
#content h2 {
	position: relative;
	top: -46px;
	background: url('sprites/logo.png') no-repeat top left;
	text-align: right;
	font-family: bevan, sans-serif;
	font-size: 26px;
	color: #333;
	padding-top: 165px;
}
</pre>
</div>

<div class="slide">
<pre>
#content h2 span {
	display: block;
	text-align: right;
	font-size: 18px;
	color: #d2d2d2;
}

#content img {
	margin-left: 30px;
	float: right;
}
</pre>
</div>

<div class="slide">
<pre>
.user-text {
	float: left;
	width: 670px;

	-moz-column-count: 2; /* Firefox */
	-webkit-column-count: 2; /* Safari and Chrome */
	column-count: 2;

	-moz-column-gap: 30px; /* Firefox */
	-webkit-column-gap: 30px; /* Safari and Chrome */
	column-gap: 30px;
}
</pre>
</div>

<div class="slide">
	<h4>The menus.</h4>
<pre>
<section id="menu-food" class="menu clearfix">
	<div class="menu-bbq"></div>
	<div class="menu-sides"></div>
</section>
</pre>
</div>

<div class="slide">
<pre>
#menu-food {
	margin: 50px auto 30px;
	color: #000;
	border-bottom: 2px #eaeaea solid;
	padding: 20px 0 0;
}
</pre>
</div>

<div class="slide">
	<h4>Back to floats ... </h4>
<pre>
.menu-bbq {
	width: 672px;
	border-right: 2px #eaeaea solid;
	float: left;
}

.menu-sides {
	float: left;
	width: 326px;
}
</pre>
</div>

<div class="slide">
	<h4>Menu BBQ.</h4>
	<p class="smaller">This goes in menu-bbq div</p>
<pre>
<h3><span>BBQ</span></h3>
<div class="column">
	<h4>Beef</h4>
	<ul>
		<li>Moist Brisket</li>
		<li>Beef Shoulder</li>
		<li>Beef Ribs<span>Available in 1/2 and Full Rack</span></li>
		<li>Boneless Prime Rib</li>
		<li>1/2 lb Burger</li>
	</ul>
</div>
</pre>
</div>

<div class="slide">
	<h4>Reusing styles.</h4>
	<p>You should notice that the menu items are all very similar.  This lets us use the same markup (with different content!) for all the menu items we are doing.</p>
</div>

<div class="slide">
	<h4>Some reusable css.</h4>
<pre>
#menu-food h3 {
	margin: 0 auto 80px;
}

.menu {
	text-align: center;
}

.menu h4 {
	font-family: sniglet, sans-serif;
	font-size: 38px;
	color: #bc0505;
	margin: 0 0 20px;
	text-transform: uppercase;
}
</pre>
</div>

<div class="slide">
<pre>
.menu .column {
	width: 216px;
	margin: 0 60px;
	float: left;
}

.menu ul {
	margin: 0 0 50px;
}
</pre>
</div>

<div class="slide">
<pre>
.menu li {
	font-family: bevan, sans-serif;
	font-size: 18px;
	text-align: center;
	margin: 0 0 15px;
	color: #000;
}
.menu li span {
	display: block;
	font-size: 14px;
	font-family: Arial, sans-serif;
}
</pre>
</div>

<div class="slide">
	<h4>Fill out the other menu content, using the markup we already have.</h4>
	<p>You should notice that it's looking pretty good already!</p>
</div>

<div class="slide">
	<h4>Non-reusable</h4>
<pre>
.menu-bbq h3 {
	background: url('sprites/header-bbq.gif') no-repeat top left;
	height: 84px;
	width: 190px;
	margin: 0 auto;
}

.menu-bbq h3 span {
	display: none;
}

.menu-bbq ul:nth-child(2) {
	height: 250px;
}
</pre>
</div>

<div class="slide">
<pre>
.menu-sides h3 {
	background: url('sprites/header-sides.gif') no-repeat top left;
	height: 84px;
	width: 203px;
	margin: 0 auto;
}

.menu-sides h3 span {
	display: none;
}
</pre>
</div>
