<!DOCTYPE html>
<html lang="de">

<head>
	<title>Christoph Sauer</title>
		<?php
		include('php/head.php');
	?>

</head>
<body>
<?php
	include('php/navbar.php');
?>


	<main class="container">
		<div class="row-fluid">
			<div class="col-md-12">
			<a href="http://www.codecademy.com/csar56"><h1>Codecademy</h1></a>
			</div>
			
			<div class="col-md-6">
				Gource Video von dieser Seite<br />
				<video controls preload="auto" width="500" src="video/gource.webm"></video>
			</div>
			<div class="col-md-6">
				Gource Video von <a href="http://adf.ly/toBEr">BS Fellingshausen</a><br />
				<video controls preload="auto" width="500" src="video/BSFell.webm"></video>
			</div>
			<div class="col-md-6">
				<h2>Meine Pull Request</h2>
				<a href="https://github.com/csar56/Bootstrap/pulls">&Uuml;bersicht<br /></a>
				<a href="https://github.com/csar56/Bootstrap/pull/1">Pull Request</a>
			</div>
			<div class="col-md-6"><h2>Partner pull Request</h2>
				<a href="https://github.com/jplm">Partner</a><br />
				<a href="https://github.com/jplm/webeng2014/pulls?q=is%3Apr+is%3Aclosed">&Uuml;bersicht</a><br />
				<a href="https://github.com/jplm/webeng2014/pull/1">Pull Request</a><br />
				<a href="https://github.com/csar56/webeng2014">Fork</a><br />
			</div>
		</div>
	</main>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//christophsauer.cloudcontrolled.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//christophsauer.cloudcontrolled.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</body>
</html>