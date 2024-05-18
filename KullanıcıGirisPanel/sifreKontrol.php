<?php
session_start();
if($_POST["k_adi"] == "Kullanici_01" && $_POST["sifre"] == "php123")    
{  
 $_SESSION["oturum_sahibi"] = $_POST["k_adi"];
 header("location:index.php");   
}
else
{    
 header("location:index.php");    
}
?>