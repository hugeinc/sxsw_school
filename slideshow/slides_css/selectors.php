<div class="slide black section">
	<h1 class="white">Selectors and Properties</h1>
</div>

<div class="slide image">
	<img src="images/html-console.png" width="900" />
</div>

<div class="slide">
	<h4>Including CSS - <small>Internal</small></h4>
	<pre class="structure">
&lt;head>
     ...
     &lt;style type="text/css">
          /* This is a comment
          for an h1 style */
          h1 {
          	color: red;
          }
     &lt;/style>
&lt;/head>
 </pre>
<?php include('demo_inline.php') ?>
</div>

<div class="slide black invert">
	<h1 class="white">CSS Selectors</h1>
</div>

<div class="slide">
	<h4>Tag</h4>
	<p>The tag selector is used to apply styles to certain tags</p>
	<pre>
h2 {
	color: red;
}
h4 {
	color: blue;
}
	<h2>This will be red</h2>
	<h4>This will be blue</h4>
	<h2>This will also be red</h2>
	<h4>This will also be blue</h4>
</pre>
	<p>The above css would make the text of every h2 tag red and every h4 tag blue </p>
</div>

<div class="slide">
	<h4>Tag</h4>
	<pre>
h2 {
    color: red;
}
h4 {
    color: blue;
}
	</pre>
	<?php include('demo_inline.php') ?>
</div>

<div class="slide">
	<h4>ID - <strong>#</strong></h4>
	<p>Any html tag, can be given a unique id attribute. The id selector,<strong>#</strong>, is used to target an element with a specified id</p>
	<pre>
#main-content {
	color: magenta;
}
#terms {
	color: green;
}

<div id="main-content">This text will be magenta</div>
<h1 id="terms">This text will be green</h1>
	</pre>
	<?php include('demo_inline.php') ?>
</div>

<div class="slide">
	<h4>Class - <strong>.</strong></h4>
	<p>Any html tag can be given a class attribute with multiple values non-unique values. The class selector,<span style="font-size: 40px;"><strong>.</strong></span>,is used to target all elements with a specified class</p>
	<pre>
.sub-header {
     font-size: 29px;
}
.red-text {
     color: red;
}
.big-text {
	font-size: 40px;
}
		<h2 class="sub-header">This text will be big</h2>
		<p class="red-text">This text will be red</p>
		<p class="red-text big-text">This text will be big AND red</p>
	</pre>
<?php include('demo_inline.php') ?>
</div>

<div class="slide">
	<h4>Attribute - <tag><strong>[attribute]</strong></h4>
	<p>Selects an html tag that has the attribute</p>
	<pre>
p[title] {
	color: blue
}
	<p>This text will be black</p>
	<p title="brisket">This text will be blue</p>
</div>
<div class="slide">
	<h4>Attribute equals- <tag><strong>[attribute="value"]</strong></h4>
	<p>Selects an html tag that has an attribute with the specified value</p>
	<pre>
p[title="waffles"] {
	color: blue
}
	<p>This text will be black</p>
	<p title="brisket">This text will be black</p>
	<p title="waffles">This text will be blue</p>
</div>

<div class="slide">
	<h4>Attribute value list contains- <tag><strong>[attribute~="value"]</strong></h4>
	<p>Selects an html tag that has an attribute whose value is the specified value or is a space delimited list containing that value </p>
	<pre>
p[title~="chicken"] {
	color: blue
}
	<p>This text will be black</p>
	<p title="waffles">This text will be black</p>
	<p title="waffles chicken">This text will be blue</p>
</div>


<div class="slide">
	<h4>Descendant - <strong>Ancestor1 [Ancestor2...] Target</strong>.</h4>
	<p>Using a descendant is actually using multiple selectors where the last selector, the element to be styled, is
		a descendant of all the selectors before it.</p>
	<pre>
#address p .city {
	color: silver;
}
.pork li {
	color: salmon;
}
	</pre>
</div>

<div class="slide">
	<h4>Descendant cont.</h4>
	<pre>
#address p .city {
	color: silver;
}
<div id="address" >
	This text will be black
	<p>
		This text will be black
		<span class="city" >This text will be silver</span>
			This text will be black
	</p>
</div>
	</pre>
</div>
<div class="slide">
	<h4>Descendant cont.</h4>
	<pre>
.pork li {
	color: salmon;
}
<div class="pork">
	<ul>
		<li>This text will be salmon</li>
	</ul>
</div>
<div>
	<ul>
		<li>This text will be black</li>
	</ul>
</div>
	</pre>
</div>
<!-- <div class="slide">
	<h4>Child - <strong> > </strong></h4>
	<p>

</div>
<div class="slide">
	<h4>Adjacent Sibling - <strong> + </strong></h4>

</div>
<div class="slide">
	<h4>General Sibling - <strong> ~ </strong></h4>

</div>
<div class="slide">
	<h4>Psuedo Class - <strong>:</strong>Psuedo</h4>css3 except for link,visited hover,active,focus
	<p>Psuedo classes

</div>
<div class="slide">
	<h4>Combining Selectors</h4>

	#ID li.class > li.odd


</div> -->


