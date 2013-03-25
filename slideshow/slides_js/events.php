		<div class="slide invert black section">
			<h1 class="white">Events.</h1>
		</div>
		<div class="slide">
			<h4>Events.</h4>

			Javascript can listen for user interactions. These interactions are called "events".

			<div style="width: 100px; height: 85px; padding-top: 15px; border: 1px black solid; margin: 0 auto; text-align: center; cursor: pointer;" id="click_me">Click me!</div>

			<pre>
var element = document.getElementById('click_me');

element.onclick = function () {
	alert('Hello, World!');
};
			</pre>
		</div>


		<script type="text/javascript">

			var element = document.getElementById('click_me');

			element.onclick = function () {
				alert('Hello, World!');
			};

		</script>
