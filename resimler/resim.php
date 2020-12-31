<?php include_once "../server.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>Resim seç</title>
</head>
<body>
<?php


//resimAl.php den gelen resim burada klasöre eklenir ve yolu db ye kaydedilir

session_start();
ob_start();
        
        
if(!isset($_SESSION["login"])){//Session kontrol
    header("Location:../adminError.php");
}



if ($_FILES["dosya"]["size"]>1) {
  $resim_isim = $_FILES["dosya"]["name"];

  $yol = "../images"; # Yüklenecek klasör / dizin

  $yuklemeYeri = __DIR__ . "/" . $yol . "/" . $_FILES["dosya"]["name"];
  $yol_2 = $yol . "/" . $_FILES["dosya"]["name"];
 
  $sonuc = move_uploaded_file($_FILES["dosya"]["tmp_name"], $yuklemeYeri);
  echo $yuklemeYeri . "<br>";

  echo $sonuc ? "Dosya başarıyla yüklendi" : "Hata oluştu";
  echo "<br>";

  $sql = "INSERT INTO resimler (r_isim, r_yol) VALUES ('$resim_isim', '$yol_2')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "Ekleme başarılı." . "<br>" . "Daha fazla resim eklemek için <a href='resimAl.php'>tıkla</a>" ;
  }else{
    echo "Ekleme başarısız." . "<br>" . "Tekrar denemek için <a href='resimAl.php'>tıkla</a>";
  }

} else {

  echo "Lütfen bir dosya seçin";

}

?>
    
    
</body>
</html>