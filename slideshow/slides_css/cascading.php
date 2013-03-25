<div class="slide section">
	<h4>Cascading</h4>
	<p>The CSS cascade assigns a weight to each style rule. When several rules apply, the one with the greatest weight takes precedence.</p>
	<ul class="build no-bullet">
		<li>
			<ul>
				<li>1. Browser default</li>
				<li>2. External style sheet</li>
				<li>3. Internal style sheet (in the head section)</li>
				<li>4. Inline style (inside an HTML element)</li>
			</ul>
		</li>
		<li>So, an inline style (inside an HTML element) has the highest priority, which means that it will override a style defined inside the <head> tag, or in an external style sheet, or in a browser (a default value).</li>
	</ul>
</div>