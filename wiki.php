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
			<div class="col-md-2"></div>
			<div class="col-md-8"><h1>Wikipedia Stichwortsuche:</h1>
			
			<form id="searchbox" class="searchbox" action="http://de.wikipedia.org/wiki/Spezial:Suche" name="searchbox">
				<label for="search">Suche:</label>
				<input  id ="search" tabindex="0" class="searchboxInput" type="text" dir="ltr" size="50" placeholder="Jetzt Suchen!" value="" name="search"></input>
        		
        		<input class="searchboxGoButton" type="submit" value="Artikel-Suche" name="go"></input>
        		<input class="searchboxSearchButton" type="submit" value="Volltextsuche" name="fulltext"></input>
			</form>
		<br />
		<a href="http://wave.webaim.org/report#/http://christophsauer.cloudcontrolled.com/wiki.php"><img src="http://wave.webaim.org/img/wavelogo.png" alt="Wave Webaim" title="Wave Webaim Logo" height="64px" /></a>
			
			
			
			</div>
			<div class="col-md-2"></div>
		</div>
	</main>



<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</body>
</html>