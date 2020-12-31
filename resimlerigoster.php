<?php
# Resimleri cek



$dizin = "images";//Resminizin Bulunduğu Yolu Yazınız
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
echo" </br></br></br>";

?>