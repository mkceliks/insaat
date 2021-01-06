<?php include_once "../server.php"; include_once "../session.php"; ?>
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
    

    $sql = "SELECT * FROM calisanlar ";

    $result = mysqli_query($conn, $sql);
    echo "<table style='height:100%;' id='tablo'>
    <tr>
        
        <th> İsim Soyad </th>
        
        <th> Departman </th>
        <th> Yazı Başlığı </th>
        <th> Yazı </th>
        
        <th> Resim </th>

    </tr>

     
";

    while ($row = mysqli_fetch_assoc($result)){
        

        echo "
                <tr>
                    
                    <td> {$row['isim_soyad']}</td>
                    
                    <td> {$row['departman']}</td>
                    <td> {$row['yazi_baslik']}</td>
                    
                    <td> {$row['yazi']}</td>
                   
                    <td> {$row['resim']} </td>
                   
                   
                    <td> <a class='link' href = 'calisanresmisec.php?ID=".$row['id']." '> Resim seç </a> </td>
                    <td> <a class='link' href = 'calisanduzenle.php?ID=".$row['id']." '> Düzenle </a> </td>
                    <td> <a class='linkred' href = 'sil.php?ID=".$row['id']." '> Sil </a> </td>
                    

                </tr>

           
        ";
        
        
        
        echo "<br>";

    }

    echo "</table>"; 


    

    

?>

<table id="tablo">
    <tr>
        <td> <a class="link"  href="veriyiekle.php"> Veri eklemek için tıkla </a> 
            <a class="linkred" href='../adminAnaSayfa.php'>Geri dönmek için tıkla</a> </td>
    </tr>
</table>
    
</body>
</html>