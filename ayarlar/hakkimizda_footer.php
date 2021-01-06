<?php include_once '../server.php'; include_once "../session.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    
    <title>Hakkımızda Footer değiştir</title>
</head>
<body>
    <?php 
        //İÇERİĞİ ÇEK
        

        $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi='hakkimizda_footer'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $hakkimizda_footer_icerik = $row['icerik'];


        
    ?>
    <!-- FORM OLUŞTUR-->
    <h3><center>Alt kısımdaki hakkımızda yazısını değiştir</center></h3>
    <form action="hakkimizda_footer.php" method="post">
        <table style="margin-left: auto; margin-right: auto; border: 1px solid black;"> 
            <tr>

               <td colspan = '2'> <textarea name="hakkimizda_footer" id="hakkimizda_footer" cols="42" rows="25" ><?php echo $hakkimizda_footer_icerik;  ?></textarea></td> 
            </tr>
         <input id="form-submit" type="submit" value="Güncelle" style = "display:none;"></td> 
            
        </table>
       
    </form>

    <div style="float: left; margin-left: 35%; margin-top: 20px;"><label  class="guncelle success" 
            for="form-submit" tabindex="0">Güncelle</label></div>
            
             <button id="form-cancel" style="display: none;" type="submit"
            onclick="location.href='../adminAnaSayfa.php'">Iptal Et</button>

             <div  style="float:right;margin-right: 35%;margin-top: 20px;"><label class="guncelle danger"
            for="form-cancel" tabindex="0" >Iptal Et</label></div>

    <?php 
        //FORMDAN ALINAN İÇERİĞİ VERİTABANINDA GÜNCELLE
    
        if (isset($_POST["hakkimizda_footer"])){
            $yeni_icerik = $_POST["hakkimizda_footer"];
            $sorgu = $conn->prepare("UPDATE icerikler SET icerik = ? WHERE icerik_ismi = 'hakkimizda_footer'");
            $sorgu->bind_param("s", $yeni_icerik);
            $sorgu->execute();

        
             //Eğer içerik değişirse if bloğu çalışır.
            if ($sorgu->affected_rows > 0) {
                echo "<br><br><br><p style='text-align:center;'>İçerik : " . $yeni_icerik ." olarak güncellendi! <br></p>";
                echo "<div style='text-align:center;'> <a class='link' href='../adminAnaSayfa.php'>Çıkmak için tıklayın</a></div>";
                
            }else {

                echo "<br><br><br><p style='text-align:center;'>Herhangi bir kayıt güncellenemedi.<br></p>";
                echo "<div style='text-align:center;'> <a class='linkred' href='../adminAnaSayfa.php'>Çıkmak için tıklayın</a></div>"; 
            }
        }   
        

        

    ?>
    
    
</body>
</html>