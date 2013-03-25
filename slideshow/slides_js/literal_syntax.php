<div class="slide invert black section">
	<h1 class="white">Literal Syntax.</h1>
</div>

<div class="slide">
	<h4>Literal Syntax</h4>
	<p>An object literal is a list of zero or more pairs of property names and associated values of an object, enclosed in curly braces ({}).</p>
	<pre>
var object = {
    foo: 1,
    "bar": "some string"
};
</pre>
	<p>Properties can be accessed using dot and bracket notation.</p>
	<pre>
object.foo = object.foo + 1; //dot notation
object["foo"] = object["foo"] + 1; //bracket notation
	</pre>
</div>

<div class="slide">
	<p>When a function is used as an object property, it is called a method. Like properties, methods can also be specified in object literal notation.</p>
	<pre>
var object = {
    sum: function(foo, bar) {
        return foo + bar;
    }
};
	</pre>
	<p>Methods can also be invoked using dot and bracket notation.</p>
	<pre>
object.sum(1, 2);
object["sum"](1, 2);
	</pre>

</div>
<div class="slide">
	<p>A full Object Literal Syntax example.</p>
			<pre class="full">
var DEMO = DEMO || {};
DEMO.global = {
	init: function(){
	    DEMO.global.print();
	},
	print: function() {
	    var print = document.getElementById('print_button');

            print.onclick = function () {
	        window.print();
            };
	}
};
// using window ready is better than DOM ready
window.onload = function () {
    DEMO.global.init();
};
			</pre>

</div>
<div class="slide">
	<p>Literal vs. Classic</p>
			<pre class="full">
var candies = new Array();
candies.push('Snickers', 'Butterfinger', 'Twix');
var goodies = ['Munchos', 'Funyons', 'Cheetos']; //literal
console.log(candies);
console.log(goodies);
var kitten = new Object();
kitten.meow = function() { alert('meow'); };
kitten.monthsOld = 4;
var puppy = {
        bark: function() {
                alert('yap');
        },
        monthsOld: 6
}
kitten.meow();
puppy.bark();
console.log(kitten);
console.log(puppy);
			</pre>

</div>
