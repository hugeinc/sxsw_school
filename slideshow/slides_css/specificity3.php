<div class="slide">
	<h4>Specificity</h4>
	<ul class="build no-bullet">
		<li>
<pre class="prettyprint">
/* A little more specific */
.public p {
    font-family: Georgia;
}
</pre>
		</li>
		<li>
<pre class="prettyprint">
/* Pretty specific */
.public .introduction {
	font-family: "Courier New", monospace;
}
</pre>
		</li>
		<li>
<pre class="prettyprint">
/* Very specific */
#main-content p {
    font-family: "Times New Roman";
}
</pre>
		</li>
	</ul>
</div>

<div class="slide">
	<ul class="build">
		<li style='font-family:"Garamond";'>Garamond</li>
		<li style='font-family:Helvetica,Arial,sans-serif;'>Helvetica</li>
		<li style='font-family:Georgia;'>Georgia</li>
		<li style='font-family:"Courier New";'>Courier New</li>
		<li style='font-family:"Times New Roman";'>Times New Roman</li>
	</ul>
</div>