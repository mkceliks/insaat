<?php
# Resimleri cek
include_once "../session.php";
include_once "../server.php";





$dizin = "../images/projeler" ;//Resminizin Bulunduğu Yolu Yazınız
$tutucu = opendir($dizin);
while($dosya = readdir($tutucu)){
if(is_file($dizin."/".$dosya))
$resim[] = $dosya;
}
closedir($tutucu);
 

$toplam = count($resim);
 
# Bu bilgiler doğrultusunda

 
# $kactan başlayıp $kaca kadar resim bas
for($i=0; $i < $toplam; $i++){
echo "
<a href='".$dizin."/".$resim[$i]."' target='_blank'>
<img onContextMenu='return false' src='".$dizin."/".$resim[$i]."'
width='150' height='200' border='2'></a>";
}


$dizin = "../images/calisanlar" ;//Resminizin Bulunduğu Yolu Yazınız
$tutucu = opendir($dizin);
while($dosya = readdir($tutucu)){
if(is_file($dizin."/".$dosya))
$resim1[] = $dosya;
}
closedir($tutucu);
 

$toplam = count($resim1);
 
# Bu bilgiler doğrultusunda

 
# $kactan başlayıp $kaca kadar resim bas
for($i=0; $i < $toplam; $i++){
echo "
<a href='".$dizin."/".$resim1[$i]."' target='_blank'>
<img onContextMenu='return false' src='".$dizin."/".$resim1[$i]."'
width='150' height='200' border='2'></a>";
}

echo "<br><br><br>";

echo "Yeni resim eklemek için <a href='resimAl.php'>tıkla</a>";





?>