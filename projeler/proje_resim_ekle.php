<?php 
include_once "../server.php";
include_once "../session.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/random.css">
</head>
<body>
<?php
	if(isset($_GET['resimisim'])){
    
    
    if($_GET["pid"]){
        
    $resimad = $_GET["resimisim"];//Bu bir stringtir bunu array yapmalıyız
    $KIMLIK = $_GET["pid"];
    
    
    
        
        
        $sorgu = $conn->prepare("UPDATE projeler SET p_resimler = ? WHERE pid = '$KIMLIK'");
        $sorgu->bind_param("s", $resimad);
        $sorgu->execute();
        echo "<p style='text-align:center;'>Ekleme Başarılı! &nbsp<img style='width:25px;' src='../images/tick.png'><br><br> Geri Dönmek Için Tıklayınız.</p><div style='text-align:center;'>
    <a style='text-aling:center;margin-left:5px;margin-top:3px;' class='linkred' href='../projeler/projeleri_al.php'><img style='margin-top:10px;' width='150' height='167' src='../images/back.png'></a>";
        
        
        

    
    
    }else{echo "HATA <a href='projeleri_al.php'>tıklayınız</a>" ;}
}else{echo "HATA <a href='projeleri_al.php'>tıklayınız</a>";}


?>

</body>
</html>

