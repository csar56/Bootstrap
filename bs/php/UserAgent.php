<?php

$cookie=$_COOKIE["bsfell"];
if($cookie=="d"){}
else{
         $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
         $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
         $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
         $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
         $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
         
$wiphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");
                  if ($iphone || $android || $palmpre || $ipod || $wiphone || $berry == true)
                  {
                           //header('Location: ../m/index.php');
                           //OR
                           echo "<script>window.location='../m/index.php'</script>";
                  }
}

?>