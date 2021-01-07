<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>Ek servis</title>
</head>
<body>
<?php


include_once "server.php";




if(isset($_GET['servis_id'])){
    $servis_id = $_GET['servis_id'];

    $sql = "SELECT * FROM servisler WHERE servis_id ='$servis_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $isim = $row['servis_ismi'];
    $icerik = $row['servis_icerik'];
    $resimler = explode("* ", $row['servis_resimler']);

    $toplam = count($resimler)-1;
    $dizin = "images/servisler";

    
    echo "
    <h3><center>  $isim  </center></h3>
        <p> $icerik </p>
    ";
    for($i=0; $i < $toplam; $i++){
        echo "
        
        <a href='".$dizin."/".$resimler[$i]."' target='_blank'>
        <img onContextMenu='return false' src='".$dizin."/".$resimler[$i]."'
        width='150' height='200' border='2'></a>";
        }


}


echo '<br><a   href="index.php"> Geri dönmek için tıkla </a> 
';



?>
</body>
</html>