<?php include_once "../server.php"; include_once "../session.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    
    <title>Proje Düzenle</title>
</head>
<body>

    <?php
        if(isset($_GET["pid"])){
            $pid = $_GET["pid"];

            $sql = "SELECT * FROM projeler WHERE pid= '$pid' ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $p_ismi = $row['p_ismi'];
            $p_icerik = $row['p_icerik'];
            
            

        }
    
    ?>

    <form action="" method="POST">
    <table id="tablo">
        <tr>
        <td>Proje İsmi</td>
        <td> <textarea  name="p_ismi" id="p_ismi"  cols="45" rows="1" style="resize:none;"><?php echo $p_ismi; ?></textarea></td>
        </tr>

        <tr>
        <td>Proje İçeriği</td>
        <td> <textarea type="text" name="p_icerik" id="p_icerik" cols="20" rows="10" ><?php echo $p_icerik; ?></textarea></td>
        </tr>

        <tr>
        
        <td> <input type="submit"  value = "Tamamla" ></td>
        </tr>
    

    
    </table>
    
    </form>

    <?php 

    if(isset($_POST["p_ismi"]) && $_POST["p_icerik"]){
        $yeni_p_ismi= $_POST["p_ismi"];
        $yeni_p_icerik = $_POST["p_icerik"];
        

        $sorgu = $conn->prepare("UPDATE projeler SET p_ismi = ?, p_icerik=? WHERE pid = '$pid'");
        
        $sorgu->bind_param("ss",$yeni_p_ismi, $yeni_p_icerik );
        $sorgu->execute();

        if ($sorgu->affected_rows > 0) {
            echo "İşlem başarılı!!! Geri dönmek için <a href='projeleri_al.php'>tıklayınız</a>";
            
            
        }else {
            echo "HATA!!! Geri dönmek için <a href='projeleri_al.php'>tıklayınız</a>";
        }

        
    }
    
    
    ?>
    
</body>
</html>