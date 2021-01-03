<?php
# Resimleri cek
include_once "../session.php";
include_once "../server.php";


$sql = "SELECT * FROM resimler";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
   echo "
    <a href='".$row['r_yol']."' target='_blank'>
    <img onContextMenu='return false' src='".$row['r_yol']."'
    width='150' height='200' border='2'></a>";
}

echo "<br><br><br>";

echo "Yeni resim eklemek için <a href='resimAl.php'>tıkla</a>";














?>