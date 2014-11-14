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