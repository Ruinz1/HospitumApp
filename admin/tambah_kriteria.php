<?php include 'header.php' ?>
<title>Tambah Data Kriteria</title>
<?php include '../koneksi.php';
   if(isset($_POST['simpan'])){
    $f = $_POST['fasilitas'];
    $k = $_POST['kenyamanan'];
    $p = $_POST['pelayanan'];
    $km = $_POST['keamanan'];
    $e = $_POST['efesiensi'];

    $query = $conn->query("SELECT * FROM kriteria");
    if($query->num_rows>0){
        echo "<script>
        alert('Data Kriteria sudah diinputkan');
        </script>";
    }
    else{
    $i = $conn->query("INSERT INTO kriteria (fasilitas,kenyamanan,pelayanan,keamanan,efisiensi) VALUES ('$f','$k','$p','$km','$e')");

    if($i){
        echo "<script>
        alert('Data berhasil disimpan');
        document.location.href = 'kriteria.php';
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
    <h3 class="card-title">Input Kriteria</h3>
  </div>
  <div class="card-body">
  <form class="form-horizontal" method="POST" action="">
          <div class="card-body">
            <div class="form-group row">
              <label for="stambuk" class="col-sm-2 col-form-label">Fasilitas Rumah Sakit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="fasilitas" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Kenyamanan Rumah Sakit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kenyamanan" placeholder="">
              </div>
            </div>     
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Pelayanan Rumah Sakit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="pelayanan" placeholder="">
              </div>
            </div>   
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Keamanan Rumah Sakit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="keamanan" placeholder="">
              </div>
            </div> 
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Efesiensi Rumah Sakit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="efesiensi" placeholder="">
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