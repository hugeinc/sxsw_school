

<div class="slide black">
	<h1 class="white">CSS Properties</h1>
</div>

<div class="slide">
  <h4>Including CSS - <small>External/Linked</small></h4>
  <pre class="structure">
&lt;head>
    ...
    &lt;link rel="stylesheet" type="text/css" href="css/reset.css" />
    &lt;link rel="stylesheet" type="text/css" href="css/global.css" />
    ...
&lt;/head>
</pre>
  <ul class="build">
    <li>Create a new file save it as <strong>global.css</strong>, place it inside the css folder</li>
    <li>Copy your css rule from your internal css into global.css</li>
  </ul>
<?php include('demo_inline.php') ?>
</div>

<div class="slide">
	<h4>CSS properties</h4>
	<ul class="build no-bullet">
		<li>Use CSS to modify properties of HTML elements</li>
		<li>
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
		</li>
	</ul>
</div>


<div class="slide">
  <h4> CSS - <small>properties</small></h4>
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






<div class="slide">
<pre>
footer {
    color: #d56161;
    background: #bc0505;
    padding: 15px 0;
    font-size: 14px;
}
</pre>
</div>