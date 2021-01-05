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
    <table style="margin-top: 50px;" id="tablo">
        <tr>
        <td>Proje İsmi</td>
        <td> <textarea  name="p_ismi" id="p_ismi"  cols="45" rows="1" style="resize:none;"><?php echo $p_ismi; ?></textarea></td>
        </tr>

        <tr>
        <td>Proje İçeriği</td>
        <td> <textarea type="text" name="p_icerik" id="p_icerik" cols="45" rows="10" ><?php echo $p_icerik; ?></textarea></td>
        </tr>
    </table>
    <div style="text-align: middle;">
<table style="margin:auto;margin-top: 25px; width: 20%"><tr>
        
        <td> <input style="width: 100%;" class="input" type="submit" name="submit" id="submit" value = "Tamamla" ></td>
        </tr>
    </table>
    </div>
    
    </form>

    <?php 

    if(isset($_POST["submit"])){
        $yeni_p_ismi= $_POST["p_ismi"];
        $yeni_p_icerik = $_POST["p_icerik"];
        

        $sorgu = $conn->prepare("UPDATE projeler SET p_ismi = ?, p_icerik=? WHERE pid = '$pid'");
        
        $sorgu->bind_param("ss",$yeni_p_ismi, $yeni_p_icerik );
        $sorgu->execute();

         if ($sorgu->affected_rows > 0) {
                echo "<br><p style='text-align:center;'>İşlem başarılı!!!<br></p>";
                echo "<div style='text-align:center;'> <a class='link' href='projeleri_al.php'>Çıkmak için tıklayın</a></div>";
                
            }else {

                echo "<br><p style='text-align:center;'>HATA!!<br></p>";
                echo "<div style='text-align:center;'> <a class='linkred' href='projeleri_al.php'>Çıkmak için tıklayın</a></div>"; 
            }  

        
    }
    
    
    ?>
    
</body>
</html>