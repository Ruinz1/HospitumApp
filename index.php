<?php include 'header.php'; ?> 
<section id="hero" class="d-flex align-items-center">
<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1>Penilaian Instansi Kesehatan Di Kota Palu</h1>
      <h2>Instansi-intansi berupa Rumah Sakit Umum, Rumah Sakit Bersalin, Puskesmas dan Klinik!</h2>
      <div class="d-flex">
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="bs/eNno/assets/img/6301.jpg" class="img-fluid animated" alt="">
    </div>
  </div>
</div>
</section><!-- End Hero -->
<main id="main">

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-laptop"></i></div>
          <h4 class="title"><a href="rumah_sakit.php">Rumah Sakit Umum</a></h4>
          <p class="description"><?php $panggil1 = $conn->query("SELECT * FROM alternative WHERE jenis='Rumah Sakit Umum'");  $count1 = $panggil1->num_rows;  echo $count1?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-card-checklist"></i></div>
          <h4 class="title"><a href="rumah_sakit_ibu.php">Rumah Sakit Bersalin</a></h4>
          <p class="description"><?php $panggil2 = $conn->query("SELECT * FROM alternative WHERE jenis='Rumah Sakit Ibu dan Anak'");  $count2 = $panggil2->num_rows;  echo $count2?></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-clipboard-data"></i></div>
          <h4 class="title"><a href="puskesmas_klinik.php">Puskesmas & Klinik</a></h4>
          <p class="description">
          <?php $panggil3 = $conn->query("SELECT * FROM alternative WHERE jenis='Puskesmas'");  $count3 = $panggil3->num_rows; ?>
          <?php $panggil4 = $conn->query("SELECT * FROM alternative WHERE jenis='Klinik'");  $count4 = $panggil4->num_rows; ?>
          
          
          <?php  $jum = $count3+$count4; echo $jum; ?></p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Featured Services Section -->


<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container">

    <div class="section-title">
      <span>Kriteria Penilaian</span>
      <h2>Kriteria Penilaian</h2>
      <p>Hal-hal yang menjadi kriteria untuk menjadi aspek yang dinilai : </p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-tools"></i></div>
          <h4><a href="#">Fasilitas</a></h4>
          <p>Adalah adalah aspek tempat atau bangunan yg berfungsi mempermudah kehidupan manusia.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-house-door"></i></div>
          <h4><a href="#">Kenyamanan</a></h4>
          <p>Adalah suatu kondisi perasaan seseorang yang merasa nyaman berdasarkan persepsi masing-masing individu.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4><a href="#">Pelayanan</a></h4>
          <p>Adalah suatu kegiatan atau urutan kegiatan yang terjadi dalam interaksi langsung antar seseorang dengan orang lain atau mesin secara fisik, dan menyediakan kepuasan pelanggan</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-shield-fill-check"></i></div>
          <h4><a href="#">Keamanan</a></h4>
          <p>Adalah keadaan bebas dari bahaya. Istilah ini bisa digunakan dengan hubungan kepada kejahatan, segala bentuk kecelakaan, dan lain-lain.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-hourglass-split"></i></div>
          <h4><a href="#">Efisiensi</a></h4>
          <p>Adalah aspek adalah usaha yang mengharuskan penyelesaian pekerjaan dengan tepat waktu, cepat dan memuaskan. Sehingga egisien berkaitan erat dengan ketepatan waktu tanpa harus mengeluarkan biaya atau cost yang berlebihan.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->





