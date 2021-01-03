<?php 
include_once "../server.php";
include_once "../session.php";

if(isset($_GET['resimisim'])){
    
    
    if($_GET["pid"]){
        
    $resimad = $_GET["resimisim"];//Bu bir stringtir bunu array yapmalıyız
    $KIMLIK = $_GET["pid"];
    
    
    
        
        
        $sorgu = $conn->prepare("UPDATE projeler SET p_resimler = ? WHERE pid = '$KIMLIK'");
        $sorgu->bind_param("s", $resimad);
        $sorgu->execute();
        echo "Ekleme başarılı devam etmek için <a href='projeleri_al.php'>tıklayınız</a>";
        
        
        

    
    
    }else{echo "HATA <a href='projeleri_al.php'>tıklayınız</a>" ;}
}else{echo "HATA <a href='projeleri_al.php'>tıklayınız</a>";}


?>