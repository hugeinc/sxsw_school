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
