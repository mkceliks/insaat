<?php 
include_once "../server.php";
include_once "../session.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Çalışan resim ekle</title>
    <link rel="stylesheet" href="../css/random.css">
</head>
<body>

    <?php
if(isset($_GET['resimisim'])){
    
    
    if($_GET["ID"]){
        
    $resimad = $_GET["resimisim"];
    $KIMLIK = $_GET["ID"];
    
    $sql = "SELECT isim_soyad FROM calisanlar WHERE id= '$KIMLIK' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['isim_soyad']){
        
        
        $sorgu = $conn->prepare("UPDATE calisanlar SET resim = ? WHERE id = '$KIMLIK'");
        $sorgu->bind_param("s", $resimad);
        $sorgu->execute();
        echo "<p style='text-align:center;'>Ekleme Başarılı! &nbsp<img style='width:25px;' src='../images/tick.png'><br><br> Geri Dönmek Için Tıklayınız.</p><div style='text-align:center;'>
    <a style='text-aling:center;margin-left:5px;margin-top:3px;' class='linkred' href='../calisanlar/veri_al.php'><img style='margin-top:10px;' width='150' height='167' src='../images/back.png'></a>";
        
        
        

    }else{echo "HATA <a href='veri_al.php'>tıklayınız</a>";}
    
    }else{echo "HATA <a href='veri_al.php'>tıklayınız</a>" ;}
}else{echo "HATA <a href='veri_al.php'>tıklayınız</a>";}


?>
</body>
</html>

