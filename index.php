<?php
function letter($letter) {
	$letter_lengths = array(
		'a' => 13,
		'c' => 14,
		'e' => 14,
		'j' => 8,
		'n' => 14,
		'o' => 14,
		's' => 15,
		't' => 10,
		'x' => 13,
		'y' => 9,
		'dot' => 1
	);
	
	$stars = array(
		'small' => 2,
		'medium' => 4,
		'large' => 6,
		'xlarge' => 8
	);
	
	echo "\n<div class=\"constellation $letter\">";
	for ($i = 1; $i <= $letter_lengths[$letter]; $i++) {
		$randomstar = array_rand($stars);
		echo "\n<div class=\"star star$i $randomstar\" data-stellar-ratio=\"".$stars[$randomstar]*((1/rand(1,9)) + 1)."\"></div>";
	}
	echo "\n</div>\n";
}
?>
<!doctype html>
<html>
<head>
<title>Stellar.js</title>
<meta name="viewport" content="width=734" />

<meta content="Stellar.js" property="og:title" />
<meta content="Stellar.js" property="og:site_name" />
<meta content="http://markdalgleish.com/projects/stellar.js/" property="og:url" />
<meta content="website" property="og:type" />
<meta content="Parallax scrolling made easy. Precisely align elements and backgrounds. Add some simple data attributes to your markup, run $.stellar() - that's all you need to get started." property="og:description" />
<meta content='http://markdalgleish.com/projects/stellar.js/images/og-thumb.jpg' property='og:image' />

<link href='http://fonts.googleapis.com/css?family=Jockey+One' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" />

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
<body class="home" data-stellar-background-ratio="0.2">
<header>
	<h1><a href="">Stellar.js</a></h1>
	<nav>
		<ul>
			<li><a href="demos">Demos</a></li>
			<li><a href="docs">Docs</a></li>
			<li><a href="https://github.com/markdalgleish/stellar.js">Download</a></li>
		</ul>
	</nav>
</header>

<div id="forkme"><a href="https://github.com/markdalgleish/stellar.js">Fork me on GitHub</a></div>

<div class="main">
	<div class="section">
		<h2 data-stellar-offset-parent="true">
			<span class="text">Easy.</span>
			<?php
			letter('e');
			letter('a');
			letter('s');
			letter('y');
			letter('dot');
			?>
		</h2>
		<div class="text">
			<h3>Parallax has never been easier.</h3>
			<p>Add some simple data attributes to your markup, run <code>$.stellar()</code>.<br />
				That's all you need to get started. Scroll right to see Stellar.js in action.</p>
		</div>
	</div>
	<div class="section">
		<h2 data-stellar-offset-parent="true">
			<span class="text">Exact.</span>
			<?php
			letter('e');
			letter('x');
			letter('a');
			letter('c');
			letter('t');
			letter('dot');
			?>
		</h2>
		<div class="text">
			<h3>Precisely align elements and backgrounds.</h3>
			<p>All elements and backgrounds will return to their original position when they meet the edge of the screen&mdash;plus or minus your own optional offset.</p>
		</div>
	</div>
	<div class="section">
		<h2 data-stellar-offset-parent="true">
			<span class="text">Enjoy.</span>
			<?php
			letter('e');
			letter('n');
			letter('j');
			letter('o');
			letter('y');
			letter('dot');
			?>
		</h2>
		<div class="text">
			<h3>Try using Stellar.js for yourself today.</h3>
			<p>There's lots more to love. Plenty of configuration options, <a href="demos/ios.html">iOS support</a>, plus an easy-to-use plugin architecture. <a href="docs">Read the documentation to get started.</a></p>
		</div>
	</div>
</div>

<div class="credits">
	<div class="inner">
		<a href="http://twitter.com/markdalgleish"><img src="images/profile.jpg" /></a>
		Stellar.js is brought to you by<br />
		<strong>Mark Dalgleish</strong><br />
		<a href="http://twitter.com/markdalgleish">@markdalgleish</a>
		
		<div class="social">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://markdalgleish.com/projects/stellar.js/" data-text="Stellar.js - Parallax scrolling made easy" data-via="markdalgleish">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<g:plusone size="medium" href="http://markdalgleish.com/projects/stellar.js/"></g:plusone>
			<div class="fb-like" data-href="http://markdalgleish.com/projects/stellar.js/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-colorscheme="dark"></div>
		</div>
	</div>
</div>

<div class="planet" data-stellar-ratio="0.2" data-stellar-horizontal-offset="0"></div>
<div class="sun" data-stellar-ratio="0.065" data-stellar-horizontal-offset="0"></div>

<div id="debugOffsets">
	<div class="vertical-offset"></div>
	<div class="horizontal-offset"><span>Horizontal Offset (40px)</span></div>
</div>
<div id="debugOffsetParents">
	
</div>
<?php if ($_SERVER['HTTP_HOST'] == 'localhost') { ?><script src="js/jquery.min.js"></script>
<?php } else { ?><script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<?php }?>
<script src="js/stellar.js"></script>
<script src="js/script.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=202414269851578";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
  window.___gcfg = {lang: 'en-GB'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

</body>
</html>