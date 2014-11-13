<?php
        ob_start("ob_gzhandler");
        $url=$_SERVER['HTTP_HOST'];
        setcookie("bsfell","m",time()-1, "/", "$url");
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Sonnwendfest 2015</title>
<?php
	include('php/head.php');
?>
</head>
<body>
<?php
	include('php/navbar.php');
?>


<main class="row-fluid">
	<div class="col-md-1">
		<h3>
		<?php
			include('php/Countdown.php');
		?>
		</h3>
	</div>
	<div class="col-md-11"><a href="../img/sonnwendfest2015.jpg" download="../img/sonnwendfest2015.jpg"><img src="../img/sonnwendfest2015k.jpg" width="100%" /></a></div>
</main>

	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
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