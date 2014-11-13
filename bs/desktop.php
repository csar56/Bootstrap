<?php
        $url=$_SERVER['HTTP_HOST'];
        setcookie("bsfell","d",time()+(3600*2), "/", "$url");
        echo "<script>window.location='index.php'</script>";
?>