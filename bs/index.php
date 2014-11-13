<?php
ob_start("ob_gzhandler");
include("php/UserAgent.php");
?>
<!DOCTYPE html>
<html lang="de">

<head>
<title>BS Fellingshausen</title>
<?php
	include('php/head.php');
?>
<script src="js/gruppenbild.js"></script>
</head>
<body>
<?php
	include('counter.php');
	include('php/navbar.php');
?>
<main class="row-fluid">
	<div class="col-md-12" style="text-align:center;"><a  href="#" onclick="cI()"><img src="img/bg.jpg" id="bg" alt="Gruppenfoto BS F&uuml;chse Fellingshausen, Fotograf: Volker Mattern" title="Gruppenfoto BS F&uuml;chse Fellingshausen, Fotograf: Volker Mattern" /></a></div>
</main>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
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