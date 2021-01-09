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
   <title>Koyukan İnşaat Projeler</title>
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
                     
                     
                     <li><a data-scroll href="http://localhost:8888/insaat/#galeri">GALERİ</a></li>
                     
                     <li><a data-scroll href="http://localhost:8888/insaat/#iletisim">BİZİMLE İLETİŞİME GEÇİN</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      
      <div id="home" class="parallax" data-stellar-background-ratio="0.4" style="background-image:url('images/gizlilikfoti.jpg');">
         <div class="container">
            <div class="row">
               <div style="margin-top: 7%;" class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center">
                  <div class="big-tagline">
                     <img class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />
                     <h2 style="margin-bottom: 7%;"><span style="text-align: center;font-weight: bold;font-size:75px;color: #fdc42e;" >Gizlilik Politikası</span></h2>
                     <img style="margin-bottom:40px;" class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />      
                    
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->

      <div class="section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h3 style="text-align: center;font-weight: bold;font-size: 54px;">Gizlilik Politikamız</h3>
                     
                  </div>
                  <!-- end messagebox -->
               </div>
               
     
     <div style="color:#4f2f2f">
      
      <div>
         
         <br><br>

      </div>
      
      <h2>GİZLİLİK VE GÜVENLİK POLİTİKASI</h2>
      
      <div>&nbsp;</div>
      
      <div>Mağazamızda verilen tüm servisler ve ,………… adresinde kayıtlı &nbsp;……………….Şti. firmamıza aittir ve firmamız tarafından işletilir.&nbsp;</div>
      
      <div>
         
         <br>

      </div>
      
      <div>Firmamız, çeşitli amaçlarla kişisel veriler toplayabilir. Aşağıda, toplanan kişisel verilerin nasıl ve ne şekilde toplandığı, bu verilerin nasıl ve ne şekilde korunduğu belirtilmiştir.&nbsp;</div>
      
      <div>
    
         <br>

      </div>
      <div>Üyelik veya Mağazamız üzerindeki çeşitli form ve anketlerin doldurulması suretiyle üyelerin kendileriyle ilgili bir takım kişisel bilgileri (isim-soy isim, firma bilgileri, telefon, adres veya e-posta adresleri gibi) Mağazamız tarafından işin doğası gereği toplanmaktadır.&nbsp;</div>
      <div>
         <br>
      </div>
      <div>Firmamız bazı dönemlerde müşterilerine ve üyelerine kampanya bilgileri, yeni ürünler hakkında bilgiler, promosyon teklifleri gönderebilir. Üyelerimiz bu gibi bilgileri alıp almama konusunda her türlü seçimi üye olurken yapabilir, sonrasında üye girişi yaptıktan sonra hesap bilgileri bölümünden bu seçimi değiştirilebilir ya da kendisine gelen bilgilendirme iletisindeki linkle bildirim yapabilir.&nbsp;</div>
      <div>
         <br>
      </div>
      <div>Mağazamız üzerinden veya eposta ile gerçekleştirilen onay sürecinde, üyelerimiz tarafından mağazamıza elektronik ortamdan iletilen kişisel bilgiler, Üyelerimiz ile yaptığımız "Kullanıcı Sözleşmesi" ile belirlenen amaçlar ve kapsam dışında üçüncü kişilere açıklanmayacaktır.</div>
      <div>
         <br>
      </div>
      <div>Sistemle ilgili sorunların tanımlanması ve verilen hizmet ile ilgili çıkabilecek sorunların veya uyuşmazlıkların hızla çözülmesi için, Firmamız, üyelerinin IP adresini kaydetmekte ve bunu kullanmaktadır. IP adresleri, kullanıcıları genel bir şekilde tanımlamak ve kapsamlı demografik bilgi toplamak amacıyla da kullanılabilir.</div>
      <div>
         <br>
      </div>
      <div>Firmamız, Üyelik Sözleşmesi ile belirlenen amaçlar ve kapsam dışında da, talep edilen bilgileri kendisi veya işbirliği içinde olduğu kişiler tarafından doğrudan pazarlama yapmak amacıyla kullanabilir. &nbsp;Kişisel bilgiler, gerektiğinde kullanıcıyla temas kurmak için de kullanılabilir. Firmamız tarafından talep edilen bilgiler veya kullanıcı tarafından sağlanan bilgiler veya Mağazamız üzerinden yapılan işlemlerle ilgili bilgiler; Firmamız ve işbirliği içinde olduğu kişiler tarafından, "Üyelik Sözleşmesi" ile belirlenen amaçlar ve kapsam dışında da, üyelerimizin kimliği ifşa edilmeden çeşitli istatistiksel değerlendirmeler, veri tabanı oluşturma ve pazar araştırmalarında kullanılabilir.</div>
      <div>
         <br>
      </div>
      <div>Firmamız, gizli bilgileri kesinlikle özel ve gizli tutmayı, bunu bir sır saklama yükümü olarak addetmeyi ve gizliliğin sağlanması ve sürdürülmesi, gizli bilginin tamamının veya herhangi bir kısmının kamu alanına girmesini veya yetkisiz kullanımını veya üçüncü bir kişiye ifşasını önlemek için gerekli tüm tedbirleri almayı ve gerekli özeni göstermeyi taahhüt etmektedir.</div>
      <div>&nbsp;</div>
      <div><h2>KREDİ KARTI GÜVENLİĞİ</h2></div>
      <div>&nbsp;</div>
      <div>Firmamız, alışveriş sitelerimizden alışveriş yapan kredi kartı sahiplerinin güvenliğini ilk planda tutmaktadır. Kredi kartı bilgileriniz hiçbir şekilde sistemimizde saklanmamaktadır.</div>
      <div>&nbsp;</div>
      <div>İşlemler sürecine girdiğinizde güvenli bir sitede olduğunuzu anlamak için dikkat etmeniz gereken iki şey vardır. Bunlardan biri tarayıcınızın en alt satırında bulunan bir anahtar ya da kilit simgesidir. Bu güvenli bir internet sayfasında olduğunuzu gösterir ve her türlü bilgileriniz şifrelenerek korunur. Bu bilgiler, ancak satış işlemleri sürecine bağlı olarak ve verdiğiniz talimat istikametinde kullanılır. Alışveriş sırasında kullanılan kredi kartı ile ilgili bilgiler alışveriş sitelerimizden bağımsız olarak 128 bit SSL (Secure Sockets Layer) protokolü ile şifrelenip sorgulanmak üzere ilgili bankaya ulaştırılır. Kartın kullanılabilirliği onaylandığı takdirde alışverişe devam edilir. Kartla ilgili hiçbir bilgi tarafımızdan görüntülenemediğinden ve kaydedilmediğinden, üçüncü şahısların herhangi bir koşulda bu bilgileri ele geçirmesi engellenmiş olur.</div>
      <div>Online olarak kredi kartı ile verilen siparişlerin ödeme/fatura/teslimat adresi bilgilerinin güvenilirliği firmamiz tarafından Kredi Kartları Dolandırıcılığı'na karşı denetlenmektedir. Bu yüzden, alışveriş sitelerimizden ilk defa sipariş veren müşterilerin siparişlerinin tedarik ve teslimat aşamasına gelebilmesi için öncelikle finansal ve adres/telefon bilgilerinin doğruluğunun onaylanması gereklidir. Bu bilgilerin kontrolü için gerekirse kredi kartı sahibi müşteri ile veya ilgili banka ile irtibata geçilmektedir.</div>
      <div>Üye olurken verdiğiniz tüm bilgilere sadece siz ulaşabilir ve siz değiştirebilirsiniz. Üye giriş bilgilerinizi güvenli koruduğunuz takdirde başkalarının sizinle ilgili bilgilere ulaşması ve bunları değiştirmesi mümkün değildir. Bu amaçla, üyelik işlemleri sırasında 128 bit SSL güvenlik alanı içinde hareket edilir. Bu sistem kırılması mümkün olmayan bir uluslararası bir şifreleme standardıdır.</div>
      <div>
         <br>
      </div>
      <div>Bilgi hattı veya müşteri hizmetleri servisi bulunan ve açık adres ve telefon bilgilerinin belirtildiği İnternet alışveriş siteleri günümüzde daha fazla tercih edilmektedir. Bu sayede aklınıza takılan bütün konular hakkında detaylı bilgi alabilir, online alışveriş hizmeti sağlayan firmanın güvenirliği konusunda daha sağlıklı bilgi edinebilirsiniz.&nbsp;</div>
      <div>&nbsp;</div>
      <div>Not: İnternet alışveriş sitelerinde firmanın açık adresinin ve telefonun yer almasına dikkat edilmesini tavsiye ediyoruz. Alışveriş yapacaksanız alışverişinizi yapmadan ürünü aldığınız mağazanın bütün telefon / adres bilgilerini not edin. Eğer güvenmiyorsanız alışverişten önce telefon ederek teyit edin. Firmamıza ait tüm online alışveriş sitelerimizde firmamıza dair tüm bilgiler ve firma yeri belirtilmiştir.</div>
      <div>&nbsp;</div>
      <div><h2>MAİL ORDER KREDİ KART BİLGİLERİ GÜVENLİĞİ</h2></div>
      <div>&nbsp;</div>
      <div>Kredi kartı mail-order yöntemi ile bize göndereceğiniz kimlik ve kredi kart bilgileriniz firmamız tarafından gizlilik prensibine göre saklanacaktır. Bu bilgiler olası banka ile oluşubilecek kredi kartından para çekim itirazlarına karşı 60 gün süre ile bekletilip daha sonrasında imha edilmektedir. Sipariş ettiğiniz ürünlerin bedeli karşılığında bize göndereceğiniz tarafınızdan onaylı mail-order formu bedeli dışında herhangi bir bedelin kartınızdan çekilmesi halinde doğal olarak bankaya itiraz edebilir ve bu tutarın ödenmesini engelleyebileceğiniz için bir risk oluşturmamaktadır.&nbsp;</div>
      <div>
         <br>
      </div>
      <div>
         <br>
      </div>
      <div><h2>ÜÇÜNCÜ TARAF WEB SİTELERİ VE UYGULAMALAR</h2></div>
      <div>Mağazamız, &nbsp;web sitesi dâhilinde başka sitelere link verebilir. Firmamız, bu linkler vasıtasıyla erişilen sitelerin gizlilik uygulamaları ve içeriklerine yönelik herhangi bir sorumluluk taşımamaktadır. Firmamıza ait sitede yayınlanan reklamlar, reklamcılık yapan iş ortaklarımız aracılığı ile kullanıcılarımıza dağıtılır. İş bu sözleşmedeki Gizlilik Politikası Prensipleri, sadece Mağazamızın kullanımına ilişkindir, üçüncü taraf web sitelerini kapsamaz.&nbsp;</div>
      <div>
         <br>
      </div>
      <div><h2>İSTİSNAİ HALLER</h2></div>
      <div>Aşağıda belirtilen sınırlı hallerde Firmamız, işbu "Gizlilik Politikası" hükümleri dışında kullanıcılara ait bilgileri üçüncü kişilere açıklayabilir. Bu durumlar sınırlı sayıda olmak üzere;</div>
      <div>1.Kanun, Kanun Hükmünde Kararname, Yönetmelik v.b. yetkili hukuki otorite tarafından çıkarılan ve yürürlülükte olan hukuk kurallarının getirdiği zorunluluklara uymak;</div>
      <div>2.Mağazamızın kullanıcılarla akdettiği "Üyelik Sözleşmesi"'nin ve diğer sözleşmelerin gereklerini yerine getirmek ve bunları uygulamaya koymak amacıyla;</div>
      <div>3.Yetkili idari ve adli otorite tarafından usulüne göre yürütülen bir araştırma veya soruşturmanın yürütümü amacıyla kullanıcılarla ilgili bilgi talep edilmesi;</div>
      <div>4.Kullanıcıların hakları veya güvenliklerini korumak için bilgi vermenin gerekli olduğu hallerdir.&nbsp;</div>
      <div>
         <br>
      </div>
      <div><h2>E-POSTA GÜVENLİĞİ</h2></div>
      <div>Mağazamızın Müşteri Hizmetleri’ne, herhangi bir siparişinizle ilgili olarak göndereceğiniz e-postalarda, asla kredi kartı numaranızı veya şifrelerinizi yazmayınız. E-postalarda yer alan bilgiler üçüncü şahıslar tarafından görülebilir. Firmamız e-postalarınızdan aktarılan bilgilerin güvenliğini hiçbir koşulda garanti edemez.</div>
      <div>
         <br>
      </div>
      <div><h2>TARAYICI ÇEREZLERİ&nbsp;</h2></div>
      <div>Firmamız, mağazamızı ziyaret eden kullanıcılar ve kullanıcıların web sitesini kullanımı hakkındaki bilgileri teknik bir iletişim dosyası (Çerez-Cookie) kullanarak elde edebilir. Bahsi geçen teknik iletişim dosyaları, ana bellekte saklanmak üzere bir internet sitesinin kullanıcının tarayıcısına (browser) gönderdiği küçük metin dosyalarıdır. Teknik iletişim dosyası site hakkında durum ve tercihleri saklayarak İnternet'in kullanımını kolaylaştırır.</div>
      <div>
         <br>
      </div>
      <div>Teknik iletişim dosyası, &nbsp;siteyi kaç kişinin ziyaret ettiğini, bir kişinin siteyi hangi amaçla, kaç kez ziyaret ettiğini ve ne kadar sitede kaldıkları hakkında istatistiksel bilgileri elde etmeye ve kullanıcılar için özel tasarlanmış kullanıcı sayfalarından &nbsp;dinamik olarak reklam ve içerik üretilmesine yardımcı olur. Teknik iletişim dosyası, ana bellekte veya e-postanızdan veri veya başkaca herhangi bir kişisel bilgi almak için tasarlanmamıştır. Tarayıcıların pek çoğu başta teknik iletişim dosyasını kabul eder biçimde tasarlanmıştır ancak kullanıcılar dilerse teknik iletişim dosyasının gelmemesi veya teknik iletişim dosyasının gönderildiğinde uyarı verilmesini sağlayacak biçimde ayarları değiştirebilirler.</div>
      <div>
         <br>
      </div>
      <div>Firmamız, işbu "Gizlilik Politikası" hükümlerini dilediği zaman sitede yayınlamak veya kullanıcılara elektronik posta göndermek veya sitesinde yayınlamak suretiyle değiştirebilir. Gizlilik Politikası hükümleri değiştiği takdirde, yayınlandığı tarihte yürürlük kazanır.</div>
      <div>
         <br>
      </div>
      <div>Gizlilik politikamız ile ilgili her türlü soru ve önerileriniz için ……………….. adresine email gönderebilirsiniz. Firmamız’a ait aşağıdaki iletişim bilgilerinden ulaşabilirsiniz.</div>
      <div>
         <br>
      </div>
      <div>Firma Ünvanı:&nbsp;</div>
      <div>Adres:&nbsp;</div>
      <div>Eposta</span>:&nbsp;</div>
      <div>Tel:</div>
      <div>Fax:</div>
      <div>
         <br>
      </div>
      <div>
         <br>
      </div></div>
     

                        
                        
                        
                        
                        
                        
                     </div>
                  </div>
               </div>

      <!-- end section -->
  
         

  

                        
                        
                        
                        
                        
                        
          
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
                        <a class="navbar-brand" href="index-building.html"><img height="200"; src="images/logo-icon.png" alt="image"><span>KOYUKAN INŞAAT</span></a>
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
                        <li><a data-scroll="" href="http://localhost:8888/insaat/#projeler">Projeler</a></li>
                        <li><a data-scroll="" href="http://localhost:8888/insaat/#services">Diğer Servisler</a></li>
                        <li><a data-scroll="" href="#galeri">Galeri</a></li>
                        <li><a data-scroll="" href="http://localhost:8888/insaat/#kadro">Kadromuz</a></li>
                        <li><a data-scroll="" href="http://localhost:8888/insaat/#iletisim">Bizimle iletişime geçin</a></li>
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
                           <li><a href="gizlilik.php">Gizlilik ve Güvenlik</a></li>
                           
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



