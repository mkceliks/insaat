
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/random.css">

    <title>Yeni çalışan ekle</title>
</head>
<body>
    <?php 

        include_once "../session.php";

    ?>
     <h3><center>Yeni çalışan ekle</center></h3>
    <div class="container">
    <form action="calisanekle.php" method = "post" enctype="multipart/form-data">
        
            <label for="c_isim"><b>Isim Soyisim</b></label>
            <input class="input" type="text" name="c_isim" id="c_isim">
            
            
            
            
            <label for="c_departman"><b>Departman</b></label>
            <input class="input" type="text" name="c_departman" id = "c_departman">
            
            
            
            
            <label for="yazi_baslik"><b>Yazı Başlığı</b></label>
            <input class="input" type="text" name="yazi_baslik" id="yazi_baslik">

            <label for="yazi"><b>Yazı</b></label>
            <textarea  type="text" name="yazi" id="yazi" cols="45" rows="7" style="resize: none;"> </textarea>
            
            <input class="input" type="submit" value="Ekle">

            <a class="linkred2" href="veri_al.php">Geri dönmek için tıklayınız</a>
                
    </form>
</div>





    
    
</body>
</html>