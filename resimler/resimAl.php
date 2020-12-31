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
    session_start();
    ob_start();
    
    
    if(!isset($_SESSION["login"])){//Session kontrol
        header("Location:../adminError.php");
    }

    
    
    ?>
    <form action="resim.php" method="post" enctype="multipart/form-data">
        <p>Yüklenecek dosyayı seçin:</p>
        <input type="file" name="dosya" />
        <input type="submit" value="Yükle" />
    </form>
    
</body>
</html>