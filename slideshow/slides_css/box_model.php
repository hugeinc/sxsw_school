<style type="text/css">
    #box-model{
        background: url('images/css-box-model.gif') #FFF  center 110px no-repeat;
    }
    .bottom {
    	margin: 400px 0 0;
    }
</style>
<div id="box-model" class="slide section">
	<h4>Box Model</h4>
	<p class="bottom">All HTML elements can be considered as boxes. In CSS, the term "box model" is used when talking about design and layout.</p>
</div>
<div class="slide">
	<ul>
		<li>The CSS box model is essentially a box that wraps around HTML elements, and it consists of: margins, borders, padding, and the actual content.</li>
		<li>
			<pre>
Margin - Clears an area around the border.
Border - A border that goes around the padding and content.
Padding - Clears an area around the content.
Content - The content of the box, where text and images appear.
</pre>
		</li>
		<li>*Important: When you set the width and height properties of an element with CSS, you just set the width and height of the content area. To calculate the full size of an element, you must also add the padding, borders and margins.</li>
	</ul>
</div>