<?php
ob_start("ob_gzhandler");
include("php/UserAgent.php");
?>
<!DOCTYPE html>
<html lang="de">

<head>
<title>BS - Terminplan</title>
<?php
	include('php/head.php');
?>
<link rel="stylesheet" href="css/terminplan.css">

</head>
<body>
<?php
	include('php/navbar.php');
?>

<main class="row-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<?php
		include('php/tpg.php');
	?>
	</div>
	<div class="col-md-3"></div>
</main>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
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