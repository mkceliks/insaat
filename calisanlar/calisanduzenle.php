<?php include_once "../server.php"; include_once "../session.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    
    <title>Çalışan Düzenle</title>
</head>
<body>

    <?php
        if(isset($_GET["ID"])){
            $id = $_GET["ID"];

            $sql = "SELECT * FROM calisanlar WHERE id= '$id' ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $c_isim_soyad = $row['isim_soyad'];
            $c_e_posta = $row['e_posta'];
            $c_facebook = $row['facebook'];
            $c_twitter = $row['twitter'];
            $c_instagram = $row['instagram'];
            $c_departman = $row['departman'];
            $c_telefon = $row['telefon'];
            $c_adres = $row['adres'];
            $c_maas=$row['maas'];

        }
    
    ?>

    <form action="" method="POST">
    <table id="tablo">
        <tr>
        <td>İsim Soyad :</td>
        <td> <textarea name="isim" id="isim" cols="45" rows="1" style="resize:none;"><?php echo $c_isim_soyad; ?> </textarea></td>
        </tr>

        <tr>
        <td>E-posta :</td>
        <td> <textarea name="e_posta" id="e_posta" cols="45" rows="1" style="resize:none;"><?php echo $c_e_posta; ?> </textarea></td>
        </tr>

        <tr>
        <td>Facebook :</td>
        <td> <textarea name="facebook" id="facebook" cols="45" rows="1" style="resize:none;"><?php echo $c_facebook; ?> </textarea></td>
        </tr>

        <tr>
        <td>Twitter :</td>
        <td> <textarea  name="twitter" id="twitter" cols="45" rows="1" style="resize:none;"><?php echo $c_twitter; ?> </textarea></td>
        </tr>

        <tr>
        <td>Instagram :</td>
        <td> <textarea  name="instagram" id="instagram" cols="45" rows="1" style="resize:none;"><?php echo $c_instagram; ?></textarea></td>
        </tr>

        <tr>
        <td>Departman :</td>
        <td> <textarea name="departman" id="departman" cols="45" rows="1" style="resize:none;"><?php echo $c_departman; ?></textarea></td>
        </tr>

        

        <tr>
        <td>Telefon :</td>
        <td> <textarea  name="telefon" id="telefon" cols="45" rows="1" style="resize:none;"><?php echo $c_telefon; ?></textarea></td>
        </tr>

        <tr>
        <td>Adres :</td>
        <td> <textarea name="adres" id="adres" cols="45" rows="1" style="resize:none;"><?php echo $c_adres; ?> </textarea></td>
        </tr>

        <tr>
        <td>Maaş :</td>
        <td> <input type="number" name="maas" id="maas" pattern="\d{11}" value =<?php echo $c_maas; ?>> </td>
        </tr>

        




        

        <tr>
        
        <td> <input type="submit" name="submit" id="submit" value = "Tamamla" ></td>
        </tr>
    

    
    </table>
    
    </form>

    <?php 

    if(isset($_POST['submit'])){
        $yeni_isim_soyad = $_POST["isim"];
        $yeni_e_posta = $_POST["e_posta"];
        $yeni_facebook = $_POST["facebook"];
        $yeni_twitter = $_POST["twitter"];
        $yeni_instagram = $_POST["instagram"];
        $yeni_departman = $_POST["departman"];
        $yeni_telefon = $_POST["telefon"];
        $yeni_adres = $_POST["adres"];
        $yeni_maas = $_POST["maas"];

        $sorgu = $conn->prepare("UPDATE calisanlar SET isim_soyad = ?, e_posta=?, facebook=?, twitter=?, instagram=?, departman=?,
         telefon =?, adres=?, maas=? WHERE id = '$id'");
        
        $sorgu->bind_param("ssssssssi",$yeni_isim_soyad, $yeni_e_posta,$yeni_facebook,$yeni_twitter,$yeni_instagram,$yeni_departman,$yeni_telefon,$yeni_adres,$yeni_maas);
        $sorgu->execute();

        if ($sorgu->affected_rows > 0) {
            echo "İşlem başarılı!!! Geri dönmek için <a href='veri_al.php'>tıklayınız</a>";
            
        }else {
             echo "HATA!! Geri dönmek için <a href='veri_al.php'>tıklayınız</a>";
        }

        
    }
    
    
    ?>
    
</body>
</html>