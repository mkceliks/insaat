<?php include_once "../server.php"; include_once "../session.php"; ?>
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
    
    $gonderen_ip = $_SERVER["REMOTE_ADDR"];
    $sql = "SELECT * FROM iletiler";
    $result = mysqli_query($conn, $sql);
    echo "<table id=tablo>
    <tr>
        
        <th> İsim </th>
        <th> Soyisim İçeriği</th>
        <th> Mail </th>
        <th> Telefon </th>
        <th> İçerik </th>
        
        

    </tr>

     
";

    while ($row = mysqli_fetch_assoc($result)){
        

        echo "
                <tr>
                    
                    <td> {$row['iletisim_isim']}</td>
                    <td> {$row['iletisim_soyad']}</td>
                    <td> {$row['iletisim_email']}</td>
                    <td> {$row['iletisim_telefon']}</td>
                    <td> {$row['iletisim_icerik']}</td>
                   
                   
                   
                    
                    <td> <a class='linkred' href = 'iletisim_sil.php?iletisim_id=".$row['iletisim_id']." '> Sil </a> </td>
                    

                </tr>

           
        ";
        
        
        
        echo "<br>";

    }

    echo "</table>"; 







    
?>
    
</body>
</html>