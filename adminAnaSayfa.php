<?php include_once "server.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>Admin Paneli</title>
</head>
<body>
    <?php 
        session_start();
        ob_start();
        
        
        if(!isset($_SESSION["login"])){//Session kontrol
            header("Location:adminError.php");
        }
    ?>
    <table>
        <tr>
            <td>En üstteki yazı için <a href="ayarlar/en_ust_yazi.php">tıkla.</a></td>
        </tr>
        <tr>
            <td>Slogan için <a href="ayarlar/slogan.php">tıkla.</a></td>
        </tr>
        <tr>
            <td>Hakkımızda için <a href="ayarlar/hakkimizda.php">tıkla.</a></td>
        </tr>
        <tr>
            <td>Telefon için <a href="ayarlar/telefon.php">tıkla.</a></td>
        </tr>
        <tr>
            <td>Facebook için <a href="ayarlar/facebook.php">tıkla.</a></td>
        </tr>


        <tr>
            <td>Güvenli çıkış için <a href="guvenliCikis.php">tıkla.</a></td>
        </tr>

    
    </table>
    
</body>
</html>