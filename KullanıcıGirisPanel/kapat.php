<?php
 session_start();
 unset($_SESSION["oturum_sahibi"]);
 header("location:index.php");   
?>
