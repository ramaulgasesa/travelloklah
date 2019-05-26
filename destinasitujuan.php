<?php
include "config.php";
$kodewst = $_GET['kodewst'];
$data  = mysql_fetch_array(mysql_query("select * from destinasi where kodewst='$kodewst'"));
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Tarvelloklah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade"><img src="img/logo_travell.png" width="150" height="100"></div>
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
                        <li><a href="index.php">Home</a></li>
                        <!-- <li class="active"><a href="destinasitujuan.php">Destinasi</a></li> -->
                        <li><a href="about.php">About</a></li>
                        <!-- <li><a href="blog.php">Blog</a></li> -->
                        <li><a href="contact.php">Contact</a></li>
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
                          <h3>Hubungi Kami</h3>
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

    <section class="site-hero overlay page-inside" style="background-image: url(<?php echo "admin/gambar/".$data['gambar']; ?>)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up"><?php echo "$data[1]"?></h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Nikmati Perjalananmu.</p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <section class="bg-light">
      <div class="half d-md-flex d-block">
        <div class="image order-2" data-aos="fade"  style="background-image: url(<?php echo "admin/gambar/".$data['gambar']; ?>);"></div>
        <div class="text" data-aos="fade-left" data-aos-delay="200">
          <h2><?php echo "$data[1]"?></h2>
          
          <p><?php echo "$data[2]"?></p>
          <p>
            <h3>Harga Termasuk</h3>
              <ul>
                <li>Transportasi selama tour</li>
                <li>Villa *** atau setaraf tergantung ketersediaan</li>
                <li>Pemandu wisata min 5 orang dan supir merangkap sebagai pemandu untuk 2-4 orang</li>
                <li>Makan sesuai program</li>
                <li>Tiket masuk obyek wisata</li>
                <li>Air mineral (1 botol/orang/ hari)</li>
              </ul>
            <h3>Harga Tidak Termasuk</h3>
              <ul>
                <li>Biaya pribadi (telephone, laundry, mini bar, shopping, etc)</li>
                <li>Tiket pesawat dan airport tax</li>
                <li>Tour/makan tambahan</li>
                <li>Hal-hal lain diluar program</li>
              </ul>
            <h3>Harga Tour</h3>
            <select name="JUMLAH">
                <option value="" selected>--JUMLAH--</option>
                <option value="1">3-4 Orang</option>
                <option value="2">5-6 Orang</option>
                <option value="3">7-10 Orang</option>
            </select>
            <h3>Rp.<?php echo "$data[3]"?>/org</h3>
          </p>
          
          <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Pesan Sekarang
</button></p>
        </div>
      </div>

    </section>
    <!-- END section -->

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Review Kegiatan</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
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
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">FORM PEMESANAN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
              <form method="POST">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan nama" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Telp/WhatsApp</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan kontak"name="kontak">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Asal Kota</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan asal kota" name="asal">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori Peserta</label>
                <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                  <option>-kategori-</option>
                  <option>Keluarga</option>
                  <option>Perusahaan</option>
                  <option>Sekolah/Akademik</option>
                  <option>Organisasi/Komunitas</option>
                  <option>Grup Teman</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Jumlah</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan jumlah" name="jumlah">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Jadwal</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="kirim" value="Kirim">
            </div>
          </form>
          </div>
        </div> 
    </div>
    <?php 

    if(isset($_POST['kirim'])){
    $nama   = $_POST['nama'];
    $email   = $_POST['email'];
    $telp_wa = $_POST['kontak'];
    $asal = $_POST['asal'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];
    
    mysql_query("INSERT INTO form VALUES ('','$nama','$email','$telp_wa','$asal','$kategori','$jumlah','$keterangan')")or die(mysql_error());

    }
    ?>
    </body>
</html>
    
    <section class="section blog-post-entry bg-pattern">
      <div class="container">
        <!-- <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Yang di Dapat</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="<?php echo "img/".$data[5]; ?>" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="<?php echo "img/".$data[6]; ?>" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="<?php echo "img/".$data[7]; ?>" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3"><a href="#">Five Reasons to Stay at Villa Resort</a></h2>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <?php require('footer.php');?>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  