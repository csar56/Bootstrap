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
                    if($tage==0){
                         echo "Heute ist das $fest";
                    }else if($tage==1){
                         echo "Morgen ist das $fest";
                    }else if($tage>=30){
                    	$wochen=0;
                    	while($tage>7){
                    		$tage=$tage-7;
                    		$wochen++;
                    	}
						if($tage==0){
							echo "Noch $wochen Wochen bis zum $fest";
						}else{
							echo "Noch $wochen Wochen und $tage Tage bis zum $fest";
						}
                    }else{
                         echo "Noch $tage bis zum $fest";
                    }
           }
         }
         mysql_close($verbindung);

?>