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
	<div class="col-md-1"></div>
	<div class="col-md-5">
	<h1>Git</h1>
	<table border="2" class="table">
		<tr>
			<th>Befehl</th>
			<th>Beschreibung</th>
		</tr>
		<tr>
			<td>git init</td>
			<td>Ordner initialisieren</td>
		</tr>
		<tr>
			<td>git add <b>*</b></td>
			<td>F&uuml;gt alle Dateien im aktuellen Ordner zum Gitprojekt hinzu</td>
		</tr>
		<tr>
			<td>git commit -m "Eigene Nachricht"</td>
			<td>Best&auml;tigt die hinzugef&uuml;gten Dateien</td>
		</tr>
		<tr>
			<td>git status</td>
			<td>Gibt den Status der Dateien aus</td>
		</tr>
		<tr>
			<td>git remote add origin <b>URL</b></td>
			<td>Verbindet Verzeichnis mit dem Server</td>
		</tr>
		<tr>
			<td>git push -u origin master</td>
			<td>L&auml;dt Dateien in das Gitprojekt hoch</td>
		</tr>
		<tr>
			<td>git checkout -- <b>dateiname</b></td>
			<td>Macht die &auml;nderung einer Datei r&uuml;ckg&auml;ngig</td>
		</tr>
	</table>
	</div>
	
	<div class="col-md-5">
	<h1>CloudControl</h1>
	<table border="2" class="table">
		<tr>
			<th>Befehl</th>
			<th>Beschreibung</th>
		</tr>
		<tr>
			<td>cctrlapp <b>projektname</b> push</td>
			<td>L&auml;dt Dateien ins CloudControl Projekt hoch</td>
		</tr>
		<tr>
			<td>cctrlapp <b>projektname</b> deploy</td>
			<td>Schaltet neue Dateien im Projekt frei</td>
		</tr>
	</table>
	</div>
	<div class="col-md-1"></div>
	</main>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//christophsauer.cloudcontrolled.com/Bootstrap/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//christophsauer.cloudcontrolled.com/Bootstrap/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</body>
</html>