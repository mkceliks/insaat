<?php include_once "../server.php"; include_once "../session.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    
    <title>Servis düzenle</title>
</head>
<body>
<h3><center>Servis düzenle</center></h3>

    <?php
        if(isset($_GET["servis_id"])){
            $servis_id = $_GET["servis_id"];

            $sql = "SELECT * FROM servisler WHERE servis_id = '$servis_id' ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $servis_ismi = $row['servis_ismi'];
            $servis_icerik = $row['servis_icerik'];
            
            

        }
    
    ?>

    <form action="" method="POST">
    <table style="margin-top: 50px;" id="tablo">
        <tr>
        <td>Servis İsmi</td>
        <td> <textarea  name="servis_ismi" id="servis_ismi"  cols="45" rows="1" style="resize:none;"><?php echo $servis_ismi; ?></textarea></td>
        </tr>

        <tr>
        <td>Servis İçeriği</td>
        <td> <textarea type="text" name="servis_icerik" id="servis_icerik" cols="45" rows="10" ><?php echo $servis_icerik; ?></textarea></td>
        </tr>

        <tr>
        <td>Resim Silme</td>
        <td> <a href="servis_resmi_sil.php?servis_id=<?php echo $servis_id;?>"><input type="button" value="Düzenle"> </a></td>
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
        $yeni_s_ismi= $_POST["servis_ismi"];
        $yeni_s_icerik = $_POST["servis_icerik"];
        

        $sorgu = $conn->prepare("UPDATE servisler SET servis_ismi = ?, servis_icerik=? WHERE servis_id = '$servis_id'");
        
        $sorgu->bind_param("ss",$yeni_s_ismi, $yeni_s_icerik );
        $sorgu->execute();

         if ($sorgu->affected_rows > 0) {
                echo "<br><p style='text-align:center;'>İşlem başarılı!!!<br></p>";
                echo "<div style='text-align:center;'> <a class='link' href='servisleri_goster.php'>Çıkmak için tıklayın</a></div>";
                
            }else {

                echo "<br><p style='text-align:center;'>HATA!!<br></p>";
                echo "<div style='text-align:center;'> <a class='linkred' href='servisleri_goster.php'>Çıkmak için tıklayın</a></div>"; 
            }  

        
    }
    
    
    ?>
    
</body>
</html>