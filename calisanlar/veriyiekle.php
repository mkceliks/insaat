
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/random.css">

    <title>Calisan Ekle</title>
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
            
            
            <label for="c_e_posta"><b>E-posta</b></label>
            <input class="input" type="email" name="c_e_posta" id="c_e_posta">
           
            <label for="c_facebook"><b>Facebook</b></label>
            <input class="input" type="text" name="c_facebook" id= "c_facebook">
            
            
            <label for="c_twitter"><b>Twitter</b></label>
            <input class="input" type="text" name="c_twitter" id = "c_twitter">
            
            
            <label for="c_instagram"><b>Instagram</b></label>
            <input class="input" type="text" name="c_instagram" id = "c_instagram">
            
            
            <label for="c_departman"><b>Departman</b></label>
            <input class="input" type="text" name="c_departman" id = "c_departman">
            
            
            <label for="c_telefon"><b>Telefon</b></label>
            <input class="input" type="text" name="c_telefon" id= "c_telefon">
            
            
            <label for="c_adres"><b>Adres</b></label>
            <input class="input" type="text" name="c_adres" id="c_adres">

            <label for="c_maas"><b>Maaş</b></label>
            <input class="input" type="number" name="c_maas" id="c_maas" pattern="\d{11}">
            
            <input class="input" type="submit" value="Ekle">

            <a class="linkred2" href="veri_al.php">Geri dönmek için tıklayınız</a>
                
    </form>
</div>





    
    
</body>
</html>