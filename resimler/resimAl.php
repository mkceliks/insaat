<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/random.css">
    <title>Resim seç</title>
</head>
<body>
<h3><center>Havuza resim ekle</center></h3>
    <?php 
    include_once "../session.php";

    
    
    ?>
    <form action="resim.php" method="post" enctype="multipart/form-data">
        <table style="margin-top: 130px;" id="tablo1">
            <th>Resim yukleme</th>
            <th>Kategori</th>

            <tr><td>
          <div id="yourBtn" onclick="getFile()"><h4 style="color: black;">Dosya Eklemek Için Tıklayınız...</h4></div>
          <div style='height: 0px;width: 0px; overflow:hidden;'><input required name="dosya[]" id="upfile" multiple="multiple" type="file" value="upload" onchange="sub(this)" /></div>
          </td>
        <!-- <tr>
            <td>
                <label for="dosya">Yüklemek istediğiniz dosyayi seçiniz :</label>
                <input type="file" name="dosya" required/>           
        </td>
        </tr>   
        <tr><td> -->
            <td>
           <select name="secmece" required>
            <option value="" selected>Seçiniz...</option>
                 <option value="calisanlar">Çalışan</option>
                 <option value="projeler">Proje</option>
                 <option value="servisler">Servisler</option>
                 <option value="ikonlar">İkonlar</option>
           </select>
           </td>
<table id="tablo1">
    <tr>
        <td><input style="background-color: #0aa799;" class="input" type="submit" value="Ekle"></td>
    </tr>
     
</table>
<table id="tablo1">
    <tr>
        <td>
            <a class="linkred" href='../adminAnaSayfa.php'>Geri dönmek için tıkla</a> </td>
    </tr>
</table>
        </table>
        


    </form>
    
</body>
<script type="text/javascript">
    function getFile() {
  document.getElementById("upfile").click();
}

function sub(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
  document.myForm.submit();
  event.preventDefault();
}
</script>
</html>