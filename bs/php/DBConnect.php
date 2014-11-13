<?php
         $host="mangoon.spdns.de";
         $user="bs";
         $pw="bs";
         $db="bsfell";
         $verbindung=mysql_connect($host, $user,$pw);
         mysql_query("USE $db;");
?>