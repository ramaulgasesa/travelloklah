    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Pemandu Wisata</h2>
          </div>
        </div>
<?php
  include "config.php";
  $No = 1;
  $sql = mysql_query("SELECT * FROM pemandu");
  while ($pmd = mysql_fetch_array($sql)) {
?>
        <div class="row">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial text-center">
              <div class="author-image mb-3">
                <img src="<?php echo "img/".$pmd[3]; ?>" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;<?php echo "$pmd[2]"?>&rdquo;</p>
              </blockquote>
              <p><em>&mdash; <?php echo "$pmd[1]"?></em></p>
              
            </div>
          </div>
          <?php } ?>