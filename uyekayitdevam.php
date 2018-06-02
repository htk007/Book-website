<html>
<body>
</body>
<center>
<?php

$kullanicik_adi=$_POST['isimk'];
$soyadinizk=$_POST['soyadik'];
$epostanizk=$_POST['epostak'];
$sifrenizk=$_POST['sifrek'];




$baglan=mysql_connect("localhost","root","");
$sec=mysql_select_db("hkmbookstore");

if ($sec)
{ 

$sql="INSERT INTO `uyeler`(`u_adi`, `u_soyadi`, `u_sifresi`, `u_eposta`) 
	  VALUES ('$kullanicik_adi','$soyadinizk','$sifrenizk','$epostanizk')";  
$kayit=mysql_query($sql);  
if ($kayit) echo "Kayıt Yapıldı!";

mysql_close($baglan);
}
else
	echo "baglanamadi";
?>


</center>
</body>
</html>
