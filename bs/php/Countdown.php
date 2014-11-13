<?php
         $fest="Sonnwendfest";


         include("DBConnect.php");
         $anfrage="select tage from TerminplanGross where thema like '$fest'";
         $ergebnis=mysql_query($anfrage);
         $zeilen=mysql_num_rows($ergebnis);
         $spalten=mysql_num_fields($ergebnis);


         while($zeile=mysql_fetch_object($ergebnis)){
           $tage="$zeile->tage";
           if($tage>=0){
           echo "<h1 id=\"countdown\">";
                    if(&tage==0){
                         echo "Heute ist das $fest";
                    }else if($tage==1){
                         echo "Morgen ist das $fest";
                    }else{
                         echo "Noch tage bis zum $fest";
                    }
           echo "</h1>";

           }
         }
         mysql_close($verbindung);

?>