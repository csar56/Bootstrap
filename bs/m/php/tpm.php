<?php

         include("DBConnect.php");

         $anfrage="select thema, ort, zeit, datum, tage from TerminplanMobil";
         $ergebnis=mysql_query($anfrage);
         $zeilen=mysql_num_rows($ergebnis);
         $spalten=mysql_num_fields($ergebnis);

         while($zeile=mysql_fetch_object($ergebnis)){
		 		
		 	echo '<div class="col-md-2">';
		 		echo '<h3>';		 	
		 			echo $zeile->thema;
		 		echo '</h3>';
		 			if($zeile->datum!=''){
		 				echo 'Datum:&nbsp;';
		 					echo $zeile->datum;
		 					echo '<br />';
		 			}
		 			if($zeile->zeit!=''){
		 				echo 'Zeit:&nbsp;';
		 					echo $zeile->zeit;
		 					echo '<br />';
		 			}
		 			if($zeile->ort!=''){
		 				echo 'Treffpunkt:&nbsp;';
		 					echo $zeile->ort;
		 					echo '<br />';
		 			}
			echo '</div>';
		 	
		 }
         mysql_close($verbindung);
?>