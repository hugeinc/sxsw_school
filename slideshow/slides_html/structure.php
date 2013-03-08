<div class="slide black invert">
	<h1 class="v-center bigger white">HTML Syntax.</h1>
</div>
<!-- syntax -->
<div class="slide">
	<h4>HTML</h4>
	<ul>
		<li>Tags</li>
		<li>Attributes</li>
		<li>Attribute values</li>
	</ul>
	<ul class="build no-bullet">
		<li>
<pre class="structure">
&lt;html> &lt;/html></pre>
		</li>
		<li>
<pre><a> Anchor Tag </a> </pre>
		</li>
		<li>
		Adding an attribute:
<pre class="structure">&lt;a <strong>href="http://www.hugeinc.com"</strong>> Anchor Tag &lt;/a> </pre>
		</li>
	</ul>
</div>

<div class="slide">
	<h4>Common Attributes</h4>
	<ul class="build no-bullet">
		<li>
<pre class="structure">
&lt;a <strong>href="http://www.hugeinc.com" target="_blank"</strong>>  &lt;/a></pre>
		</li>
		<li>
<pre class="structure">
&lt;div <strong>class="menu-sides"</strong>>  &lt;/div>
</pre>
		</li>
		<li>
<pre class="structure">
&lt;section <strong>id="menu-drinks" class="menu clearfix"</strong>>  &lt;/section>
</pre>
		</li>
		<li>
<pre class="structure">
&lt;img <strong>src="images/coyboy.jpg" alt="Cowboy" width="202" height="201"</strong> />
</pre>
		</li>
		
	</ul>
</div>

<div class="slide">
	<h4>Setting up your environment</h4>
	<ul class="build">
		<li>Create a new Folder that will contain your project. Call it <strong>holdens_web</strong></li>
		<li>Copy the folder called <strong>css</strong> into your holdens_web folder</li>
		<li>Copy the folder called <strong>image</strong> into your holdens_web folder</li>
		<li>Sublime Text / Notepad ++</li>
		<li>File -> New File</li>
		<li>Save as <strong>index.html</strong></li>
	</ul>
</div>


<div class="slide">
	<h4>What every page needs</h4>
	<ul class="no-bullet">
		<li>
<pre class="structure">
&lt;!doctype html>
&lt;html>
    &lt;head>
        &lt;meta charset="utf-8" />
        &lt;title>Holden's Hog Tie&lt;/title>
    &lt;/head>
    &lt;body>
        &lt;!-- visible part of the site goes here -->
    &lt;/body>
&lt;/html></pre>
		</li>
	</ul>
	<small class="demo magenta">( demo )</small>
</div>

<!-- doctype -->
<div class="slide">
	<h4>Document type declaration</h4>
	<ul class="build">
		<li><strong>A Document Type Declaration</strong>, or <strong>DOCTYPE</strong>, is an instruction that tells the browser what kind of document it is rendering.</li>
		<li>
		HTML5 Doctype:
<pre class="structure">
&lt;!doctype html>
</pre>
		</li>
	</ul>
</div>

<!-- types of tags -->
<div class="slide">
	<h4>Types of tags</h4>
	<ul class="">
		<li>Tags can define the general page structure</li>
		<li>Tags can define sections of a page</li>
		<li>Tags can define elements on a page</li>
	</ul>
</div>



<div class="slide">
	<h4>More tags</h4>
	<ul class="build no-bullet">
		<li>
		Working within the <strong>&lt;body> &lt;/body></strong> tags
<pre>
<nav>
    <ul>
        <li><a href="#">About Holden's</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Location</a></li>
        <li><a href="#">Lorem Ipsum</a></li>
    </ul>
</nav>
</pre>
		</li>
		<li>
<pre>
<header>
    <h1><span>Holden's Hog Tie</span></h1>
</header>
</pre>
		</li>
	</ul>

<?php include('demo_inline.php'); ?>
</div>


<div class="slide">
	<h4>Even more tags!</h4>
	<ul class="no-bullet">
		<li>
<pre>
<footer class="clearfix">
    <nav>
        <p>Holden's Hog Tie, 50 E Cesar Chavez St, Austin, TX (500) 867-5309</p>
        <ul>
            <li><a href="#">About Holden's</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="#">Lorem Ipsum</a></li>
        </ul>
    </nav>
</footer></pre>
		</li>
	</ul>	
<?php include('demo_inline.php'); ?>
</div>

<!--

<div class="slide">
	<h4>Even more tags!</h4>
	<ul class="build">
		<li>
		Headings
<pre class=""><h2>"No pork butts about it; The Best BBQ in Austin."<span>-Your Mom</span></h2></pre>
		</li>
		<li>
		Self closing tags
<pre><img src="images/cowboy.jpg" alt="Cowboy" width="202" height="201"></pre>
		</li>
	</ul>
</div>


-->
