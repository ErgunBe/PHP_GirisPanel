<?php
session_start();
if(isset($_SESSION["oturum_sahibi"]))
{
 echo "<b style='color:green'>Sayfamiza Hoşgeldin"
 .$_SESSION["oturum_sahibi"]."</br>";    
 echo '<a href="kapat.php" >Oturumu kapat</a>';
}
else
{
 echo "<style='color:danger'>Lütfen Oturum Açiniz </b>";
?>

<form name="kullanicigirisi" method="post" action="sifreKontrol.php">
<table bgcolor="lightblue" width="354" border="1" >
 <tr>
 <td width="150px" height="25px">Kullanici Adi</td>
 <td width="150px">
 <input type="text" name="k_adi" >
 </td>
 </tr>
 <tr>
 <td width="150px" height="25px">Şifre</td>
 <td width="150px">
 <input type="password" name="sifre" >
 </td>
 </tr>
 <tr>
 <td colspan="3">
 <input type="submit" value="Giriş Yap">
 <a href="oturumKapat.php" style="float:right"> Oturum Kapat </a>
 </td>
 </tr>
</table>
</form>

<?php

}
?>



<!-- <?php
session_start();
if(isset($_SESSION["oturum_sahibi"]))
{
 echo "<b style='color:green'>Sayfamiza Hoşgeldin"
 .$_SESSION["oturum_sahibi"]."</b>";    
}
else
{
 echo "<style='color:danger'>Lütfen Oturum Açiniz </b>";
}
?> -->