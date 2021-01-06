<?php
# Resimleri cek

include_once "server.php";




if(isset($_GET['pid'])){
    $pid = $_GET['pid'];

    $sql = "SELECT * FROM projeler WHERE pid='$pid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $isim = $row['p_ismi'];
    $icerik = $row['p_icerik'];
    $resimler = explode("* ", $row['p_resimler']);

    $toplam = count($resimler)-1;
    $dizin = "images/projeler";

    
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