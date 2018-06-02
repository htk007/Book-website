<html>
<body>
</body>
<center>
<?php

$uye_id=$_POST['uid'];



$baglan=mysql_connect("localhost","root","");
$sec=mysql_select_db("hkmbookstore");

if ($sec)
{ 
echo "Verı Tabanı Bağlantısı Tamam!";
echo '<br>';
$sil = mysql_query("DELETE FROM uyeler WHERE u_id='$uye_id'"); 
  
if($sil){ 
echo "Veri Başarıyla Silindi";                                       //Veri silme işlemi başarılıysa yapılacak işlem 
}
else
{ 
echo "Veri Silinemedi. Böyle bir veri olmayabilir." ;          //Veri silinemediyse yapılacak işlem 
} 



mysql_close($baglan);
}
else
	echo "baglanamadi";
?>

<a href="kitapgiris.php"> Kitap girişe Dön... </a>
</center>
</body>
</html>