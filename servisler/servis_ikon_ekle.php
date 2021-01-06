<?php 
include_once "../server.php";
include_once "../session.php";

if(isset($_GET['resimisim'])){
    
    
    if($_GET["servis_id"]){
        
    $resimad = $_GET["resimisim"];
    $KIMLIK = $_GET["servis_id"];
    
    $sql = "SELECT servis_ismi FROM servisler WHERE servis_id= '$KIMLIK' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['servis_ismi']){
        
        
        $sorgu = $conn->prepare("UPDATE servisler SET servis_ikon = ? WHERE servis_id = '$KIMLIK'");
        $sorgu->bind_param("s", $resimad);
        $sorgu->execute();
        echo "Ekleme başarılı devam etmek için <a href='servisleri_goster.php'>tıklayınız</a>";
        
        
        

    }else{echo "HATA <a href='servisleri_goster.php'>tıklayınız</a>";}
    
    }else{echo "HATA <a href='servisleri_goster.php'>tıklayınız</a>" ;}
}else{echo "HATA <a href='servisleri_goster.php'>tıklayınız</a>";}


?>