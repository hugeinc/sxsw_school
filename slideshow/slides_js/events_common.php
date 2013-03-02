		<div class="slide">
			<h4>Events.</h4>
			
			Most Common events
		
			<ul class="build">
				<li><label>Load</label></li>
				<li><label>Click</label><button id="events_button">Click me!</button></li>
				<li><label>Mouseover</label><button id="events_mouseover" style="padding: 10px;">Mouse is out!</button></li>
				<li><label>Change</label><select id="events_change"><option value="ribs">Ribs</option><option value="brisket">Brikset</option><option value="mac_n_cheese">Mac & Cheese</option></select></li>
				<li>And lots more!</li>
			</ul>		
			
			<script type="text/javascript">
			
				var events_button = document.getElementById('events_button');
				
				events_button.onclick = function () { 
					alert('Hello, World!');
				};
				
				var events_mouseover = document.getElementById('events_mouseover');
				
				events_mouseover.onmouseover = function () { 
					events_mouseover.innerHTML = 'Mouse is In!'
				};
				events_mouseover.onmouseout = function () { 
					events_mouseover.innerHTML = 'Mouse is Out!'
				};

				var events_change = document.getElementById('events_change');
				
				events_change.onchange = function (val) { 
					alert(events_change.options[events_change.selectedIndex].value);
				};
			
			</script>
			
		</div>