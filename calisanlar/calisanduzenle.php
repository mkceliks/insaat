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
            
            $c_departman = $row['departman'];
            $c_yazi_baslik = $row['yazi_baslik'];
            $c_yazi = $row['yazi'];
           

        }
    
    ?>

    <form action="" method="POST">
    <table style="margin-top: 50px;"  id="tablo">
        <tr>
        <td>İsim Soyad :</td>
        <td> <textarea name="isim" id="isim" cols="45" rows="1" style="resize:none;"><?php echo $c_isim_soyad; ?> </textarea></td>
        </tr>


        <tr>
        <td>Departman :</td>
        <td> <textarea name="departman" id="departman" cols="45" rows="1" style="resize:none;"><?php echo $c_departman; ?></textarea></td>
        </tr>

        

        <tr>
        <td>Yazı Başlığı :</td>
        <td> <textarea  name="yazi_baslik" id="yazi_baslik" cols="45" rows="1" style="resize:none;"><?php echo $c_yazi_baslik; ?></textarea></td>
        </tr>

        <tr>
        <td>Yazı :</td>
        <td> <textarea name="yazi" id="yazi" cols="45" rows="3" style="resize:none;"><?php echo $c_yazi; ?> </textarea></td>
        </tr>

        

        
    </table>


    <div style="text-align: middle;">
<table style="margin:auto;margin-top: 25px; width: 20%"><tr><td>
        <input style="width: 100%;" class="input" type="submit" name="submit" id="submit" value = "Tamamla" ></td></tr></table>
    
    </form>

    <?php 

    if(isset($_POST['submit'])){
        $yeni_isim_soyad = $_POST["isim"];
        
        $yeni_departman = $_POST["departman"];
        $yeni_yazi_baslik = $_POST["yazi_baslik"];
        $yeni_yazi = $_POST["yazi"];
        

        $sorgu = $conn->prepare("UPDATE calisanlar SET isim_soyad = ?, departman=?, yazi_baslik =?, yazi=? WHERE id = '$id'");
        
        $sorgu->bind_param("ssss",$yeni_isim_soyad, $yeni_departman,$yeni_yazi_baslik,$yeni_yazi);
        $sorgu->execute();

            if ($sorgu->affected_rows > 0) {
                echo "<br><p style='text-align:center;'>İşlem başarılı!!!<br></p>";
                echo "<div style='text-align:center;'> <a class='link' href='veri_al.php'>Çıkmak için tıklayın</a></div>";
                
            }else {

                echo "<br><p style='text-align:center;'>HATA!!<br></p>";
                echo "<div style='text-align:center;'> <a class='linkred' href='veri_al.php'>Çıkmak için tıklayın</a></div>"; 
            }  
    }
    
    
    ?>
    
</body>
</html>