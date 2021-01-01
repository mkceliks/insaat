<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>Resim seç</title>
</head>
<body>

    <?php 
    include_once "../session.php";

    
    
    ?>
    <form action="resim.php" method="post" enctype="multipart/form-data">
        <table>
        <tr>
            <td><p>Yüklenecek dosyayı seçin:</p></td>
            
        </tr>
        
        <tr><td><input type="file" name="dosya" /></td></tr>
        <tr>
            <td><input type="radio" id="calisanlar" name="radio" value="calisanlar">
                <label for="calisanlar">Çalışan</label><br>
                
                <input type="radio" id="calisanlar" name="radio" value="projeler">
                <label for="projeler">Proje</label><br>
            </td>
        
        </tr>
        <tr>
            <td>   <input type="submit" value="Yükle" /> </td>
        </tr>
      
        </table>
    </form>
    
</body>
</html>