<?php
ob_start("ob_gzhandler");
include("php/UserAgent.php");
?>
<!DOCTYPE html>
<html lang="de">

<head>
<title>BS - Kontakt</title>
<?php
	include('php/head.php');
?>
</head>
<body>
<?php
	include('counter.php');
	include('php/navbar.php');
?>
	
	
	<main class="row-fluid">
		<div class="col-md-4">
			<p>
			<h2>1. Vorsitzender</h2>
			</p>
			<p>
			<h2>2. Vorsitzender</h2>
			<h4>Jan Failing</h4>
			<adress>
				35444 Biebertal<br />
				Am Weidenborn 4<br />
				<a href="mailto:j.failing@freenet.de">E-Mail: j.failing@freenet.de</a><br />
			</adress>
			</p>
		</div>
		<div class="col-md-4">
			<p>
			<h2>1. Kassenwart</h2>
			<h4>Christoph Sauer <a href="kontakt/qrcs.jpg">QR</a></h4>
			<adress>
				35444 Biebertal<br />
				Rodheimerstra&szlig;e 28<br />
				<a href="tel:+491718686473">Handy: +491718686473</a><br />
				<a href="mailto:kassenwart@bs.fellingshausen.de">E-Mail: kassenwart@bs.fellingshausen.de</a><br />
			</adress>
			</p>
			<p>
			<h2>2. Kassenwart</h2>
			<h4>Felix Hartmann</h4>
			</p>
		</div>
		<div class="col-md-4">
			<p>
			<h2>1. Schriftf&uuml;hrer</h2>
			<h4>Jan Krauskopf</h4>
			<adress>
				35444 Biebertal<br />
				Am Gro&szlig;acker 19<br />
				<a href="mailto:jan-krauskopf@t-online.de">E-Mail: jan-krauskopf@t-online.de</a><br />
			</adress>
			</p>
			<p>
			<h2>2. Schriftf&uuml;hrer</h2>
			</p>
		</div>
	</main>

<script src="http://code.jquery.com/jquery-1.11.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10133377; 
var sc_invisible=1; 
var sc_security="72ad9c82"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="shopify
analytics ecommerce" href="http://statcounter.com/shopify/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/10133377/0/72ad9c82/1/"
alt="shopify analytics ecommerce"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</body>
</html>