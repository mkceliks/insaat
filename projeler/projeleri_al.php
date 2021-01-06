<?php include_once "../server.php"; include_once "../session.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    <title>Projeler Listesi</title>
</head>
<body>
<?php


    $sql = "SELECT * FROM projeler ";

    $result = mysqli_query($conn, $sql);
    echo "<table id=tablo>
    <tr>

        <th> Proje Adı </th>
        <th> Proje İçeriği</th>
        <th> Resimler </th>


    </tr>


";

    while ($row = mysqli_fetch_assoc($result)){


        echo "
                <tr>

                    <td> {$row['p_ismi']}</td>
                    <td> {$row['p_icerik']}</td>
                    <td> {$row['p_resimler']}</td>



                    <td> <a class='link' href = 'proje_resim_sec.php?pid=".$row['pid']." '> Resim seç </a> </td>
                    <td> <a class='link' href = 'proje_duzenle.php?pid=".$row['pid']." '> Düzenle </a> </td>
                    <td> <a class='linkred' href = 'proje_sil.php?pid=".$row['pid']." '> Sil </a> </td>


                </tr>


        ";



        echo "<br>";

    }

    echo "</table>"; 






?>

<table id="tablo">
    <tr>
        <td> <a class="link"  href="proje_ekle_form.php"> Veri eklemek için tıkla </a> <a class="linkred" href='../adminAnaSayfa.php'>Geri dönmek için tıkla</a> </td>
    </tr>
</table>

</body>
</html>