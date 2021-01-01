<?php
include_once "../session.php";





if(isset($_GET['ID'])){
 $KIMLIK = (int) $_GET['ID'];
}

    
    


$resim = array();
$dizin = "../images/calisanlar" ;//Resminizin Bulunduğu Yolu Yazınız
$tutucu = opendir($dizin);
while($dosya = readdir($tutucu)){
if(is_file($dizin."/".$dosya))
$resim[] = $dosya;
}
closedir($tutucu);



$toplam = count($resim);
if($toplam<1){
    echo "Klasör boş lütfen resim ekleyin";
    header("Refresh: 2; url=../resimler/resimAl.php");

}
 
# Bu bilgiler doğrultusunda

 
# $kactan başlayıp $kaca kadar resim bas
for($i=0; $i < $toplam; $i++){
echo "
<a href='calisanresimekle.php?resimisim=".$resim[$i]."&ID=" . "$KIMLIK" . " '>
<img onContextMenu='return false' src='".$dizin."/".$resim[$i]."'
width='150' height='200' border='2'></a>";


}
echo" </br></br></br>";



?>