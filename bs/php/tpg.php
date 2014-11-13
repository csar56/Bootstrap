<?php

         include("DBConnect.php");

         $anfrage="select thema, ort,datum, zeit, tage from TerminplanGross";
         $ergebnis=mysql_query($anfrage);
         $zeilen=mysql_num_rows($ergebnis);
         $spalten=mysql_num_fields($ergebnis);

         echo "<table id=\"terminplangross\" class=\"table table-hover\">";
         echo "<tr>";
         echo "<th align=\"center\">Datum</th>";
         echo "<th align=\"center\">Thema</th>";
         echo "<th align=\"center\">Ort</th>";
         echo "<th align=\"center\">Zeit</th>";
         echo "<th align=\"center\">In</th>";
         echo "</tr>";

         $i=0;
         while($zeile=mysql_fetch_object($ergebnis)){

         $zeit="$zeile->tage";
                         if($i==0 or $zeit==0){
                               if($zeit == 0){
                                 echo "<tr id=\"heute\">";
                               }else if($zeit==1){
                                 echo "<tr id=\"termin1\">";
                               }
                               else{
                                 echo "<tr id=\"termin1\">";
                               }
                         }else{
                                  echo "<tr>";
                         }

                         echo "<td>$zeile->datum</td>";
                         echo "<td>$zeile->thema</td>";
                         echo "<td>$zeile->ort</td>";
                         if(("$zeile->zeit")!=""){echo "<td>$zeile->zeit</td>";}else{echo "<td>&nbsp;</td>";}


                         if($i==0 or $zeit==0){
                               if($zeit == 0){
                                 echo "<td>Heute</td>";
                               }else if($zeit==1){
                                 echo "<td>Morgen</td>";
                               }
                               else{
                                 echo "<td id=\"termin1\">$zeile->tage&nbsp;Tagen</td>";
                               }
                         }else{
                                 echo "<td>$zeile->tage&nbsp;Tagen</td>";
                         }

                         echo "</tr>";

          $i++;
         }
         echo "</table>";
         mysql_close($verbindung);

?>