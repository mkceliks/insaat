
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    
    <title>Calisan Ekle</title>
</head>
<body>
    <?php 

    session_start();
    ob_start();


    if(!isset($_SESSION["login"])){//Session kontrol
        header("Location:../adminError.php");
    }

    ?>
    <form action="calisanekle.php" method = "post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>İsim Soyisim</td>
                <td><input type="text" name="c_isim" id="c_isim"></td>
            </tr>
            <tr>
                <td>E-posta</td>
                <td><input type="email" name="c_e_posta" id="c_e_posta"></td>
            </tr>
            <tr>
                <td>Facebook</td>
                <td><input type="text" name="c_facebook" id= "c_facebook"></td>
            </tr>
            <tr>
                <td>Twitter</td>
                <td><input type="text" name="c_twitter" id = "c_twitter"></td>
            </tr>
            <tr>
                <td>Instagram</td>
                <td><input type="text" name="c_instagram" id = "c_instagram"></td>
            </tr>
            <tr>
                <td>Departman</td>
                <td><input type="text" name="c_departman" id = "c_departman"></td>
            </tr>
            <tr>
                <td>Telefon</td>
                <td><input type="text" name="c_telefon" id= "c_telefon"></td>
            </tr>
            <tr>
                <td>Adres</td>
                <td><input type="text" name="c_adres" id="c_adres"></td>
            </tr>
            
            <tr>
                <td><input type="submit" value="Ekle"></td>
                
            </tr>

            




        </table>


    </form>





    
    
</body>
</html>