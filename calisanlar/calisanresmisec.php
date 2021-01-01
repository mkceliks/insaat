<?php

include_once "../server.php";



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
<a href='calisanresmisec.php?resimisim=". $resim[$i]. " '>
<img onContextMenu='return false' src='".$dizin."/".$resim[$i]."'
width='150' height='200' border='2'></a>";


}
echo" </br></br></br>";

if(isset($_GET['resimisim'])){
    
    
    $resimad = $_GET["resimisim"];
    
    $sql = "SELECT isim_soyad FROM calisanlar WHERE id= '$KIMLIK' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['isim_soyad']){
        $sql = "UPDATE calisanlar SET resim = '$resimad' WHERE id = '$KIMLIK'";
        
        

    }else{echo "mevbut değil.";}
    
}

?>