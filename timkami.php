<section class="section blog-post-entry bg-pattern">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Tim Kami</h2>
            <p class="lead" data-aos="fade-up">Kenali kami lebih jauh, kami adalah tim yang akan memberikan perjalanan anda menjadi berkesan. Selamat Belibor!</p>
          </div>
        </div>
        <?php
            include "config.php";
            $No = 1;
            $sql = mysql_query("SELECT * FROM pemandu");
            while ($pmd = mysql_fetch_array($sql)) {
        ?>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
            <div class="media media-custom d-block mb-4">  
              <a href="#" class="mb-4 d-block"><img src="<?php echo "img/".$pmd[3]; ?>" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post"><?php echo "$pmd[2]"?></span>
                <h2 class="mt-0 mb-3"><a href="#"><?php echo "$pmd[1]"?></a></h2>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/person_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">CTO, Co-Founder</span>
                <h2 class="mt-0 mb-3"><a href="#">Jean Love</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/person_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">Marketer, Co-Founder</span>
                <h2 class="mt-0 mb-3"><a href="#">Jeff Stark</a></h2>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/person_3.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">CEO, Co-Founder</span>
                <h2 class="mt-0 mb-3"><a href="#">Vince Richardson</a></h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/person_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">CTO, Co-Founder</span>
                <h2 class="mt-0 mb-3"><a href="#">Jean Love</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/person_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">Marketer, Co-Founder</span>
                <h2 class="mt-0 mb-3"><a href="#">Jeff Stark</a></h2>
              </div>
            </div>
          </div>
        </div> -->
      </div>
</section>