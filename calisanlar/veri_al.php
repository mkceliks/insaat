<?php include_once "../server.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    <title>Calisanlar Listesi</title>
</head>
<body>
<?php
    session_start();
    ob_start();
    
    
    if(!isset($_SESSION["login"])){//Session kontrol
        header("Location:../adminError.php");
    }

    $sql = "SELECT * FROM calisanlar ";

    $result = mysqli_query($conn, $sql);
    echo "<table id=tablo>
    <tr>
        
        <td> İsim Soyad </td>
        <td> E - posta</td>
        <td> Facebook </td>
        <td> Twitter </td>
        <td> Instagram </td>
        <td> Departman </td>
        <td> Telefon </td>
        <td> Adres </td>

    </tr>

     
";

    while ($row = mysqli_fetch_assoc($result)){
        

        echo "
                <tr>
                    
                    <td> {$row['isim_soyad']}</td>
                    <td> {$row['e_posta']}</td>
                    <td> {$row['facebook']}</td>
                    <td> {$row['twitter']}</td>
                    <td> {$row['instagram']}</td>
                    <td> {$row['departman']}</td>
                    <td> {$row['telefon']}</td>
                    <td> {$row['adres']}</td>
                    <td> <a href = 'sil.php?ID= ".$row['id']." '> Sil </a> </td>
                    

                </tr>

           
        ";
        
        
        
        echo "<br>";

    }
    echo "</table>"; 


    

    

?>

<table>
    <tr>
        <td> <button><a style="color:black; text-decoration:none;" href="veriyiekle.php"> Veri eklemek için tıkla </a></button> </td>
    </tr>



</table>
    
</body>
</html>