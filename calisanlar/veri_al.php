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
        
        <th> İsim Soyad </th>
        <th> E - posta</th>
        <th> Facebook </th>
        <th> Twitter </th>
        <th> Instagram </th>
        <th> Departman </th>
        <th> Telefon </th>
        <th> Adres </th>

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
                    <td> <a class='linkred' href = 'sil.php?ID= ".$row['id']." '> Sil </a> </td>
                    

                </tr>

           
        ";
        
        
        
        echo "<br>";

    }

    echo "</table>"; 


    

    

?>

<table id="tablo">
    <tr>
        <td> <a class="link"  href="veriyiekle.php"> Veri eklemek için tıkla </a> <a class="linkred" href='../adminAnaSayfa.php'>Geri dönmek için tıkla</a> </td>
    </tr>
</table>
    
</body>
</html>