<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    <title>Tüm resimler</title>
</head>
<body>
<?php
# Resimleri cek
include_once "../session.php";
include_once "../server.php";




$sql = "SELECT * FROM resimler";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
   echo "
   
    <div>
    <a href='".$row['r_yol']."' target='_blank'>
    <img onContextMenu='return false' src='".$row['r_yol']."'
    width='150' height='200' border='2'></a> </div>
    
    
    <a class='linkred' href = 'resimsil.php?yol=".$row['r_yol']." '> Sil </a>
    ";

    
    
}




echo "<br><br><br>";
echo "Yeni resim eklemek için <a href='resimAl.php'>tıkla</a>";














?>