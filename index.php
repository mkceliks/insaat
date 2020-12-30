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
   <title>Constructed - Responsive HTML5 Landing Page Template</title>
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
                              <a class="socials-item" href="#" target="_blank" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                              <a class="socials-item" href='<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'twitter'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $twitter_icerik = $row['icerik'];
                                 echo $twitter_icerik;
                     
                              ?>' target="_blank" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                              <a class="socials-item" href="#" target="_blank" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
                              <a class="socials-item" href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a> 
                              <a class="socials-item" href="#" target="_blank" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
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
                     <li class="active"><a data-scroll href="#home">Ana Sayfa</a></li>
                     <li><a data-scroll href="#about">Hakkımızda <span class="hidden-xs">*</span></a></li>
                     <li><a data-scroll href="#services">Servisler</a></li>
                     <li><a data-scroll href="#projects">Projelerimiz</a></li>
                     <li><a data-scroll href="#testimonials">Görüşler</a></li>
                     <li><a data-scroll href="#contact">Bizimle iletişime geçin</a></li>
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
                     
                     <a data-scroll href="#services" class="btn btn-light btn-radius btn-brd">Tüm servisleri gör</a>
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
            
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="service-widget">
                        <div class="post-media wow fadeIn">
                           <a href="uploads/building_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                           <img src="uploads/building_01.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Spacious and Large Garden</h3>
                        <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                     </div>
                     <div class="service-widget">
                        <div class="post-media wow fadeIn">
                           <a href="uploads/building_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                           <img src="uploads/building_01.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Spacious and Large Garden</h3>
                        <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                     </div>
                     <!-- end service -->
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="service-widget">
                        <div class="post-media wow fadeIn">
                           <a href="uploads/building_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                           <img src="uploads/building_02.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>With its Own Pool</h3>
                        <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                     </div>
                     <!-- end service -->
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="service-widget">
                        <div class="post-media wow fadeIn">
                           <a href="uploads/building_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                           <img src="uploads/building_03.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>In Forests- Fresh Clean Air</h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                     </div>
                     <!-- end service -->
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
         <div class="sep1"></div>
      </div>
      <!-- end section -->
      <div id="services" class="parallax section db parallax-off no-padding-bottom"  >
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h2>Servisler</h2>
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
               <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-inform">
                           <div class="icon-service">
                              <img src="images/icon1.png" alt="#" />
                           </div>
                           <div class="service-inform-text">
                              <h3>Service One</h3>
                              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-inform">
                           <div class="icon-service">
                              <img src="images/icon4.png" alt="#" />
                           </div>
                           <div class="service-inform-text">
                              <h3>Service Two</h3>
                              <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
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
                     <h2>Our Projects</h2>
                     <h5>Contrary to popular belief, Lorem Ipsum is not simply random text.</h5>
                  </div>
                  <!-- end messagebox -->
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="container gal-container">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#1">
                              <img src="images/pro1.png" alt="#" />
                              </a>
                              <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro1.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the first one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#2">
                              <img src="images/pro2.png" alt="#" />
                              </a>
                              <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro2.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the second one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#3">
                              <img src="images/pro3.png" alt="#" />
                              </a>
                              <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro3.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the third one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#4">
                              <img src="images/pro4.png" alt="#" />
                              </a>
                              <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro4.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the fourth one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#5">
                              <img src="images/pro3.png" alt="#" />
                              </a>
                              <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro4.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the fifth one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#9">
                              <img src="images/pro2.png" alt="#" />
                              </a>
                              <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro2.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the ninth one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#10">
                              <img src="images/pro1.png" alt="#" />
                              </a>
                              <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro1.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the tenth one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
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
                  <h3>Testimonials</h3>
                  <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="testi-carousel owl-carousel owl-theme">
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                           <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                           <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                           <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                           <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">
                           <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                           <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                           <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">
                           <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                           <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                           <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                           <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                           <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                           <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">
                           <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                           <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                           <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">
                           <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                           <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
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
                              <p> 1010 Berkler avenue, Brooklyn New York City, NY 10018 US</p>
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
                              <p>Demo@gmail.com</p>
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
                              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Adınız">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Soyadınız">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="email" name="email" id="email" class="form-control" placeholder="E-mail adresiniz">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="phone" id="phone" class="form-control" placeholder="Siteniz">
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <label class="sr-only">Select Department</label>
                              <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                 <option value="12">Servis seçin</option>
                                 <option value="Building Service">Building Service</option>
                                 <option value="Tover Design">Tover Design</option>
                                 <option value="Others">Others</option>
                              </select>
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
                        <a class="navbar-brand" href="index-building.html"><img src="images/logo-icon.png" alt="image"><span>Constructed</span></a>
                        <p>Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit ege  Aenean suscipit eget mi act fermentum phasellus.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="widget widget_links">
                     <h2 class="widget-title"><span>Linkler</span></h2>
                     <ul class="wprt-links clearfix col2">
                        <li><a data-scroll="" href="#home">Ana Sayfa</a></li>
                        <li><a data-scroll="" href="#about">Hakkımızda</a></li>
                        <li><a data-scroll="" href="#services">Servisler</a></li>
                        <li><a data-scroll="" href="#projects">Projelerimiz</a></li>
                        <li><a data-scroll="" href="#testimonials">Görüşler</a></li>
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
                           <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                        </li>
                        <li class="phone clearfix">
                           <span class="hl">Telefon:</span> 
                           <span class="text">
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
                           <span class="hl">E-mail:</span>
                           <span class="text">business@support.com</span>
                        </li>
                     </ul>
                  </div>
                  <div class="widget widget_socials">
                     <div class="socials">
                        <a target="_blank" href=<?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'twitter'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $twitter_icerik = $row['icerik'];
                                 echo $twitter_icerik;
                     
                              ?>><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href= <?php 
                                 $sql = "SELECT icerik FROM icerikler WHERE icerik_ismi = 'facebook'";
                                 $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);

                                 $facebook_icerik = $row['icerik'];
                                 echo $facebook_icerik;
                     
                              ?>>
                           <i class="fa fa-facebook"></i>
                        </a>
                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
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

