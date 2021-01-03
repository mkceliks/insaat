<?php include_once "server.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    <title>İletişim</title>
</head>
<body>
<?php
    if(isset($_POST)){
        $gonderen_ip = $_SERVER["REMOTE_ADDR"];
        $sql = "SELECT iletisim_id FROM iletiler WHERE gonderen_ip='$gonderen_ip'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if(!$row['iletisim_id']){

        


        $isim = $_POST['first_name'];
        $soyad= $_POST['last_name'];
        $email= $_POST['email'];
        $telefon= $_POST['phone'];
        $icerik = $_POST['comments'];
        

        $sql = "INSERT INTO iletiler (iletisim_isim, iletisim_soyad, iletisim_email, iletisim_telefon, iletisim_icerik, gonderen_ip)
        VALUES ('$isim', '$soyad', '$email', '$telefon', '$icerik', '$gonderen_ip')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Ekleme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=index.php");
        }else{
            echo "<script>alert('Ekleme başarısız.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=index.php");
        }

    }

}else{echo "Zaten bir ileti gönderdiniz!!!";}


    
?>
    
</body>
</html>