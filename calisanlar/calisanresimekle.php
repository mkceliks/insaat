<?php 
include_once "../server.php";
include_once "../session.php";

if(isset($_GET['resimisim'])){
    
    
    if($_GET["ID"]){
        
    $resimad = $_GET["resimisim"];
    $KIMLIK = $_GET["ID"];
    
    $sql = "SELECT isim_soyad FROM calisanlar WHERE id= '$KIMLIK' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['isim_soyad']){
        
        
        $sorgu = $conn->prepare("UPDATE calisanlar SET resim = ? WHERE id = '$KIMLIK'");
        $sorgu->bind_param("s", $resimad);
        $sorgu->execute();
        echo "Ekleme başarılı devam etmek için <a href='veriyial.php'>tıklayınız</a>";
        
        
        

    }else{echo "HATA <a href='veriyial.php'>tıklayınız</a>";}
    
    }else{echo "HATA <a href='veriyial.php'>tıklayınız</a>" ;}
}else{echo "HATA <a href='veriyial.php'>tıklayınız</a>";}


?>