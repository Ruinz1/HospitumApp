<?php include 'header.php' ?>
<title>Settings</title>
<?php include '../koneksi.php'; 
if(isset($_POST['edit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $nama = $_POST['nama'];
    $update = $conn->query("UPDATE user SET username='$username', password='$pass', nama='$nama' WHERE class='Super Admin'");
    if($update){
        echo "<script>window.location.href='index.php';
        alert('Data berhasil di edit');</script>";
    }
    else{
        echo "<script>alert('Data gagal di edit');</script>";
    }
}
?>
<div id="layoutSidenav_content">
<main>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Settings</h3>
  </div>
  <div class="card-body">
    <form method="POST">
    <?php 
        $user = $_SESSION['username'];
        $dapat = $conn->query("SELECT * FROM user WHERE username='$user'");
        if($dapat->num_rows>0){
            $row = $dapat->fetch_assoc();
    ?>
        <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="<?= $row['username']; ?>" placeholder="">
              </div>
            </div>   
        <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="password" value="<?= $row['password']; ?>" placeholder="">
              </div>
            </div> 
        <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>" placeholder="">
              </div>
            </div>   
        <?php } ?>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <button value="submit" name="edit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>