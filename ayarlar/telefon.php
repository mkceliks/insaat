<?php include_once '../server.php'; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>Telefon değiştir</title>
</head>
<body>
    <?php 
        //İÇERİĞİ ÇEK
        session_start();
        ob_start();
        
        
        if(!isset($_SESSION["login"])){//Session kontrol
            header("Location:../adminError.php");
        }


        $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi='telefon'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $telefon_icerik = $row['icerik'];


        
    ?>
    <!-- FORM OLUŞTUR-->
    <form action="telefon.php" method="post">
        <table style="margin-left: auto; margin-right: auto; border: 1px solid black;"> 
            <tr>

               <td colspan = '2'> <textarea name="telefon" id="telefon" cols="30" rows="20" ><?php echo $telefon_icerik;  ?></textarea></td> 
            </tr>
            <tr>
                <td><input type="submit" value="Güncelle" style = "background-color : chartreuse"></td> 
                <td style = "float:right;"><button style="background-color : red"><a href="../adminAnaSayfa.php" style ="color:black; text-decoration:none;">İptal Et</a></button></td>
            </tr>
            
        </table>
       
    </form>

    <?php 
        //FORMDAN ALINAN İÇERİĞİ VERİTABANINDA GÜNCELLE
    
        if (isset($_POST["telefon"])){
            $yeni_icerik = $_POST["telefon"];
            $sorgu = $conn->prepare("UPDATE icerikler SET icerik = ? WHERE icerik_ismi = 'telefon'");
            $sorgu->bind_param("s", $yeni_icerik);
            $sorgu->execute();
        
             //Eğer içerik değişirse if bloğu çalışır.
            if ($sorgu->affected_rows > 0) {
                echo "İçerik : " . $yeni_icerik ." olarak güncellendi! <br>";
                echo "<a href='../adminAnaSayfa.html'>Çıkmak için tıklayın</a>";
                
            }else {
                 echo "Herhangi bir kayıt güncellenemedi.";
            }
        }   
        

        

    ?>
    
    
</body>
</html>