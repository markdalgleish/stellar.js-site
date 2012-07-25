<!doctype html>
<html>
<head>
<title>Stellar.js - Demos</title>
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
			<li><a href="../demos" class="current">Demos</a></li>
			<li><a href="../docs">Docs</a></li>
			<li><a href="https://github.com/markdalgleish/stellar.js">Download</a></li>
		</ul>
	</nav>
</header>

<div id="forkme"><a href="https://github.com/markdalgleish/stellar.js">Fork me on GitHub</a></div>

<div class="main">
	
	<div class="section">
		<h3>Demos</h3>
		<h4>Parallax Elements</h4>
		<p>The best demonstration of parallax elements is on the <a href="../">Stellar.js home page</a>. Other demos are listed below:</p>
		<h4><a href="backgrounds.html">Parallax Backgrounds</a></h4>
		<p>While the home page shows off parallax elements, Stellar.js also supports parallax backgrounds.</p>
		<h4><a href="ios.html">iOS (Using Scrollability)</a></h4>
		<p>Mobile Safari halts code execution during scroll so you can't use normal scroll events to animate. By using an iOS scrolling library we're able to bypass this limitation. In order to use Scrollability, Stellar.js is run against the scrolling element and the 'scrollProperty' option is set to 'transform'.</p>
	</div>
	
	<div class="section">
		<h3>Using Stellar.js on your site?</h3>
		<p><a href="http://twitter.com/markdalgleish">I'd love to hear about it!</a> Let me know and I might feature your site here.</p>
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
<div class="planet" data-stellar-ratio="0.27" data-stellar-horizontal-offset="0"></div>
<div class="sun" data-stellar-ratio="0.065" data-stellar-horizontal-offset="0"></div>

<?php if ($_SERVER['HTTP_HOST'] == 'localhost') { ?><script src="../js/jquery.min.js"></script>
<?php } else { ?><script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<?php }?>
<script src="../js/stellar.js"></script>
<script src="../js/script.js"></script>

</body>
</html>