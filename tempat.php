<?php
  include "config.php";
  $No = 1;
  $sql = mysql_query("SELECT * FROM destinasi");
  while ($data = mysql_fetch_array($sql)) {
?>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right">
            <a href=""><img src="<?php echo "admin/gambar/".$data['gambar']; ?>" alt="Image placeholder" class="img-fluid"> </a>
            <h3><a href="destinasitujuan.php?kodewst=<?=$data['kodewst']?>"><?php echo "$data[1]"?></a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-half"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              3,239 reviews
            </span>
          </div>
<!--           <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="100">
            <a href="restaurant.html"><img src="img/PLBN.jpg" alt="Image placeholder" class="img-fluid"> </a>
            <h3><a href="restaurant.html">Air Terjun Merassap &amp; CrossBorder</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-half"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              4,921 reviews
            </span>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="200">
            <a href="hotel.html"><img src="img/Temajuk.jpg" alt="Image placeholder" class="img-fluid"> </a>
            <h3><a href="hotel.html">Trip Temajuk</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              2,112 reviews
            </span>
          </div>
          <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right" data-aos-delay="300">
            <a href="yacht.html"><img src="img/PulauHaji.jpg" alt="Image placeholder" class="img-fluid"> </a>
            <h3><a href="yacht.html">Trip Pulau Haji Sani</a></h3>
            <div class="reviews-star float-left">
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star"></span>
              <span class="ion-android-star-outline"></span>
            </div>
            <span class="reviews-count float-right">
              6,421 reviews
            </span>
          </div> -->
<?php
}
?>