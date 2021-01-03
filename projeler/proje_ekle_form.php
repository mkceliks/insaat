
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/random.css">

    <title>Proje Ekle</title>
</head>
<body>
    <?php 

        include_once "../session.php";

    ?>
    <div class="container">
    <form action="proje_ekle.php" method = "post" enctype="multipart/form-data">
        
            <label for="p_ismi"><b>Proje Adı</b></label>
            <input class="input" type="text" name="p_ismi" id="p_ismi">
            
            
            <label for="p_icerik"><b>İçerik</b></label>
            <textarea name="p_icerik" id="p_icerik" cols="20" rows="10" ></textarea>
           
            
            
            <input class="input" type="submit" value="Ekle">

            <a class="linkred2" href="projeleri_al.php">Geri dönmek için tıklayınız</a>
                
    </form>
</div>





    
    
</body>
</html>