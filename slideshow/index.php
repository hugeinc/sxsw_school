<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get Schooled</title>
	
	<meta charset="utf-8">
	
	<!-- <script src="libs/js/prettify.js"></script> -->
	<link rel="stylesheet" type="text/css" href="libs/css/slideshow.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + 'Open+Sans:regular,semibold,italic,italicsemibold|Droid+Sans+Mono" />
	<script src="libs/js/slides.js"></script>
	
	<!-- references to custom stuff goes here. -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	
</head>

<body class="hidden">
	
	<div class="slides layout-regular template-huge">
		
		<div class="slide">
			<h1 class="thin-pink-bottom-border">
			Huge School
			</h1>
			<p class="smaller">4-day, intensive, Web Development course.</p>
			<p class="smaller">March 9 - 12, 2013</p>
		</div>
		
		<div class="slide magenta invert white-border">
			<h1 class="v-center bigger white">Get started.</h1>
		</div>
		
		<div class="slide">
			<h4>What we will cover in this course</h4>
			<ul class="build">
				<li>HTML</li>
				<li>Photoshop <small><strong>slicing!</strong></small></li>
				<li>CSS</li>
				<li>JavaScript</li>
			</ul>
		</div>
		
		<?php include('slides_html/structure.php') ?>
		
		<?php include('slides_css/declaration.php') ?>

		<?php include('slides_js/nowforjavascript.php') ?>		

<?php 
/* HTML
----------------------------------------------------------------------------------------------- */
?>

		<div class="slide magenta invert white-border">
			<h1 class="v-center bigger white">HTML.</h1>
		</div>
		
		<div class="slide">
			<h4>HTML Concepts</h4>
			<ul class="build">
				<li>Doctypes</li>
				<li>Syntax</li>
				<li>Tags / self-closing</li>
				<li>Semantic markup</li>
				<li>Validation</li>
				<li>more...</li>
			</ul>
		</div>
		
		
		
		
		
		
		
		
<?php 
/* CSS
----------------------------------------------------------------------------------------------- */
?>

		<div class="slide magenta invert white-border">
			<h1 class="v-center bigger white">CSS.</h1>
		</div>

		<?php include('slides_css/realworld.php') ?>
		
		

<?php 
/* Javascript
----------------------------------------------------------------------------------------------- */
?>	
		
		<div class="slide magenta invert white-border">
			<h1 class="v-center bigger white">Javascript.</h1>
		</div>

		
		<div class="slide">
			<h4>Operators.</h4>
			<p>Similar to math operands, operators let you "assign" values, add, subtract, etc.</p>
			<p>Many types of operators, including:</p>
			<ul>
				<li>Arithmetic (ie, +, -, %, ++, --)</li>
				<li>Assignment (ie, =, *=, -=)</li>
				<li>Comparison (ie, ==, !=, >)</li>
				<li>Logical (&&, ||, !)</li>
				<li>String (+ and +=)</li>
		</div>

		<div class="slide">
			<h4>Important ones.</h4>
			<h5>=</h5>
			<p>Assignment operator.  Sets a variable to a value (including another variable, or function, etc.)</p>
			<h5>
		</div>
		
		<div class="slide">
			<h4>Keywords.</h4>
			<p>AKA: Reserved words.</p>
			<p>Words that have a defined meaning, and cannot be changed by the programmer.</p>
			<ul>
				<li>Indicates that the ECMA Spec designates "special behavior"</li>
				<li>All statements, control statements, etc. are "keywords" or "reserved words".</li>
			</ul>
		</div>
		
		<div class="slide">
			<h4>Statements.</h4>
			<h5>Keywords + Syntax == Statement.</h5>
			<p>Let's start with something basic.</p>
<pre>
var blah = foo;
</pre>
			<ul>
				<li><strong>var</strong> indicates that we are declaring a variable.</li>
				<li><strong>blah</strong> is the name of the variable.</li>
				<li><strong>=</strong> indicates that we are setting the variable to its initial value (OPTIONAL)</li>
				<li><strong>foo</strong> is the initial value.</li>
			</ul>
		</div>
		
		<div class="slide">
			<p>We can easily declare variables such as:</p>
