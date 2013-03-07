<div class="slide">
	<h4>Selectors</h4>

	<p>Choose which elements receive a style.</p>
	<pre >
	p {
		font-size: 14px;
	}</pre>
</div>

<div class="slide">
	<h4>Selectors</h4>

	<p>Choose which elements receive a style.</p>
	<pre class="structure">
	<strong>p</strong> {
		font-size: 14px;
	}</pre>
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
	Basic Selectors
</div>
<div class="slide">
	<h4>ID - <strong>#</strong></h4>
	<p>Any html tag, can be given a unique id attribute. The id selector,<strong>#</strong>, is used to target an element with a specified id</p>
	<pre>
		#main-content {
			height: 500px;
		}
		#headline {
			color: green;
		}

		<div id="mainContent">This div will be 500 pixels tall</div>
		<h2 id="headline">This text will be green</h2>
	</pre>
</div>

<div class="slide">
	<h4>Class - <strong>.</strong></h4>
	<p>Any html tag can be given a class attribute with multiple values non-unique values. The class selector,<span style="font-size: 40px;"><strong>.</strong></span>,is used to target all elements with a specified class</p>
	<pre>
		.big-text {
			font-size: 40px;
		}
		.red-text {
			color: red;
		}
		<p class="big-text">This text will be big</p>
		<p class="red-text">This text will be red</p>
		<p class="big-text red-text">This text will be big AND red</p>
	</pre>

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
		width: 155px;
	}
	.specials li {
		color: white;
	}
	</pre>
</div>

<div class="slide">
	<h4>Descendant cont.</h4>	
	<pre>
	#address p .city {	
		color: green;
	}
	<div id="address" >
		This text will be black
		<p>
			This text will be black
			<span class="city" >This text will be green</span>
				This text will be black
		</p>
	</div>	
	</pre>
</div>
<div class="slide">
	<h4>Descendant cont.</h4>	
	<pre>
	.specials li {
		color: white;
	}
	<div class="specials">
		<ul>
			<li>This text will be white</li>
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

<div class="slide">
	<h4>More Information</h4>
http://www.w3.org/TR/selectors/#selectors
</div>