<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <span>Instansi Kesehatan Dengan Predikat Terbaik</span>
      <h2>Instansi Kesehatan Dengan Predikat Terbaik</h2>
      <p>Instansi Kesehatan Terbaik Dari Jenisnya</p>
    </div>

    <div class="row">
    <?php $rsum = $conn->query("SELECT max(nilai_preferensi)  FROM preferensi WHERE jenis='Rumah Sakit Umum'"); 
                if($rsum->num_rows>0){
                  $rows = $rsum->fetch_row();
                  $px = $rows[0];
                  $rsum2 = $conn->query("SELECT * FROM preferensi WHERE nilai_preferensi='$px'");
                  $px = $rsum2->fetch_assoc();
                  $nam = $px['nama_rs'];
                  $rsum3 = $conn->query("SELECT * FROM alternative WHERE nama_rs='$nam'");
                  $pecah = $rsum3->fetch_assoc();
                }
              ?>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
        <img src="bs/eNno/assets/img/team/<?= $pecah['gambar']; ?>" height="500" width="500" alt="">
          <h4>Rumah Sakit Umum </h4>
          <span><?= $pecah['nama_rs'] ?> </span>
          <span> <?= $pecah['alamat'] ?> </span>
          <p>Rating :
          <?php if($px['nilai_preferensi'] == 1  ){ ?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          <?php } ?>
          <?php if($px['nilai_preferensi'] > 0.9 )  {  if($px['nilai_preferensi'] <= 1) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] > 0.8  ){ if($px['nilai_preferensi'] <= 0.9) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] > 0.7  ){ if($px['nilai_preferensi'] <= 0.8) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] > 0.6  ){ if($px['nilai_preferensi'] <= 0.7) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] > 0.5  ){ if($px['nilai_preferensi'] <= 0.6) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] > 0.4  ){ if($px['nilai_preferensi'] <= 0.5) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] >= 0.3  ){ if($px['nilai_preferensi'] <= 0.4) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] >= 0.2  ){ if($px['nilai_preferensi'] <= 0.3) {?>
          <i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] >= 0.1  ){ if($px['nilai_preferensi'] <= 0.2) {?>
          <i class="fa-solid fa-star-half-stroke"></i<i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] = 0  ){ ?>
            <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php } ?>
          </p>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
        <?php $rsib = $conn->query("SELECT max(nilai_preferensi)  FROM preferensi WHERE jenis='Rumah Sakit Ibu dan Anak'"); 
                if($rsib->num_rows>0){
                  $row = $rsib->fetch_row();
                  $pecah = $row[0];
                  $rsib2 = $conn->query("SELECT * FROM preferensi WHERE nilai_preferensi='$pecah'");
                  $pp = $rsib2->fetch_assoc();
                  $nama = $pp['nama_rs'];
                  $rsum3 = $conn->query("SELECT * FROM alternative WHERE nama_rs='$nama'");
                  $pecahx = $rsum3->fetch_assoc();
                  
                }
              ?>
        <img src="bs/eNno/assets/img/team/<?= $pecahx['gambar']; ?>" height="500" width="500" alt="">
          <h4>Rumah Sakit Bersalin</h4>
          <span> <?= $pecahx['nama_rs'] ?> </span>
          <span> <?= $pecahx['alamat'] ?> </span>
          <p>Rating :
          <?php if($pp['nilai_preferensi'] == 1  ){ ?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          <?php } ?>
          <?php if($pp['nilai_preferensi'] > 0.9 )  {  if($pp['nilai_preferensi'] <= 1) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
          <?php }} ?>
          <?php if($pp['nilai_preferensi'] > 0.8  ){ if($pp['nilai_preferensi'] <= 0.9) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($pp['nilai_preferensi'] > 0.7  ){ if($pp['nilai_preferensi'] <= 0.8) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($pp['nilai_preferensi'] > 0.6  ){ if($pp['nilai_preferensi'] <= 0.7) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($pp['nilai_preferensi'] > 0.5  ){ if($pp['nilai_preferensi'] <= 0.6) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($pp['nilai_preferensi'] > 0.4  ){ if($pp['nilai_preferensi'] <= 0.5) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($pp['nilai_preferensi'] >= 0.3  ){ if($pp['nilai_preferensi'] <= 0.4) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($pp['nilai_preferensi'] >= 0.2  ){ if($pp['nilai_preferensi'] <= 0.3) {?>
          <i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($pp['nilai_preferensi'] >= 0.1  ){ if($pp['nilai_preferensi'] <= 0.2) {?>
          <i class="fa-solid fa-star-half-stroke"></i<i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($pp['nilai_preferensi'] = 0  ){ ?>
            <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php } ?>
          </p>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
        <?php $pk = $conn->query("SELECT max(nilai_preferensi)  FROM preferensi WHERE jenis='Puskesmas' OR jenis='Klinik' "); 
                if($pk->num_rows>0){
                  $s = $pk->fetch_row();
                  $a = $s[0];
                  $d = $conn->query("SELECT * FROM preferensi WHERE nilai_preferensi='$a'");
                  $w = $d->fetch_assoc();
                  $na = $w['nama_rs'];
                  $rsum3 = $conn->query("SELECT * FROM alternative WHERE nama_rs='$na'");
                  $pecahx = $rsum3->fetch_assoc();
                
              ?>
          <img src="bs/eNno/assets/img/team/<?= $pecahx['gambar']; ?>" height="500" width="500" alt="">
          <h4>Puskesmas / Klinik</h4>
          <span> <?= $pecahx['nama_rs']; ?> </span>
          <span> <?= $pecahx['alamat']; ?> </span>
          <p>Rating :
          <?php if($w['nilai_preferensi'] == 1  ){ ?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          <?php } ?>
          <?php if($w['nilai_preferensi'] > 0.9 )  {  if($w['nilai_preferensi'] <= 1) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
          <?php }} ?>
          <?php if($w['nilai_preferensi'] > 0.8  ){ if($w['nilai_preferensi'] <= 0.9) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($w['nilai_preferensi'] > 0.7  ){ if($w['nilai_preferensi'] <= 0.8) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($w['nilai_preferensi'] > 0.6  ){ if($w['nilai_preferensi'] <= 0.7) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($w['nilai_preferensi'] > 0.5  ){ if($w['nilai_preferensi'] <= 0.6) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($w['nilai_preferensi'] > 0.4  ){ if($w['nilai_preferensi'] <= 0.5) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($w['nilai_preferensi'] >= 0.3  ){ if($w['nilai_preferensi'] <= 0.4) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($w['nilai_preferensi'] >= 0.2  ){ if($w['nilai_preferensi'] <= 0.3) {?>
          <i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($w['nilai_preferensi'] >= 0.1  ){ if($w['nilai_preferensi'] <= 0.2) {?>
          <i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($w['nilai_preferensi'] = 0  ){ ?>
            <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php } ?>
          </p>
          <?php } ?>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->



</main><!-- End #main -->

<?php include 'footer.php'; ?> 
       

