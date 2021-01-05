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
   
    <table style='float : left'>
    <tr>
    <td><a href='".$row['r_yol']."' target='_blank'> 
    <img onContextMenu='return false' src='".$row['r_yol']."'
    width='200' height='200' border='2' style='float:left;' ></a></td></tr>
    
    
    <tr><td><a class='linkred' style='width:79%;' href = 'resimsil.php?yol=".$row['r_yol']." '> Sil  </a> </td> </tr>
    </table>
    ";

    
    
}


echo "
<a style='margin-left:5px;margin-top:3px;' class='link' href='../resimler/resimAl.php'><img style='margin-top:10px;' width='150' height='167' src='../images/arti_simgesi.png'></a>";














?>