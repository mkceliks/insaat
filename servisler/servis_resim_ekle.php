<?php 
include_once "../server.php";
include_once "../session.php";

if(isset($_GET['resimisim'])){
    
    
    if($_GET["servis_id"]){
        
    $resimad = $_GET["resimisim"];//Bu bir stringtir bunu array yapmalıyız
    $KIMLIK = $_GET["servis_id"];
    
    
    
        
        
        $sorgu = $conn->prepare("UPDATE servisler SET servis_resimler = ? WHERE servis_id = '$KIMLIK'");
        $sorgu->bind_param("s", $resimad);
        $sorgu->execute();
        echo "Ekleme başarılı devam etmek için <a href='servisleri_goster.php'>tıklayınız</a>";
        
        
        

    
    
    }else{echo "HATA <a href='servisleri_goster.php'>tıklayınız</a>" ;}
}else{echo "HATA <a href='servisleri_goster.php'>tıklayınız</a>";}


?>