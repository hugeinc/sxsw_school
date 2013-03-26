<div class="slide section">
  <h4>Positioning CSS</h4>
  <p>The CSS positioning properties allow you to position an element. It can also place an element behind another, and specify what should happen when an element's content is too big. There are four different positioning methods.</p>
  <ul class="build">
    <li><strong>Static</strong></li>
    <li><strong>Fixed</strong></li>
    <li><strong>Relative</strong></li>
    <li><strong>Absolute</strong></li>
  </ul>
</div>

<div class="slide">
  <h4>Static</h4>
  <p>HTML elements are positioned static by default. A static positioned element is always positioned according to the normal flow of the page.</p>
  <h4>Fixed</h4>
  <p>Element positioned relative to the browser window.</p>
  <pre>
div {
  position:fixed;
  top:30px;
  right:5px;
}
  </pre>
</div>
<div class="slide">
  <h4>Relative</h4>
  <p>Element is positioned relative to its normal position.</p>
  <pre>
div { position:relative; left:-20px; }
  </pre>
  <h4>Absolute</h4>
  <p>Element is positioned relative to the first parent element that has a position other than static.</p>
  <pre>
div { position:absolute; top:150px; }
  </pre>
</div>
<div class="slide">
  <h4>Overlapping Elements</h4>
  <p>The z-index property specifies the stack order of an element, an element can have a positive or negative stack order.</p>
  <pre>
div {
  position:absolute;
  left:0px;
  top:0px;
  z-index:-1;
}
  </pre>
</div>