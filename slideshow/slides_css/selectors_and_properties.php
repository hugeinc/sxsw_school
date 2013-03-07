
<div class="slide">
	<h4>CSS - <small>Basic Syntax</small></h4>
	<ul class="build no-bullet">
		<li>
			CSS is generally written like this:
			<pre>
selector {
    property-name: value;
    property2: value;
}</pre>
		</li>
		<li>
			can also be written on a single line:
			<pre>
selector {property-name: value;property2: value;}</pre>
		</li>
	</ul>
</div>

<div class="slide">
	<h4>Including CSS</h4>
	<ul class="build">
		<li>Inline <small>:(</small> </li>
		<li>Internal</li>
		<li>External/Linked <strong>preferred</strong></li>

	</ul>
</div>

<!-- <div class="slide">
	<h4>Including CSS - <small>Inline</small></h4>
	<pre>
<div style="color: blue;">This text will be blue
</div>	
	</pre>
	<div style="color: blue;">This text will be blue
	</div>	
</div> -->

<div class="slide">
	<h4>Including CSS - <small>Internal</small></h4>
	<pre class="structure">
&lt;head>
     ...
     &lt;style type="text/css">
          nav {
               <strong>text-decoration</strong>: underline;
               <strong>height</strong>: 40px;
               <strong>margin-top</strong>: 20px;
               <strong>margin-right</strong>: auto;
               <strong>margin-bottom</strong>: 70px;
               <strong>margin-left</strong>: auto;
          }
     &lt;/style>
     ...
&lt;/head>
 </pre>
<?php include('demo_inline.php') ?>
</div>

<div class="slide">
	<h4>Including CSS - <small>External/Linked</small></h4>
	<pre class="structure">
&lt;head>
    ...
    &lt;link type="style/css" href="css/reset.css" />
    &lt;link type="style/css" href="css/global.css" />
    ...
&lt;/head>
</pre>
<p>Now, copy your style from your internal css into your global.css file</p>
<?php include('demo_inline.php') ?>
</div>


<div class="slide">
	<h4> CSS - <small>selectors and properties</small></h4>
	<pre class="structure">
nav {
   <strong>text-decoration</strong>: underline;
   <strong>height</strong>: 40px;
   <strong>margin-top</strong>: 20px;
   <strong>margin-right</strong>: auto;
   <strong>margin-bottom</strong>: 70px;
   <strong>margin-left</strong>: auto;
}
	</pre>
	<ul>
		<li>nav is an example of a tag selector</li>
	</ul>
</div>

<div class="slide">
	<h4> CSS - <small>selectors and properties</small></h4>
<pre>
header {
    background-image: url('../images/header-bg.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    width: 1400px;
    height: 777px;
    margin: 0px auto;
}</pre>
	<ul class="build no-bullet">
		<li style="list-style-type:none !important;"> 
<pre class="build">
header {
    background: url('../images/header-bg.jpg') no-repeat top left;
    width: 1400px;
    height: 777px;
}</pre>
		</li>
	</ul>
<?php include('demo_inline.php') ?>
</div>

