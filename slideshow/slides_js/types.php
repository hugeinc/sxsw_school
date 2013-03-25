
		<div class="slide black invert section">
			<h1 class="v-center bigger white">Data Types.</h1>
		</div>

		<div class="slide">
			<h4>Types.</h4>
			<p>In javascript, various kinds of variables are known as "types".  These types indicate what kind of value a variable or property can hold.</p>
			<p>A common type is "string", which is essentially any text that you'd be typing.</p>
		</div>

		<div class="slide">
			<h4>Strings.</h4>
			<p>"A sequence of characters".</p>
			<p>Used all over!  Grabbing user input, adding new user input, etc.</p>
			<p>Usually designated like so:</p>
<pre>
var string = 'this is a string!';
var string2 = "this is also a string!";
</pre>
		</div>

		<div class="slide">
			<h4>Numbers.</h4>
			<p>Numbers are numeric values.  Commonly used in conjunction with the arithmetic operators.</p>
<pre>
var number = 1;
console.log(number++);
console.log(4 + 2);
</pre>
		</div>

		<div class="slide">
			<h4>Arrays.</h4>
			<p>Arrays are a group of strings, numbers, arrays, or objects.</p>
<pre>
var things = [];

things.push('cars', 'planes', 'trains', 2);

console.log(things);
console.log(things.length);
</pre>
		</div>

		<div class="slide">
			<h4>Array properties.</h4>
			<ul class="build">
				<li>Integer-based keys.</li>
				<li>Length.</li>
			</ul>
			<h4>Array methods.</h4>
			<ul class="build">
				<li>push.  Add to an array.</li>
				<li>pop.  Remove the last element from array.</li>
				<li>sort, reverse, splice...</li>
				<li>forEach.  Call a function for each element.</li>
			</ul>
		</div>

		<div class="slide">
			<h4>Objects.</h4>
			<p class="smaller">The data type only.</p>
			<p>Objects are similar to arrays, but require "keys" for various elements.</p>
			<p>Instead of "car, planes, trains", you would have something like "car: corvette", "plane: bomber", "train: amtrak".</p>
<pre>
var things = {
	'car' : 'corvette',
	'plane' : 'bomber',
	'train' : 'amtrak'
};

console.log(things);
console.log(things.car);
</pre>
		</div>