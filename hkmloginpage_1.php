<html>
<head>
<title>welcometoHKMBookStore</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<style type="text/css">
#logostil{
color:white;
background-color:#DC2924;
}
#kayit_stil{
color:white;
background-color:#4D90FE;
}
#giris_stil{
color:white;
background-color:#59BC4F;

}
body{
background-color:#DC2924;}
.txtbox100{ 
font-family:Verdana; 
font-size:13px; 
width:200px; 
position:relative;
top:-200px;
}
#rem_knm{
position:relative;
left:115px;
top:-230px;
}
#forma_kayit{
position:relative;
top:-124px;
}

</style>
</head>
<body>
<table height="620" width="1350" border="0" cellspacing="0" cellpadding="100">
<tr>
<th id="logostil" rowspan="2"><a href="http://localhost/sablon1.php">HKM BOOKSTORE</a></th>

<th id="kayit_stil" colspan="1"><P>KAYIT OL!</P></th>
<th id="giris_stil" ><P>ÜYE GİRİŞİ YAP!</P></th>
</tr>
<tr>
<td id="kayit_stil"><form name="formkayit" METHOD="POST" action="uyekayitdevam.php" id="forma_kayit">
<p>Adın</p><input type="text" name="isimk" size="30"><br/>
<p>Soyadın</p><input type="text" name="soyisimk" size="30"><br/>
<p>E posta Adresin<p><input type="text" name="epostak" size="30">

<p>Yeni şifre</p><input type="password" name="sifrek" size="30"><br/>

<input type="submit" name="uye_kayit_onay" value="                  Kaydol!                    " size="30" >
</form>


</td>
<td id="giris_stil"><form name="formgiris" METHOD="POST" action="#"> 
<p class="txtbox100">Kullanıcı adınız: </p>
<input type="text" name="isim"size="30" class="txtbox100"><br/>
<p class="txtbox100" >Şifreniz:</p>
<input type="password" name="parola" size="30" class="txtbox100" id="sifre_kutusu"> <br/>

<input type="checkbox" name="remember_me" value="T" class="txtbox100"><p class="txtbox100" id="rem_knm">Beni Hatırla</p><br/>
<input type="submit" name="uye_giris_onay" value="Giriş Yap" class="txtbox100" >
</form></td>



</tr>
</table>
</body>
</html>