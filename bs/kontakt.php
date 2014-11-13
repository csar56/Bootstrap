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
			<h4>Christoph Sauer</h4>
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
	<!-- GoStats JavaScript Based Code -->
<script type="text/javascript" src="http://gostats.de/js/counter.js"></script>
<script type="text/javascript">_gos='monster.gostats.de';_goa=476293;
_got=5;_goi=1;_gol='statistik';_GoStatsRun();</script>
<noscript><a target="_blank" title="statistik" 
href="http://gostats.de"><img alt="statistik" 
src="http://monster.gostats.de/bin/count/a_476293/t_5/i_1/counter.png" 
style="border-width:0" /></a></noscript>
<!-- End GoStats JavaScript Based Code -->
</body>
</html>