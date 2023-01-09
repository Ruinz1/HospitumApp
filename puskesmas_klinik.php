<?php include 'header.php'; ?>
<?php session_start(); ?>
<?php if(!isset($_SESSION['class'])) 
{
  echo "<script>
  alert('Login terlebih dahulu untuk melihat nilai :) ');
  document.location.href = 'login.php';
  </script>";
    exit();
} ?> 
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Instansi</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Puskesmas / Klinik</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <span>Instansi Kesehatan Puskesmas / Klinik</span>
      <h2>Instansi Puskesmas / Klinik</h2>
      <p>Hasil rating menggunakan sistem pendukung keputusan Metode TOPSIS dengan mengkonversi nilai 0 sampai dengan 1 menjadi bintang</p>
    </div>

    <div class="row"> 
    <?php $rsum = $conn->query("SELECT * FROM preferensi WHERE jenis='Puskesmas' OR jenis='Klinik' ORDER BY nilai_preferensi DESC"); 
                if($rsum->num_rows>0){
                 while($row = $rsum->fetch_assoc()){
                   $nama = $row['nama_rs'];
                   $rsum2 = $conn->query("SELECT * FROM alternative WHERE nama_rs='$nama'");
                   $pecah = $rsum2->fetch_assoc();
                
              ?>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
        <img src="bs/eNno/assets/img/team/<?= $pecah['gambar']?>" height="250" width="250" alt="">
          <h4><?= $pecah['jenis']; ?> </h4>
          <span> <?= $pecah['nama_rs']; ?> </span>
          <p>Rating :
          <?php if($row['nilai_preferensi'] == 1  ){ ?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          <?php } ?>
          <?php if($row['nilai_preferensi'] > 0.9 )  {  if($row['nilai_preferensi'] <= 1) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
          <?php }} ?>
          <?php if($row['nilai_preferensi'] > 0.8  ){ if($row['nilai_preferensi'] <= 0.9) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($row['nilai_preferensi'] > 0.7  ){ if($row['nilai_preferensi'] <= 0.8) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($row['nilai_preferensi'] > 0.6  ){ if($row['nilai_preferensi'] <= 0.7) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($row['nilai_preferensi'] > 0.5  ){ if($row['nilai_preferensi'] <= 0.6) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($row['nilai_preferensi'] > 0.4  ){ if($row['nilai_preferensi'] <= 0.5) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($row['nilai_preferensi'] >= 0.3  ){ if($row['nilai_preferensi'] <= 0.4) {?>
          <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($row['nilai_preferensi'] >= 0.2  ){ if($row['nilai_preferensi'] <= 0.3) {?>
          <i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($row['nilai_preferensi'] >= 0.1  ){ if($row['nilai_preferensi'] <= 0.2) {?>
          <i class="fa-solid fa-star-half-stroke"></i<i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php }} ?>
          <?php if($px['nilai_preferensi'] = 0  ){ ?>
            <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>
          <?php } ?>
          </p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div><?php }} ?>

     

    </div>

  </div>
</section><!-- End Team Section -->


  </main><!-- End #main -->
</div>

<?php include 'footer.php'; ?> 
       

