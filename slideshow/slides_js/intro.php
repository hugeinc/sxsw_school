
<div class="slide magenta invert white-border section">
	<h1 class="v-center bigger white">Javascript.</h1>
</div>

<div class="slide">
	<h4>Javascript.</h4>
	<h5>Javascript is a robust programming language, interpreted by all modern browsers, that allows developers to create dynamic websites.</h5>
	<p>Javascript...</p>
	<ul class="build">
		<li>Is Object-oriented</li>
		<li>Allows access to the DOM</li>
		<li>Creates dynamic websites!</li>
	</ul>
</div>

<div class="slide section">
	<h4>What is Object Oriented?</h4>
	<p>Object oriented is a programming language design paradigm where everything can be encapsulated in "objects".</p>
	<p>Instead of coding a set of instructions to happen in a row, object oriented programming allows you to model real-world objects and their various properties.</p>
	<p><strong>Why is this useful?</strong> Objects are closely linked with their properties, so instead of copying a bunch of step by step actions, you can just recreate the object elsewhere.</p>
</div>

<div class="slide section">
	<h4>What is the DOM? (briefly)</h4>
	<h5>Document Object Model.</h5>
	<p>An API for html or xml documents that allows developers to access parts of the page as "objects".</p>
	<p>Using javascript, you can inspect or change the various "properties" of divs, forms, tags, etc.</p>
<pre>
document.getElementById('heading').innerHTML = 'New heading!';
</pre>
</div>

<div class="slide section">
	<h4>Inspecting.</h4>
	<p>In addition to inspecting html elements and css properties, you can inspect javascript in the dev tools "console" tab.</p>
	<p>If you click on the console tab, and type "document" and hit enter, you will see an "object" that represents the DOM of the current page.</p>
	<p>To inspect more specific things from your own javascript files, you can use the function "console.log()" to print things out for yourself.</p>
</div>