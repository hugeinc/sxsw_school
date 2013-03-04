<div class="slide">
	<h4>Media Queries.</h4>
	<p>Consists of a media type (such as screen, print, device) and various css rules to be applied.</p>
	<p>Allows a developer to target either devices or size-based breakpoints (or both) to customize a website's layout and appearance.</p>
	<p><strong>Media queries are one very important tool for creating a responsive design.</strong></p>	
</div>

<div class="slide">
	<h4>Targeting a device.</h4>
	<ul>
		<li><strong>tv</strong>: for fancy tv owners</li>
		<li><strong>print</strong>: for print stylesheets</li>
		<li><strong>screen</strong>: for almost everything else!</li>
	</ul>
</div>		

<div class="slide">
	<h4>Targeting a feature.</h4>
	<ul>
		<li><strong>min-color</strong>: if you require a certain number of colors for a style</li>
		<li><strong>max-device-width</strong>: to target a certain device size (note: only for devices!)</li>
		<li><strong>max-width</strong>: for all devices or browser needs</li>
	</ul>
</div>	


<div class="slide">
	<h4>Why target a feature or size?</h4>
	<p>Retina display.  You can target based on <strong>-webkit-min-device-pixel-ratio: 2</strong> to serve up higher quality images.</p>
	<p>Any small device.  Target based on a max or min size to provide a more natural layout on small devices ie: <strong>max-width: 480px</strong>.</p>
</div>	

<div class="slide">
	<h4>Example.</h4>
<pre>
@media screen and (max-width: 480px) {
	.menu-bbq {
		width: 100%;
		float: left;
}
</pre>
	<p>Targets all screens (including browser) that are smaller than 480px.</p>
	<p>Useful for phones or smaller tablets.</p>
	<p><strong>Normal css goes into any media query.  Anything you can use normally can be put in a media query!</strong></p>
</div>
