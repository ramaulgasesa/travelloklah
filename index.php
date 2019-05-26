<!doctype html>
<html lang="en">
  <head>
    <title>Travelloklah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="Shortcut icon" href="favicon.ico">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><a href="index.php"><em></em></a></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="index.php">Beranda</a></li>
<!--                         <li><a href="destinasitujuan.php">Destinasi</a></li> -->
                        <li><a href="about.php">Tentang</a></li>
                        <!-- <li><a href="blog.php">Blog</a></li> -->
                        <li><a href="contact.php">Kontak</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>Informasi Kontak</h3>
                          <p>Jalan Perdana,Pontianak <br> Indonesia</p>
                          <p>info@travelloklah.com</p>
                          <p>(+62) 812 5865 0655</p>
                          
                        </div>
                        <div class="col-md-6">
                          <h3>Hubungi kami</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url(img/bg.jpg)" >
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <img class="img-responsive" src="img/logo_travell.png" width="300" height="170" data-aos="fade-up">
            <h1 class="heading" data-aos="fade-up"><em>Yok!</em> Belibor</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Kite jelajah wisate Alam, Sejarah&amp; Budaye.</p>
            <!-- <p data-aos="fade-up" data-aos-delay="100"><a href="#" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">Explore The Beauty</a> <a href="#" class="btn uppercase btn-outline-light d-sm-inline d-block">Download</a></p> -->
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->
    <section class="section visit-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading" data-aos="fade-right">You Can Visit</h2>
          </div>
        </div>
        <div class="row">
			<?php 
		        if(isset($_GET['login'])){
		        echo "<h1 align='center'>LOGIN</h1>";
		        include"login.php";
		        }
		        else if(isset($_GET['barang'])){
		        echo "<h1 align='center'>Sile sile</h1>";
		        include"barang.php";
		        }
		        else {
		        include"tempat.php";
		        }
		            
		    ?>
     	</div>
      </div>
	</section>
 
    <!-- END section -->

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Tempat yang Indah untuk Kamu Nikmati.</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Berikut review perjalanan kami yang juga bisa kamu nikmati. Selamat Belibor!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <img src="img/slider-1.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-2.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-3.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-4.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-5.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/slider-6.jpg" alt="Image placeholder" class="img-fluid">
              </div>
            </div>
            <!-- END slider -->
          </div>

          <div class="col-md-12 text-center"><a href="#" class="">View More Photos</a></div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    <!-- 
    <section class="section blog-post-entry bg-pattern">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Recent Blog Post</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->

        	<?php include"testimonial.php";?>
          
          <!-- END col -->
        </div>
      </div>
    </section>
    <?php require('footer.php');?>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="js/jquery.waypoints.min.js"></script> -->
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>