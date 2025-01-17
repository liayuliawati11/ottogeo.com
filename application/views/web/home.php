<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
  <title>ottogeo.com</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="<?=base_url()?>assets/web/images/favicon.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/web/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/<?=base_url()?>assets/web/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="<?=base_url()?>assets/web/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="<?=base_url()?>assets/web/images/ottogeo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="index.html">Home</a> </li>
                      
                      <li> <a href="#about">About</a> </li>
                      <li> <a href="#important">Map</a> </li>
                      <li> <a href="#learn">Tips</a> </li>
                      <li> <a href="#make">Identitas</a> </li>
                      <li> <a href="#contact">Contact</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
                          
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Selamat Datang di Website Ottogeo.com</h1>
                      <p> SEBARAN GUNUNG DI JAWA TIMUR <p>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url()?>assets/web/images/gunung.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Explore Keindahan Alam Pegunungan</h1>
                    </div>
                  </div>

                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url()?>assets/web/images/semeru.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Abadikan Setiap Moment Mu</h1>
                      <p>NIKMATI PEMANDANGAN DI SETIAP PENJURU MATA</p>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="<?=base_url()?>assets/web/images/ijen.png"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>FunFact <strong class="yellow">Pegunungan di Jawa Timur</strong></h2>
          <p> Jawa Timur merupakan salah satu provinsi yang terkenal dengan keindahan gunungnya yang menjulang tinggi. Sebut saja Bromo yang menjadi primadona untuk menikmati indahnya sunrise atau Semeru dengan Ranu Kumbolo-nya yang memikat. Hal tersebut menjadi daya tarik bagi para pendaki untuk sekedar melepaskan penat atau mendalami hobi. </p>
          <a href="https://www.idntimes.com/travel/destination/kiswanto-1/daftar-gunung-di-jawa-timur-c1c2/7">Read more</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="<?=base_url()?>assets/web/images/about1.png" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<!-- our -->
<div id="important" class="important">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
            <h2>MAP</h2>

        </div>
      </div>
    </div>
  </div>
  <div class="important_bg">

<!-- memangil web -->    
    <iframe src="<?=base_url()?>/home" width="1260" height="650"></iframe>
 
    
  </div>
</div>
</div>
<!-- end our -->
<!-- Courses -->
<!-- end Courses -->

<!-- learn -->
<div id="learn" class="learn">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="titlepage">
          <h2>Tips <strong class="yellow">Mendaki Gunung</strong></h2>
          <p>Mendaki gunung menjadi hobi bagi sebagian orang yang tertarik akan tantangan dan petualangan. Mendaki gunung dapat melepaskan penat ataupun menyegarkan pikiran karena disuguhi oleh pemandangan yang menarik di atas gunung. Hal tersebut menjadi daya tarik bagi seorang pendaki. Ada beberapa tips bagi kalian pemula yang ingin mendaki gunung.</p>
          <a href="https://www.idntimes.com/travel/tips/resti-salsabila/mendaki-gunung-bagi-pemula-c1c2/7">Read more</a>
        </div>
      </div>
      <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10">
        <div class="learn_box">
          <figure><img src="<?=base_url()?>assets/web/images/travel.png" alt="img"/></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end learn --> 

<!-- MAKE --> 
<div id="make" class="make">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Identitas <strong class="white_colo"></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
        <div class="make_text">
          <p>Hallo...Apa kabar teman-teman</p>
          <p>Nama saya Lia Yuliawati. Saya merupakan mahasiswa aktif program studi Sains Informasi Geografi. Jurusan yang saya tekuni berfokus pada penyampaian informasi dengan berbasis pada peta. Saya menyukai hal yang berkaitan dengan teknologi serta pendidikan. Saya memegang teguh prinsip untuk bisa menjadi sebaik-baiknya manusia adalah yang bermanfaat bagi mahluk yang lain</p>
          <p></p>
          <span>Riwayat Pendidikan</span>
          <p>Universitas Pendidikan Indonesia </p>
          <p>Sains Informasi Geografi (2020 - Sekarang)</p>
          <p>SMA Negeri 3 Sumedang</p>
          <p>IPS (2017 - 2020)</p>
          </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8">
        <div class="make_box">
          <figure><img src="<?=base_url()?>assets/web/images/Lia.png"></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end MAKE --> 



<!-- contact -->
<div id="contact" class="contact">
  <div class="container-fluid padding_left2">
    <div class="white_color">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div id="map">
          </div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

          <form class="contact_bg">
            <div class="row">
              <div class="col-md-12">
                <div class="titlepage">
                  <h2>Contact <strong class="yellow">us</strong></h2>
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Email" type="text" name="Your Email">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Phone" type="text" name="Your Phone">
                </div>
                <div class="col-md-12">
                  <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <button class="send">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>

    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <form class="news">
                
              </form>
            </div>
            <div class="col-md-12">
              <h2>Newsletter</h2>
              <span>Hubungi saya melalui kontak yang tertera di bawah ini. </span>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Contact us </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="<?=base_url()?>assets/web/icon/loc.png" alt="#" /></a>Bandung
                        <br>Indonesia </li>
                        <li>
                          <a href="#"><img src="<?=base_url()?>assets/web/icon/email.png" alt="#" /></a>liayuliawati434@gmail.com</li>
                          <li>
                            <a href="#"><img src="<?=base_url()?>assets/web/icon/call.png" alt="#" /></a>087779805086 </li>
                          </ul>
                          <ul class="social_link">
                            <li><a href="https://www.instagram.com/antalyksa/?hl=id"><img src="<?=base_url()?>assets/web/icon/instagram.png"></a></li>
                            
                          </ul>

                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="address">
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="address">
                          <a href="index.html"> <img src="<?=base_url()?>assets/web/images/ottogeo1.png" alt="ottogeo"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="<?=base_url()?>assets/web/js/jquery.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/popper.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/bootstrap.bundle.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/jquery-3.0.0.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/plugin.js"></script>
          <!-- sidebar -->
          <script src="<?=base_url()?>assets/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="<?=base_url()?>assets/web/js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = '<?=base_url()?>assets/web/images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>