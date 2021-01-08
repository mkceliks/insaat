<?php include_once "../server.php"; include_once "../session.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    <title>Servisler Listesi</title>
</head>
<body>
<?php


    $sql = "SELECT * FROM servisler ";

    $result = mysqli_query($conn, $sql);
    echo "<table id=tablo>
    <tr>

        <th> Servis Adı </th>
        <th> Servis İçeriği </th>
        <th> Servis İkonu </th>
        <th> Resimler </th>


    </tr>


";

    while ($row = mysqli_fetch_assoc($result)){


        echo "
                <tr>

                    <td> {$row['servis_ismi']}</td>
                    <td> {$row['servis_icerik']}</td>
                    <td> {$row['servis_ikon']}</td>
                    <td> {$row['servis_resimler']}</td>



                    <td> <a class='link' href = 'servis_resim_sec.php?servis_id=".$row['servis_id']." '> Resim seç </a> </td>
                    <td> <a class='link' href = 'servis_arkaplan_sec.php?servis_id=".$row['servis_id']." '> Arkaplan seç </a> </td>
                    <td> <a class='link' href = 'servis_ikon_sec.php?servis_id=".$row['servis_id']." '> İkon seç </a> </td>
                    <td> <a class='link' href = 'servis_duzenle.php?servis_id=".$row['servis_id']." '> Düzenle </a> </td>
                    <td> <a class='linkred' href = 'servis_sil.php?servis_id=".$row['servis_id']." '> Sil </a> </td>


                </tr>


        ";



        echo "<br>";

    }

    echo "</table>"; 






?>

<table id="tablo">
    <tr>
        <td> <a class="link"  href="servis_ekle_form.php"> Veri eklemek için tıkla </a> <a class="linkred" href='../adminAnaSayfa.php'>Geri dönmek için tıkla</a> </td>
    </tr>
</table>

</body>
</html>