<html>
<body>
</body>
<center>
<?php

$kitap_adi=$_POST['adi'];
$kitap_yazari=$_POST['yazari'];
$kitap_turu=$_POST['turu'];
$kitap_fiyati=$_POST['fiyati'];
$kitap_basimyili=$_POST['basim_yili'];
$kitap_satis_adedi=$_POST['satis_adeti'];
$kitap_yayinevi=$_POST['yayinevi'];



$baglan=mysql_connect("localhost","root","");
$sec=mysql_select_db("hkmbookstore");

if ($sec)
{ 
echo "Veri Tabanı Bağlantısı Tamam!";
echo '<br>';
$sql="INSERT INTO `kitap`(`k_adi`, `k_yazari`, `k_turu`, `k_fiyati`, `k_basim_yili`, `k_satis_adeti`, `k_yayinevi`) 
	  VALUES ('$kitap_adi','$kitap_yazari','$kitap_turu','$kitap_fiyati','$kitap_basimyili','$kitap_satis_adedi','$kitap_yayinevi')";  
$kayit=mysql_query($sql);  
if ($kayit) echo "Kayıt Yapıldı!";

mysql_close($baglan);
}
else
	echo "baglanamadi";
?>

<a href="kitapgiris.php"> Kitap girişe Dön... </a>
</center>
</body>
</html>

