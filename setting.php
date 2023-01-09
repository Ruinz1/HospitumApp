<?php include 'header.php'; ?> 
<?php if(!isset($_SESSION['class'])) 
{
  echo "<script>
  alert('Login terlebih dahulu untuk melihat nilai :) ');
  document.location.href = 'login.php';
  </script>";
    exit();
} ?> 
<?php
if(isset($_POST['edit'])){
    $username = $_SESSION['username'];
    $class = $_SESSION['class'];
    $pass = $_POST['password'];
    $repass = $_POST['repeassword'];
    $nama = $_POST['nama'];
    $update = $conn->query("UPDATE user SET password='$pass', nama='$nama' WHERE username='$username' AND class='$class' ");
    if($update){
        echo "<script>window.location.href='index.php';
        alert('Data berhasil di edit');</script>";
    }
    else{
        echo "<script>alert('Data gagal di edit');</script>";
    }
}

?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="contact">
    <div class="container">

<div class="section-title">
  <span>Settings</span>
  <h2>Settings</h2>
  <p>Edit Profile Anda</p>
</div>

<div class="row">

  <div class="col-lg-5 d-flex align-items-stretch">
    <div class="info">
      <div class="address">
        <i class="bi bi-person-badge"></i>
        <h4>Username</h4>
        <p><?= $_SESSION['username'] ?></p>
      </div>

      <div class="email">
        <i class="bi bi-person-circle"></i>
        <h4>Nama:</h4>
        <p><?= $_SESSION['nama_user'] ?></p>
      </div>
    </div>

  </div>

  <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama"  placeholder="">
              </div>
            </div>   
        <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="">
              </div>
            </div> 
        <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Repassword</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="repassword" placeholder="">
              </div>
            </div>   
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <div class="text-center"><button type="submit" >Edit</button></div>
        </div>
    </form>
  </div>

</div>

</div>
</section><!-- End Team Section -->


  </main><!-- End #main -->
</div>

<?php include 'footer.php'; ?> 
       
