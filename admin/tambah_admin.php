<?php include 'header.php' ?>
<title>Tambah Data Admin</title>
<?php include '../koneksi.php';
   if(isset($_POST['simpan'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $nama = $_POST['nama'];

    $query = $conn->query("SELECT * FROM user WHERE username='$username'");
    if($query->num_rows>0){
        echo "<script>
        alert('Username sudah digunakan');
        </script>";
    }
    else{
    $i = $conn->query("INSERT INTO user (class,username,password,nama) VALUES ('admin','$username','$pass','$nama')");

    if($i){
        echo "<script>
        alert('Data berhasil disimpan');
        document.location.href = 'admin.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data gagal disimpan');
        </script>";
    }
    }
}
?>
<div id="layoutSidenav_content">
<main>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Input Admin</h3>
  </div>
  <div class="card-body">
  <form class="form-horizontal" method="POST" action="">
          <div class="card-body">
            <div class="form-group row">
              <label for="stambuk" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="">
              </div>
            </div> 
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="">
              </div>
            </div>     
  </div>
  </div>
  <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
  </div>
</form>
</div>
</main>
<?php include 'footer.php' ?>