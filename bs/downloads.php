<?php
ob_start("ob_gzhandler");
include("php/UserAgent.php");
?>
<!DOCTYPE html>
<html lang="de">

<head>
<title>BS - Downloads</title>
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
	<div class="col-md-4"><h2>Eintrittserkl&auml;rung (Vollj&auml;hrig)</h2>
		<a href="doc="doc/Eintrittserklaerung.doc">Eintrittserkl&auml;rung(Word)</a><br />
		<a href="doc="doc/Eintrittserklaerung.pdf">Eintrittserkl&auml;rung(PDF)</a><br />
	</div>
	<div class="col-md-5"><h2>Eintrittserkl&auml;rung (nicht Vollj&auml;hrig)</h2>
		<a href="doc/Eintrittserklaerung_Eltern.doc">Eintrittserkl&auml;rung Eltern(Word)</a><br />
		<a href="doc/Eintrittserklaerung_Eltern.pdf">Eintrittserkl&auml;rung Eltern(PDF)</a><br />
	</div>
	<div class="col-md-3"><h2><a href="satzung.php">Satzung</a></h2>
		<a href="doc/Satzung.doc">Satzung (Word)</a><br />
		<a href="doc/Satzung.pdf">Satzung (PDF)</a><br />
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