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
			
	<main class="row-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<h1>Informationen zu deinem Browser</h1>
		<ul>
			<script>
				document.write("<li>Betriebssystem:&nbsp;" + navigator.platform
						+ "</li>");
				document.write("<li>Browser:&nbsp;" + navigator.appName + "("
						+ navigator.appCodeName + ")</li>");
				document.write("<ul><li>" + "Browser Version:&nbsp"
						+ navigator.appVersion + "</li>");
				switch (navigator.language) {
				case "de":
					document.write("<li>Sprache:&nbsp;Deutsch</li>");
					break;
				case "en":
					document.write("<li>Sprache:&nbsp;English</li>");
					break;
				}
				if(navigator.javaEnabled()){
					document.write("<li>Java Applets sind aktiviert!</li>");
				}else{
					document.write("<li>Java Applets sind deaktiviert!</li>");
				}
				document.write("</ul>");
				document.write("<li>Bildschirmaufl&ouml;&szlig;ung:&nbsp"
						+ screen.width + "x" + screen.height + "px</li>");
				document.write("<ul><li>Sichtbarer Bereich:&nbsp;"+window.innerWidth+"x"+window.innerHeight+"px</li>");
				document.write("<li>Farbtiefe:&nbsp;" + screen.colorDepth
						+ "bit</li></ul>");
			</script>
		</ul>
	</div>
	<div class="col-md-3"></div>
	</main>



<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</body>
</html>