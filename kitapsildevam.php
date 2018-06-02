<html>
<body>
</body>
<center>
<?php

$kitap_id=$_POST['kid'];



$baglan=mysql_connect("localhost","root","");
$sec=mysql_select_db("hkmbookstore");

if ($sec)
{ 
echo "Verı Tabanı Bağlantısı Tamam!";
echo '<br>';
$sil = mysql_query("DELETE FROM kitap WHERE hkmbn='$kitap_id'"); 
  
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