<pre>var blah;</pre>
			<p>or</p>
<pre>var blah = 3;</pre>
			<p>or</p>
<pre>var blah = 'foo';</pre>
		</div>
		
		<div class="slide">
			<p>Open up a new html file and save it.</p>
			<p>Type the following, save, and load in your browser:</p>
<pre><script type="text/javascript">var blah;</script></pre>
			<p>Now in your console, type "blah" and hit enter.</p>
			<p>Now change set "blah" to 3 and inspect it in the console again.</p>
			<p>Now, type in something else, such as "foo", and inspect again.</p>
			<h4>Failure to declare variables leads to unexpected results (and thus errors in strict mode).  Declare your variables!</h4>
		</div>
		
		<div class="slide">
			<h4>Back to statements ..</h4>
			<p>Another basic statement is the "function" statement, which declares a function.<p>
			<p class="smaller">A function is a type of statement that does something.</p>
<pre>
function initialize(){
	var blah = 5;
	console.log(blah);
}
</pre>
			<p class="smaller">(this one just prints out the value of "blah" in console)</p>
			<p>To call it, add this:</p>
<pre>initialize();</pre>
		</div>    
		
		<div class="slide">
			<p>A vaguely more useful function:</p>
<pre>
function initialize(){
	var blah = 5;
	for (var i = 0; i <= blah; i++) {
		console.log(i);
	}
}
</pre>
			<p>...which introduces the "for" statement.</p>
			<p>Essentially: "for each value of i starting at 0 and ending where i is less than or equal to the value of variable blah"</p>
			<p>If you run this function, it should print in the console, 0, 1, 2, 3, 4, 5.</p> 
		</div>
		
		<div class="slide">
			<h4>Loop Statements.</h4>
			<p>A type of statement, which starts a "loop".  Basically, something that evaluates until whatever conditions you give it return false.</p>
			<p>In our previous example, we are printing out the value of "i" until i <= blah returns false. </p>
			<p><strong>This means the loop stops when the value of i becomes equal to the value of blah.</strong></p>
			<p>Useful when consuming data until the data is gone, or until an outside condition is met.</p>
		</div>
		
		<div class="slide">
			<h4>Loop Statements, continued.</h4>
			<p><strong>do ... while</strong></p>
			<p>Let's rewrite our previous function using this type of loop statement.</p>
<pre>
var blah = 5;
var i = 0;
do {
	console.log(i);
	i++;
} 
while (i <= blah);
</pre>
		</div>
		
		<div class="slide">
			<h4>Loop Statements, last one promise!</h4>
<pre>
var blah = 5;
var i = 0;
while (i <= blah) {
	console.log(i);
	i++;
} 
</pre>
		</div>
		
		<div class="slide">
			<h4>So what's the difference?</h4>
			<p class="smaller">hint .. check out the order we are writing things in!</p>
			<p><strong>do ... while</strong> always executes once (because the condition is after the body).</p>
			<p><strong>while</strong>, the conditions are first, so it may never execute.</p>
			<p><strong>for</strong> loop, indicates that we are doing something "generative" in our conditions (in this case, adding one each time)</p>
		</div>
		
		<div class="slide">
			<h4>Conditional Statements.</h4>
			<p><strong>if</strong></p>
			<p>If such and such is true, do something!</p>
<pre>
var blah = 5;
if (blah == 5) {
	console.log('true!');
}    
</pre>
		</div>
		
		<div class="slide">
			<p><strong>if ... else</strong></p>
			<p>Similar to an if statement, but also does something if the condition is false.</p>
<pre>
var blah = 5;
if (blah == 5) {
	console.log('true!');
} else {
	console.log('false =(');
}      
</pre>
			<p>You can also do an <strong>if else if</strong> with a separate condition.</p>
		</div>
		<!-- end ksex js slides -->
		
		<div class="slide black invert white-border">
		<h1 class="v-center bigger white">Questions?</h1>
		</div>
		
		<div class="slide">
		<h1 class="v-center bigger magenta">Done.</h1>
		</div>
		
	</div> <!-- /slides -->
</body>
</html>