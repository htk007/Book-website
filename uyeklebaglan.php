<html>
<body>
</body>
<center>
<?php

$kullanici_adi=$_POST['adi'];
$soyadiniz=$_POST['soyadi'];
$sifreniz=$_POST['sifre'];
$epostaniz=$_POST['eposta'];
;



$baglan=mysql_connect("localhost","root","");
$sec=mysql_select_db("hkmbookstore");

if ($sec)
{ 
echo "Veri Tabanı Bağlantısı Tamam!";
echo '<br>';
$sql="INSERT INTO `uyeler`(`u_adi`, `u_soyadi`, `u_sifresi`, `u_eposta`) 
	  VALUES ('$kullanici_adi','$soyadiniz','$sifreniz','$epostaniz')";  
$kayit=mysql_query($sql);  
if ($kayit) echo "Kayıt Yapıldı!";

mysql_close($baglan);
}
else
	echo "baglanamadi";
?>

<a href="adminpanel.php"> admin panele dön Dön... </a>
</center>
</body>
</html>

