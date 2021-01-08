
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/random.css">

    <title>Servis ekle</title>
</head>
<body>
    <?php 

        include_once "../session.php";

    ?>
     <h3><center>Yeni servis ekle</center></h3>
    <div class="container">
    <form action="servis_ekle.php" method = "post" >
        
            <label for="servis_ismi"><b>Servis Adı</b></label>
            <input style="border:1px solid;" class="input" type="text" name="servis_ismi" id="servis_ismi">
        
            <div style="padding-top: 3px;padding-bottom: 3px;">
            <label for="servis_icerik"><b>İçerik<br></b></label>
            </div>
            <textarea name="servis_icerik" id="servis_icerik" style="width:100%" rows="10" ></textarea>
           
            
            
            <input class="input" type="submit" name="submit" value="Ekle">

            <a class="linkred2" href="servisleri_goster.php">Geri dönmek için tıklayınız</a>
                
    </form>
</div>





    
    
</body>
</html>