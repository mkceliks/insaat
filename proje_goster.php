<?php
# Resimleri cek

include_once "server.php";
?><?php include_once 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Koyukan İnşaat</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- building CSS -->
   <link rel="stylesheet" href="css/building.css">
   </head>
   <body class="building_version" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/loader-building2.gif" alt="">
      </div>
      <!-- end loader -->
      <!-- END LOADER -->
      <header class="header header_style_01">
         <nav class="megamenu navbar navbar-default" data-spy="affix">
            <div class="top-header">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-hidden">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-hidden">
                           <div class="gem-contacts-item gem-contacts-phone">
                              <a class="phone-icon" href="#" target="_blank" title="phone"><i class="fa fa-phone" aria-hidden="true"></i>
                              <?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'telefon'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $telefon_icerik = $row['icerik'];
                                 echo $telefon_icerik;
                     
                              ?>
                           
                              </a>
                           </div>
                        </div>
                        <div class="top-area-block top-area-socials socials-colored-hover">
                           <div class="socials inline-inside"> 
                              <a class="socials-item" href='<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'facebook'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $facebook_icerik = $row['icerik'];
                                 echo $facebook_icerik;
                     
                              ?>' target="_blank" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                              <a class="socials-item" href='<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'twitter'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $twitter_icerik = $row['icerik'];
                                 echo $twitter_icerik;
                     
                              ?>' target="_blank" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                              <a class="socials-item" href='<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'instagram'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $instagram_icerik = $row['icerik'];
                                 echo $instagram_icerik;
                     
                              ?>' target="_blank" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                              <a class="socials-item" href='<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'linkedin'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $linkedin_icerik = $row['icerik'];
                                 echo $linkedin_icerik;
                     
                              ?>' target="_blank" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>  
                              <a class="socials-item" href='<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'pinterest'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $pinterest_icerik = $row['icerik'];
                                 echo $pinterest_icerik;
                     
                              ?>' target="_blank" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a> 
                              <a class="socials-item" href='<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'youtube'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $youtube_icerik = $row['icerik'];
                                 echo $youtube_icerik;
                     
                              ?>' target="_blank" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.php"><img src="images/logo-icon.png" alt="image"><span>Koyukan İnşaat</span></a>
               </div>
               <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <li class="active"><a data-scroll href="#home">ANA SAYFA</a></li>
                     
                     
                     <li><a data-scroll href="#galeri">GALERİ</a></li>
                     
                     <li><a data-scroll href="http://localhost:8888/insaat/#iletisim">BİZİMLE İLETİŞİME GEÇİN</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      
      <div id="home" class="parallax" data-stellar-background-ratio="0.4" style="background-image:url('images/projeler/foto.jpg');">
         <div class="container">
            <div class="row">
               <div style="margin-top: 7%;" class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center">
                  <div class="big-tagline">
                     <img class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />
                     <h2 style="margin-bottom: 7%;"><span style="text-align: center;" class="yellow"><?php if(isset($_GET['pid'])){$pid = $_GET['pid'];
                     $sql = "SELECT * FROM projeler WHERE pid='$pid'";
                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_assoc($result);

                     $isim = $row['p_ismi'];
                     $icerik = $row['p_icerik'];
                     $resimler = explode("* ", $row['p_resimler']);

                     $toplam = count($resimler)-1;
                     $dizin = "images/projeler";
                     echo $isim; ?></span></h2>
                     <img style="margin-bottom:40px;" class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />
                     
                     <p class="lead"><?php 
                     $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'en_ust_yazi'";
                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_assoc($result);

                     $en_ust_yazi_icerik = $row['icerik'];
                     echo $en_ust_yazi_icerik;
                     
                     ?></p>
                     
                     <a data-scroll style="margin-top: 3%;" href="#galeri" class="btn btn-light btn-radius btn-brd grd1 ">Resim Galerisini Görüntüle</a>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
   
          
             

               




      <!-- end section -->
      <div id="galeri" class="section">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h2>PROJE GALERİMİZ</h2>
                     
                  </div>
                  <!-- end messagebox -->
               </div>
               
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="container gal-container">
         
<?php    echo "
    <h3><center>  $isim  </center></h3>
        <p> $icerik </p>
    ";
    for($i=0; $i < $toplam; $i++){
                        
                     ?>
                        
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="<?php echo $dizin."/".$resimler[$i]; ?>" data-toggle="modal" target="_blank">
                              <img src='<?php echo $dizin."/".$resimler[$i]; ?>' alt="#"  />
                              </a>
                              <div class="modal fade" id="<?php echo $j+1; ?>" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src=<?php echo $dizin."/"  ?>  />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>Rastgele proje resimleri</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <?php }} ?>

                        
                        
                        
                        
                        
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
    


      <!-- end section -->
     
      <!-- footer -->
      <footer id="footer">
         <div id="footer-widgets" class="container style-1">
            <div class="row">
               <div class="col-md-4">
                  <div class="widget widget_text">
                     <h2 class="widget-title"><span>Hakkımızda</span></h2>
                     <div class="textwidget">
                        <a class="navbar-brand" href="index-building.html"><img height="200"; src="images/logo-icon.png" alt="image"><span>Constructed</span></a>
                        <p><?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'hakkimizda_footer'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $hakkimizda_footer_icerik = $row['icerik'];
                                 echo $hakkimizda_footer_icerik;
                     
                              ?></p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="widget widget_links">
                     <h2 class="widget-title"><span>Linkler</span></h2>
                     <ul class="wprt-links clearfix col2">
                        <li><a data-scroll="" href="#home">Ana Sayfa</a></li>
                        <li><a data-scroll="" href="#projeler">Projeler</a></li>
                        <li><a data-scroll="" href="#services">DİĞER SERVİSLER</a></li>
                        <li><a data-scroll="" href="#galeri">Galeri</a></li>
                        <li><a data-scroll="" href="#kadro">Kadromuz</a></li>
                        <li><a data-scroll="" href="#iletisim">Bizimle iletişime geçin</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="widget widget_information">
                     <h2 class="widget-title"><span>İletişim Bilgileri</span></h2>
                     <ul>
                        <li class="address clearfix">
                           <span class="hl">Adres:</span>
                           <span style="margin-left: 1px;" class="text"><?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'adres'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $adres_icerik = $row['icerik'];
                                 echo $adres_icerik;
                     
                              ?></span>
                        </li>
                        <li class="phone clearfix">
                           <span class="hl">Telefon:</span> 
                           <span style="margin-left: 1px;" class="text">
                           <?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'telefon'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $telefon_icerik = $row['icerik'];
                                 echo $telefon_icerik;
                     
                              ?>
                           </span>
                        </li>
                        <li class="email clearfix">
                           <span class="hl">Email:
                           <span class="text"><?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'e-mail'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $email_icerik = $row['icerik'];
                                 echo $email_icerik;
                     
                              ?></span>
                        </li>
                     </ul>
                  </div>
                  <div class="widget widget_socials">
                     <div class="socials">
                        <a target="_blank" href='<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'twitter'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $twitter_icerik = $row['icerik'];
                                 echo $twitter_icerik;
                     
                              ?>'><i class="fa fa-twitter"></i></a>
                              <a target="_blank" href='<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'instagram'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $instagram_icerik = $row['icerik'];
                                 echo $instagram_icerik;
                     
                              ?>'><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href= <?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'facebook'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $facebook_icerik = $row['icerik'];
                                 echo $facebook_icerik;
                     
                              ?>>
                           <i class="fa fa-facebook"></i>
                        </a>
                        <a target="_blank" href= <?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'linkedin'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $linkedin_icerik = $row['icerik'];
                                 echo $linkedin_icerik;
                     
                              ?>>
                           <i class="fa fa-linkedin"></i>
                        </a>
                  
                        <a target="_blank" href=<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'pinterest'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $pinterest_icerik = $row['icerik'];
                                 echo $pinterest_icerik;
                     
                              ?>><i class="fa fa-pinterest"></i></a>

                              <a target="_blank" href=<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'youtube'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $youtube_icerik = $row['icerik'];
                                 echo $youtube_icerik;
                     
                              ?>><i class="fa fa-youtube"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="bottom" class="clearfix style-1">
            <div class="container">
               <div id="bottom-bar-inner" class="wprt-container">
                  <div class="bottom-bar-inner-wrap">
                     <div class="bottom-bar-content">
                        <div id="copyright">Bu site Koyukan İnşaat için özenle hazırlanmıştır.</div>
                        <!-- /#copyright -->
                     </div>
                     <!-- /.bottom-bar-content -->
                     <div class="bottom-bar-menu pull-right">
                        <ul class="bottom-nav">
                           <li><a href="#/">Gizlilik ve Güvenlik</a></li>
                           
                        </ul>
                     </div>
                     <!-- /.bottom-bar-menu -->
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
      <script src="js/portfolio.js"></script>
      <script src="js/hoverdir.js"></script> 

   </body>
</html>



