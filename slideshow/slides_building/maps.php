
<div class="slide section">
	<h4>Google Maps.</h4>
	<p>We are going to be integrating a full-width google map (with javascript!).  For now, let's just work on the style.</p>
<pre>
<section id="google-maps" class="clearfix">
	<div class="wrapper">
		<div id="address">
			Address stuff goes here
		</div>
	</div>
	<div id="map_canvas"></div>
</section>
</pre>
</div>

<div class="slide">
<pre>
#google-maps {
	margin-top: 100px;
	height: 450px;
	position: relative;
	width: 100%;
}

#map_canvas {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 450px;
}
</pre>
</div>

<div class="slide">
<pre>
#address {
	position: relative;
	top: 60px;
	z-index: 2;
	background: #fff;
	padding: 30px;
	width: 340px;
	height: 270px;
	float: right;
	margin-right: 85px;
	-webkit-box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.2);
	font-size: 14px;
}
</pre>
</div>


<div class="slide">
	<h4>The address area.</h4>
<pre>
<h3><span>Address</span></h3>
<hr />
<div>
	<strong>500 East Cesar Chavez St, Austin, TX</strong><br />
	Parking in Rear
</div>
<p><strong>Sunday - Thursday:</strong> 12:00 pm - 1:00 am</p>
<p><strong>Friday & Saturday:</strong> 10:30 am - 2:00 am</p>
<a href="#">Directions</a>
<a href="#">(500) 867 5309</a>
</pre>
</div>

<div class="slide">
<pre>
#address h3 {
	background: url('sprites/header-address.gif') no-repeat top left;
	height: 70px;
	width: 342px;
	margin: 0 auto 20px;
}

#address h3 span {
	display: none;
}

</pre>
</div>

<div class="slide">
<pre>
#address div {
	line-height: 20px;
	text-align: center;
	margin: 0 0 20px;
}

#address p strong {
	display: inline-block;
	width: 155px;
}
</pre>
</div>

<div class="slide">
<pre>
#address a {
	display: block;
	float: left;
	background: #bc0505;
	width: 161px;
	height: 41px;
	bottom: 0;
	margin: 33px 18px 0 0;
	font-family: bevan, sans-serif;
	text-decoration: none;
	color: #fff;
	text-align: center;
	line-height: 41px;
}
</pre>
</div>

<div class="slide">
<pre>
#address hr {
	margin: 10px auto;
	width: 100px;
	border: none;
	border-top: 1px #eaeaea solid;
}

#address a:last-child {
	margin-right: 0;
}
</pre>
</div>
