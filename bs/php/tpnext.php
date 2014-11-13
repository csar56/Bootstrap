<?php

         include("DBConnect.php");

         $anfrage="select thema, datum from TerminplanGross limit 1";
         $ergebnis=mysql_query($anfrage);
         $zeilen=mysql_num_rows($ergebnis);
         $spalten=mysql_num_fields($ergebnis);
         while($zeile=mysql_fetch_object($ergebnis)){
			echo $zeile->thema;
			if($zeile->datum!=''){
				echo '&nbsp;am&nbsp;';
				echo $zeile->datum;
				echo '&nbsp;';
			}
         }
         mysql_close($verbindung);

?>