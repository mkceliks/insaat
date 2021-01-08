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
    <title>Servis resmi sil</title>
</head>
<body>

<?php





if(isset($_GET['servis_id'])){
    $servis_id = $_GET['servis_id'];

    $sql = "SELECT * FROM servisler WHERE servis_id ='$servis_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $isim = $row['servis_ismi'];
    $icerik = $row['servis_icerik'];
    $resimler = explode("* ", $row['servis_resimler']);

    $toplam = count($resimler)-1;
    $dizin = "../images/servisler";

    
    echo "<h3><center>Seçilen servis için resim silme</center></h3>";
    for($i=0; $i < $toplam; $i++){
        echo "
        
        <table  style='padding-left:18px;float:left;'>

    <tr><td>
<a href='servis_resmi_sil_arkaplan.php?resimisim=".$row['servis_resimler'].$resimler[$i]."* "."&servis_id=" . "$servis_id" . "'>
<img onContextMenu='return false' src='".$dizin."/".$resimler[$i]."'
width='150' height='200' border='2' style='float:left;'></a>
</td></tr>


<th><p  style='text-align:center;width:170px;height:100px;margin-bottom:5px;'>$resimler[$i]</p></th>
    </table>
    ";
}

echo "
<a style='margin-left:5px;margin-top:3px;' class='link' href='../resimler/resimAl.php'><img style='margin-top:10px;' width='150' height='167' src='../images/arti_simgesi.png'></a>
<a style='text-align:center;margin-left:5px;margin-top:3px;' class='linkred' href='servisleri_goster.php'><img style='margin-top:10px;' width='150' height='167' src='../images/back.png'></a>";


        


}






?>