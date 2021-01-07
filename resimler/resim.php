<?php include_once "../server.php"; include_once "../session.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    <title>Resim seç</title>
</head>
<body>
<?php


//resimAl.php den gelen resim burada klasöre eklenir ve yolu db ye kaydedilir





if ($_FILES["dosya"]["size"]>1) {
  
  $nereye = $_POST['secmece'];

  $yol = "../images" . "/{$nereye}"; # Yüklenecek klasör / dizin

  $dosya_sayisi = count($_FILES['dosya']['name']);

  for($i=0; $i<$dosya_sayisi; $i++){
    $resim_isim = $_FILES["dosya"]["name"][$i];

    $yuklemeYeri = __DIR__ . "/" . $yol . "/" . $_FILES["dosya"]["name"][$i];
    $yol_2 = $yol . "/" . $_FILES["dosya"]["name"][$i];
  
    $sonuc = move_uploaded_file($_FILES["dosya"]["tmp_name"][$i], $yuklemeYeri);
    echo "<p style='text-align:center;'>Dosyanın yüklendiği yer => &nbsp<u>" . $yuklemeYeri . "</u><br></p>";

    echo $sonuc ? "<p style='text-align:center;'>Dosya başarıyla yüklendi &nbsp <img style='width:20px;' src='../images/tick.png'></p>" : "<p style='text-align:center;'>Hata oluştu</p>";

    $sql = "INSERT INTO resimler (r_isim, r_yol) VALUES ('$resim_isim', '$yol_2')";
    $result = mysqli_query($conn, $sql);
  }
  if($result){
    echo "
    <div style='text-align:center;'>
    <a style='text-aling:center;margin-left:5px;margin-top:3px;' class='linkred' href='../adminAnaSayfa.php'><img style='margin-top:10px;' width='150' height='167' src='../images/back.png'></a>
    <a style='text-aling:center;margin-left:5px;margin-top:3px;' class='link' href='../resimler/resimAl.php'><img style='margin-top:10px;' width='150' height='167' src='../images/arti_simgesi.png'></a></div>";
    
    
  }else{
    echo " <p style='text-align:center;'>Ekleme Başarısız Tekrar Denemek Için Artı Buton'una Tıklayınız.</p>
    <div style='text-align:center;'>
    <a style='text-aling:center;margin-left:5px;margin-top:3px;' class='linkred' href='../adminAnaSayfa.php'><img style='margin-top:10px;' width='150' height='167' src='../images/back.png'></a>
  <a style='text-align:center;margin-left:5px;margin-top:3px;' class='link' href='../resimler/resimAl.php'><img 
    style='margin-top:10px;' width='150' height='167' src='../images/arti_simgesi.png'></a>
    </div>";
  }

} else {

  echo "Lütfen bir dosya seçin";

}

?>
    
    
</body>
</html>