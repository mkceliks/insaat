<?php 
include_once "../server.php";
include_once "../session.php";

if(isset($_GET['resimisim'])){
    
    
    if($_GET["arkaplan_isim"]){
        
    $resimad = $_GET["resimisim"];
    $KIMLIK = $_GET["arkaplan_isim"];
    
    $sql = "SELECT arkaplan_isim FROM arkaplanlar WHERE arkaplan_isim= '$KIMLIK' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
   
        
        
        $sorgu = $conn->prepare("UPDATE arkaplanlar SET arkaplan_yol = ? WHERE arkaplan_isim = '$KIMLIK'");
        $sorgu->bind_param("s", $resimad);
        $sorgu->execute();
        echo "Ekleme başarılı <img style='width:25px;' src='../images/tick.png'>";
        header("Refresh: 2; url=../adminAnaSayfa.php");
        
        
        

    
    
    }else{echo "HATA2 <a href='../adminAnaSayfa.php'>tıklayınız</a>" ;}
}else{echo "HATA3 <a href='../adminAnaSayfa.php'>tıklayınız</a>";}


?>