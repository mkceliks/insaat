<?php
include_once "../session.php";
include_once "../server.php";





if(isset($_GET['pid'])){
 $KIMLIK = (int) $_GET['pid'];
}

    
    


$resim = array();
$dizin = "../images/projeler" ;//Resminizin Bulunduğu Yolu Yazınız
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
$sql= "SELECT p_resimler FROM projeler WHERE pid='$KIMLIK'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

 
# $kactan başlayıp $kaca kadar resim bas
for($i=0; $i < $toplam; $i++){
echo "
<a href='proje_resim_ekle.php?resimisim=".$row['p_resimler'].$resim[$i]."*"."&pid=" . "$KIMLIK" . " '>
<img onContextMenu='return false' src='".$dizin."/".$resim[$i]."'
width='150' height='200' border='2'></a>";


}
echo" </br></br></br>";
echo "Yeni resim eklemek için <a href='../resimler/resimAl.php'>tıklayınız.</a>";



?>