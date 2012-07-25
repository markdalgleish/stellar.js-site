<!doctype html>
<html>
<head>
<title>Stellar.js - Documentation</title>
<meta name="viewport" content="width=734" />
<link href='http://fonts.googleapis.com/css?family=Jockey+One' rel='stylesheet' type='text/css'>
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21855678-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body class="docs" data-stellar-background-ratio="0.2">
<header>
	<h1><a href="../">Stellar.js</a></h1>
	<nav>
		<ul>
			<li><a href="../demos">Demos</a></li>
			<li><a href="../docs" class="current">Docs</a></li>
			<li><a href="https://github.com/markdalgleish/stellar.js">Download</a></li>
		</ul>
	</nav>
</header>

<div id="forkme"><a href="https://github.com/markdalgleish/stellar.js">Fork me on GitHub</a></div>

<div class="main">
	
	<div class="section">
		<h3>Getting Started</h3>
		<p>Stellar.js is a jQuery plugin that provides parallax scrolling effects to any scrolling element. The first step is to run <code>.stellar()</code> against the element:</p>
		<pre><code>// For example:
$(window).stellar();
// or:
$('#main').stellar();
</code></pre>
		<p>If you're running Stellar.js on 'window', you can use the shorthand:</p>
		<pre><code>$.stellar();</code></pre>
		<p>This will look for any parallax backgrounds or elements within the specified element and reposition them when the element scrolls.</p>
	</div>
	
	<div class="section">
		<h3>Parallax Elements</h3>
		<p>If you want elements to scroll at a different speed, add the following attribute to any element with a CSS position of <code>absolute</code>, <code>relative</code> or <code>fixed</code>:</p>
		<pre><code>&lt;div data-stellar-ratio="2"&gt;</code></pre>
		<p>The ratio is relative to the natural scroll speed, so a ratio of 0.5 would cause the element to scroll at half-speed, a ratio of 1 would have no effect, and a ratio of 2 would cause the element to scroll at twice the speed.</p>
		<p>If a ratio lower than 1 is causing the element to appear jittery, try setting its CSS position to <code>fixed</code>.</p>
	</div>
	
	<div class="section">
		<h3>Parallax Backgrounds</h3>
		<p>If you want an element's background image to reposition on scroll, simply add the following attribute:</p>
		<pre><code>&lt;div data-stellar-background-ratio="0.5"&gt;</code></pre>
		<p>As with parallax elements, the ratio is relative to the natural scroll speed. For ratios lower than 1, to avoid jittery scroll performance, set the element's CSS 'background-attachment' to <code>fixed</code>.</p>
	</div>
	
	<div class="section">
		<h3>Configuring Offsets</h3>
		<p>Stellar.js' most powerful feature is the way it aligns elements.</p>
		<p>All elements will return to their original positioning when their offset parent meets the edge of the screen&mdash;plus or minus your own optional offset. This allows you to create intricate parallax patterns very easily.</p>
		<p>Confused? <a href="../#show-offsets">See how offsets are used on the Stellar.js home page.</a></p>
		<p>To modify the offsets for all elements at once, pass in the options:</p>
		<pre><code>$.stellar({
  horizontalOffset: 40,
  verticalOffset: 150
});</code></pre>
		<p>You can also modify the offsets on a per-element basis using the following data attributes:</p>
		<pre><code>&lt;div data-stellar-ratio="2"
     data-stellar-horizontal-offset="40"
     data-stellar-vertical-offset="150"&gt;</code></pre>
	</div>
	
	<div class="section">
		<h3>Configuring Offset Parents</h3>
		<p>By default, offsets are relative to the element's offset parent. This mirrors the way an absolutely positioned element behaves when nested inside an element with a relative position.</p>
		<p>As with regular CSS, the closest parent element with a position of <code>relative</code> or <code>absolute</code> is the offset parent.</p>
		<p>To override this and force the offset parent to be another element higher up the DOM, use the following data attribute:</p>
		<pre><code>&lt;div data-stellar-offset-parent="true"&gt;</code></pre>
		<p>The offset parent can also have its own offsets:</p>
		<pre><code>&lt;div data-stellar-offset-parent="true"
     data-stellar-horizontal-offset="40"
     data-stellar-vertical-offset="150"&gt;</code></pre>
		<p>Similar to CSS, the rules take precedence from element, to offset parent, to JavaScript options.</p>
		<p>Confused? <a href="../#show-offset-parents">See how offset parents are used on the Stellar.js home page.</a></p>
		<p>Still confused? <a href="../#show-offset-parents-default">See what it looks like with its default offset parents.</a> Notice how the alignment happens on a per-letter basis? That's because each letter's containing <code>div</code> is its default offset parent.</p>
		<p>By specifying the <code>h2</code> element as the offset parent, we can ensure that the alignment of all the stars in a heading is based on the <code>h2</code> and not the <code>div</code> further down the DOM tree.</p>
	</div>
	
	<div class="section">
		<h3>Configuring Scroll Positioning</h3>
		<p>You can define what it means for an element to 'scroll'. Whether it's the element's scroll position that's changing, its margins or its CSS3 'transform' position, you can define it using the <code>scrollProperty</code> option:</p>
		<pre><code>$('#gallery').stellar({
  scrollProperty: 'transform'
});</code></pre>
		<p>This option is what allows you to run <a href="../demos/ios.html">Stellar.js on iOS.</a></p>
		<p>You can even define how the elements are repositioned, whether it's through standard top and left properties or using CSS3 transforms:</p>
		<pre><code>$('#gallery').stellar({
  positionProperty: 'transform'
});</code></pre>
		<p>Don't have the level of control you need? <a href="#scroll-property-plugin">Write a plugin!</a></p>
		<p>Otherwise, you're ready to get started!</p>
	</div>
	
	<div class="section" id="configuration">
		<h3>Configuring Everything</h3>
		<p>Below you will find a complete list of options and matching default values:</p>
		<pre><code>$.stellar({
  // Set scrolling to be in either one or both directions
  horizontalScrolling: true,
  verticalScrolling: true,

  // Set the global alignment offsets
  horizontalOffset: 0,
  verticalOffset: 0,

  // Select which property is used to calculate scroll.
  // Choose 'scroll', 'position', 'margin' or 'transform',
  // or <a href="#scroll-property-plugin">write your own 'scrollProperty' plugin</a>.
  scrollProperty: 'scroll',

  // Select which property is used to position elements.
  // Choose between 'position' or 'transform',
  // or <a href="#position-property-plugin">write your own 'positionProperty' plugin</a>.
  positionProperty: 'position',

  // Enable or disable the two types of parallax
  parallaxBackgrounds: true,
  parallaxElements: true,

  // Hide parallax elements that move outside the viewport
  hideDistantElements: true,

  // Set how often the viewport size is detected
  viewportDetectionInterval: 1000,

  // Customise how elements are shown and hidden
  hideElement: function($elem) { $elem.hide(); },
  showElement: function($elem) { $elem.show(); }
});</code></pre>
	</div>
	
	<div class="section" id="scroll-property-plugin">
		<h3>Writing a Scroll Property Plugin</h3>
		<p>Out of the box, Stellar.js supports the following scroll properties:<br />'scroll', 'position', 'margin' and 'transform'.</p>
		<p>If your method for creating a scrolling interface isn't covered by one of these, you can write your own. For example, if 'margin' didn't exist yet you could write it like so:</p>
		<pre><code>$.stellar.scrollProperty.margin = {
  getTop: function($element) {
    return parseInt($element.css('margin-top'), 10) * -1;
  },
  setTop: function($element, val) {
    $element.css('margin-top', val);
  },

  getLeft: function($element) {
    return parseInt($element.css('margin-left'), 10) * -1;
  },
  setLeft: function($element, val) {
    $element.css('margin-left', val);
  }
}</code></pre>
		<p>Now, you can specify this scroll property in Stellar.js' configuration.</p>
		<pre><code>$.stellar({
  scrollProperty: 'margin'
});</code></pre>
	</div>
	
	<div class="section" id="position-property-plugin">
		<h3>Writing a Position Property Plugin</h3>
		<p>Stellar.js has two methods for positioning elements built in: 'position' for modifying its <code>top</code> and <code>left</code> properties, and 'transform' for using CSS3 transforms.</p>
		<p>If you need more control over how elements are positioned, you can write your own setter functions. For example, if 'position' didn't exist yet, it could be written as a plugin like this:</p>
		<pre><code>$.stellar.positionProperty.position = {
  setTop: function($element, newTop, originalTop) {
    $element.css('top', newTop);
  },
  setLeft: function($element, newLeft, originalLeft) {
    $element.css('left', newLeft);
  }
}</code></pre>
		<p>Now, you can specify this position property in Stellar.js' configuration.</p>
		<pre><code>$.stellar({
  positionProperty: 'position'
});</code></pre>
	</div>
	
	<div class="section">
		<h3>Questions or comments?</h3>
		<p><a href="http://twitter.com/markdalgleish">Contact me on Twitter.</a> I'd love to hear from you :)</p>
	</div>
	
	<div class="credits">
		<div class="inner">
			<a href="http://twitter.com/markdalgleish"><img src="../images/profile.jpg" /></a>
			Stellar.js is brought to you by<br />
			<strong>Mark Dalgleish</strong><br />
			<a href="http://twitter.com/markdalgleish">@markdalgleish</a>
		</div>
	</div>

</div>

<div class="planet" data-stellar-ratio="0.25" data-stellar-horizontal-offset="0"></div>
<div class="sun" data-stellar-ratio="0.065" data-stellar-horizontal-offset="0"></div>

<?php if ($_SERVER['HTTP_HOST'] == 'localhost') { ?><script src="../js/jquery.min.js"></script>
<?php } else { ?><script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<?php }?>
<script src="../js/stellar.js"></script>
<script src="../js/script.js"></script>
<script src="../js/prettify.js"></script>

</body>
</html>