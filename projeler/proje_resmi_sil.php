<?php include_once "../server.php";
include_once "../session.php";
 ?>

<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    <title>Proje resmi sil</title>
</head>
<body>

<?php
# Resimleri cek





if(isset($_GET['pid'])){
    $pid = $_GET['pid'];

    $sql = "SELECT * FROM projeler WHERE pid='$pid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $isim = $row['p_ismi'];
    $icerik = $row['p_icerik'];
    $resimler = explode("* ", $row['p_resimler']);

    $toplam = count($resimler)-1;
    $dizin = "../images/projeler";

    
    echo "<h3><center>Seçilen proje için resim silme</center></h3>";
    for($i=0; $i < $toplam; $i++){
        echo "
        <table  style='padding-left:18px;float:left;'>
        <tr><td>
        <a href='p_resim_sil_arkaplan.php?pid=".$pid."&resim=".$resimler[$i]."' >
        <img onContextMenu='return false' src='".$dizin."/".$resimler[$i]."'
        width='150' height='200' border='2'></a>
        </td></tr>
        <th><p  style='text-align:center;width:170px;height:100px;margin-bottom:5px;'>$resimler[$i]</p></th>
    </table>";
        }

        


}


echo "<a style='text-aling:center;margin-left:5px;margin-top:3px;' class='linkred' href='projeleri_al.php'><img style='margin-top:10px;'  width='150' height='167' src='../images/back.png'></a>";



?>
    
</body>
</html>




