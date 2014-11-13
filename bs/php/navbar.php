<?php
echo'<nav class="navbar navbar-inverse navbar-fixed-top">';
		echo'<div class="navbar-header">';
			echo'<a href="index.php" class="navbar-brand"><img src="img/fox.png"></a>';
		echo'</div>';
		echo'<div>';
		echo'<ul class="nav navbar-nav">';
			echo'<li><a href="index.php">Home</a></li>';
			echo'<li><a href="sonnwendfest.php">Sonnwendfest 2015</a></li>';
			echo'<li><a href="terminplan.php">Terminplan</a></li>';
				echo'<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Links <span class="caret"></span></a>';
					echo'<ul class="dropdown-menu">';
						echo'<li><a href="http://www.mittelhessenwetter.de/Duensberg-Webcam.webcam0.0.html">D&uuml;nsbergcam</a></li>';
						echo'<li><a href="http://www.msn.com/de-de/wetter?wealocations=wc:8252666&q=Biebertal" >Wetter</a></li>';
						echo'<li><a href="http://www.biebertalkirmes.de/" >BS Rodheim</a></li>';
						echo'<li><a href="http://www.burschenschaft-krumbach.de/" >BS Krumbach</a></li>';
						echo'<li><a href="http://www.bums-bieber.de/" >BS Bieber</a></li>';
						echo'<li><a href="http://www.rocknacht-fellingshausen.de/index.html" >ROCKnacht</a></li>';
						echo'<li><a href="http://www.landgasthofduensberg.de/" >Landgasthof zum D&uuml;nsberg</a></li>';
						echo'<li><a href="http://www.fellingshausen.de/" >Fellingshausen</a></li>';
					echo'</ul></li>';
			echo'<li><a href="downloads.php">Downloads</a></li>';
			echo'<li><a href="http://mangoon.spdns.de/bsgalerie" target="_blank">Bildergalerie</a></li>';
			echo'<li><a href="kontakt.php">Kontakt</a></li>';
			echo'<li><a href="impressum.php">Impressum</a></li>';
				echo'<li>';
					$cookie=$_COOKIE['bsfell'];
		              if($cookie=="d"){
		                 echo '<a href="m/index.php" title="BS Mobil" >Mobil</a>';
		              }
				echo'</li>';
			echo'</ul>';
		echo'</div>';
		echo'<div>';
			echo'<ul class="nav navbar-nav navbar-right">';
				echo'<li>';
					echo'<a href="terminplan.php">N&auml;chster Termin:&nbsp;';
						include('tpnext.php');
					echo'</a>';
				echo'</li>';
			echo'</ul>';
		echo'</div>';
echo'</nav>';
?>	