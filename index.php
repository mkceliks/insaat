<?php include_once 'server.php'; ?>
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
                     <li><a data-scroll href="#about">PROJELER <span class="hidden-xs">*</span></a></li>
                     
                     <li><a data-scroll href="#projects">GALERİ</a></li>
                     <li><a data-scroll href="#testimonials">KADROMUZ</a></li>
                     <li><a data-scroll href="#contact">BİZİMLE İLETİŞİME GEÇİN</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      
      <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('uploads/building/slide-img1.png');">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center">
                  <div class="big-tagline">
                     <img class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />
                     <h2><span class="yellow">KOYUKAN İNŞAAT</span></h2>
                     <img style="margin-bottom:40px;" class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />
                     
                     <p class="lead"><?php 
                     $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'en_ust_yazi'";
                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_assoc($result);

                     $en_ust_yazi_icerik = $row['icerik'];
                     echo $en_ust_yazi_icerik;
                     
                     ?></p>
                     
                     <a data-scroll href="#about" class="btn btn-light btn-radius btn-brd">Tüm projeleri gör</a>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="about" class="section wb">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h2>Hakkımızda</h2>
                     <h5>
                     <?php 
                     $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'slogan'";
                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_assoc($result);

                     $slogan_icerik = $row['icerik'];
                     echo $slogan_icerik;
                     
                     ?>
                     </h5>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <p class="lead">
                     
                     <?php 
                     $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'hakkimizda'";
                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_assoc($result);

                     $hakkimizda_icerik = $row['icerik'];
                     echo $hakkimizda_icerik;
                     
                     ?>

                     </p>
                     
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            
            <div class="row text-center about-row">
            
               <?php 

               $sql = "SELECT * FROM projeler";
               $result = mysqli_query($conn, $sql);
               while($row = mysqli_fetch_assoc($result)){
                  $proje_resimleri = explode('* ', $row['p_resimler']);
                  $ilk_resim_yol = "images/projeler/".$proje_resimleri[0];
                  $pid = $row["pid"];
                  
                  ?>
                  <div style="float: left;" class='col-md-4 col-sm-6 col-xs-12'>
                     <div class='row'>
                        
                        <div class='service-widget'> <!-- Projeleri buraya yap-->
                           <div class='post-media wow fadeIn'  >
                              <a href= 'proje_goster.php?pid=<?php echo $pid; ?>'  class='hoverbutton global-radius'><i class='flaticon-unlink'></i></a>
                             <img width="200" height="200" src="<?php echo $ilk_resim_yol; ?>" alt=''  >
                           </div>
                           <h3><?php echo $row['p_icerik']; ?></h3>
                           <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin.
                              Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                        </div><!-- -->
                        
                        
                        <!-- end service -->
                     </div>
                  </div>
              <?php } ?>
               
          
               



               



               
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
         <div class="sep1"></div>
      </div>
      <!-- end section -->
      <div id="services" class="parallax section db parallax-off no-padding-bottom"  >
        
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 serv" style="background-color:#222;">
                  <div class="serv-blog">
                     <img src="images/sr1.png" alt="#" />
                  </div>
                  <div class="serv-blog-cont">
                     <h3>Manufacturing</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv" style="background:#181818;">
                  <div class="serv-blog">
                     <img src="images/sr2.png" alt="#" />
                  </div>
                  <div class="serv-blog-cont">
                     <h3>Fabrication</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv" style="background:#222;">
                  <div class="serv-blog">
                     <img src="images/sr3.png" alt="#" />
                  </div>
                  <div class="serv-blog-cont">
                     <h3>Construction</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <div id="projects" class="section">
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
                     <?php 
                        $resim = array();
                        $dizin = "images/projeler" ;
                        $tutucu = opendir($dizin);
                        while($dosya = readdir($tutucu)){
                        if(is_file($dizin."/".$dosya))
                        $resim[] = $dosya;
                        }
                        closedir($tutucu);
                        $toplam = count($resim);
                        
                        $rastgele = array();

                        for($i=0; $i<$toplam+1; $i++){
                           $rastgele[$i] = rand(0, $toplam-1);

                        }
                        
                        
                        for($j = 0; $j<6; $j++){
                     ?>
                        
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#<?php echo $j+1; ?>">
                              <img src=<?php echo $dizin."/".$resim[$rastgele[$j]];  ?> alt="#" />
                              </a>
                              <div class="modal fade" id="<?php echo $j+1; ?>" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src=<?php echo $dizin."/".$resim[$rastgele[$j]];  ?> alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>Rastgele proje resimleri</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <?php } ?>

                        
                        
                        
                        
                        
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <div id="testimonials" class="section db">
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3>Kadromuz</h3>
                  
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="testi-carousel owl-carousel owl-theme">
                     
                     <?php 
                        $sql1 = "SELECT * FROM calisanlar";
                        $result1 = mysqli_query($conn, $sql1);
                        
                        while($eleman = mysqli_fetch_assoc($result1)){

                     
                     ?>
                     
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i><?php echo $eleman['yazi_baslik']; ?></h3>
                           <p class="lead"><?php echo $eleman['yazi']; ?></p>
                        </div>
                        <div class="testi-meta">
                           <img src="images/calisanlar/<?php echo $eleman['resim']; ?>" alt="" class="img-responsive alignleft">
                           <h4><?php echo $eleman['isim_soyad'] ?><small>- <?php echo $eleman['departman'] ?></small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>

                     <?php } ?>





                     <!-- end testimonial -->
                  </div>
                  <!-- end carousel -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      
      <div id="contact" class="section wb">
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3>BİZİMLE İLETİŞİME GEÇİN</h3>
                  
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="contant-info">
                     <ul class="item-display-block">
                        <li>
                           <div class="info-shape accent-color background fs-23">
                              <div class="icon"><i class="fa fa-home"></i></div>
                           </div>
                           <div class="info-content">
                              <h6 class="uppercase"> Address:</h6>
                              <p> 
                              <?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'adres'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $adres_icerik = $row['icerik'];
                                 echo $adres_icerik;
                     
                              ?>
                              </p>
                           </div>
                        </li>
                        <li>
                           <div class="info-shape accent-color background fs-23">
                              <div class="icon"><i class="fa fa-volume-control-phone"></i></div>
                           </div>
                           <div class="info-content">
                              <h6 class="uppercase"> Telefon numarası :</h6>
                              <p> 

                              <?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'telefon'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $telefon_icerik = $row['icerik'];
                                 echo $telefon_icerik;
                     
                              ?>
                              </p>
                           </div>
                        </li>
                        <li>
                           <div class="info-shape accent-color background fs-23">
                              <div class="icon"><i class="fa fa-envelope-o"></i></div>
                           </div>
                           <div class="info-content">
                              <h6 class="uppercase"> Email Address:</h6>
                              <p><?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'e-mail'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $email_icerik = $row['icerik'];
                                 echo $email_icerik;
                     
                              ?></p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="contact_form">
                     <div id="message"></div>
                     <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                        <fieldset class="row-fluid">
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Adınız(Zorunlu)" required>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Soyadınız(Zorunlu)" required>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="email" name="email" id="email" class="form-control" placeholder="E-mail adresiniz">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefonunuz(Zorunlu)" required>
                           </div>
                           
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Daha fazla detay vermek ister misiniz?"></textarea>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                              <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Gönder</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <p style="text-align: center;">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.1184952196545!2d35.323215815253675!3d37.00696937990656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f8699ed2081%3A0x6ac9bea54f75bd75!2sKoyukan%20in%C5%9Faat!5e0!3m2!1str!2str!4v1609262083121!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
      </p>
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
                        <li><a data-scroll="" href="#about">Projeler</a></li>
                        
                        <li><a data-scroll="" href="#projects">Galeri</a></li>
                        <li><a data-scroll="" href="#testimonials">Kadromuz</a></li>
                        <li><a data-scroll="" href="#contact">Bizimle iletişime geçin</a></li>
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
                        <div id="copyright">All Rights Reserved. Company Name © 2018</div>
                        <!-- /#copyright -->
                     </div>
                     <!-- /.bottom-bar-content -->
                     <div class="bottom-bar-menu pull-right">
                        <ul class="bottom-nav">
                           <li><a href="#/">HISTORY</a></li>
                           <li><a href="#/">FAQ</a></li>
                           <li><a href="#/">EVENTS</a></li>
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

