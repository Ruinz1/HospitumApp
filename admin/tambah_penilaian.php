<?php include 'header.php' ?>
<title>Tambah Data Penilaian</title>
<?php include '../koneksi.php';
   if(isset($_POST['simpan'])){
    $rs = $_POST['rs'];
    $f = $_POST['fasilitas'];
    $k = $_POST['kenyamanan'];
    $p = $_POST['pelayanan'];
    $km = $_POST['keamanan'];
    $e = $_POST['efesiensi'];

    $query = $conn->query("SELECT * FROM penilaian WHERE rs='$rs'");
    if($query->num_rows>0){
        echo "<script>
        alert('Data Penilaian sudah diinputkan');
        </script>";
    }
    else{
    $i = $conn->query("INSERT INTO penilaian (rs,fasilitas,kenyamanan,pelayanan,keamanan,efesiensi) VALUES ('$rs','$f','$k','$p','$km','$e')");

    if($i){
        echo "<script>
        alert('Data berhasil disimpan');
        document.location.href = 'penilaian.php';
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
    <h3 class="card-title">Input Penilaian</h3>
  </div>
  <div class="card-body">
  <form class="form-horizontal" method="POST" action="">
          <div class="card-body">
          <div class="form-group row">
              <label for="stambuk" class="col-sm-2 col-form-label">Nama Instansi</label>
              <div class="col-sm-10">
              <select class="form-control" name="rs">
              <option>--Silahkan Pilih--</option>
              <?php 
                $hasil = $conn->query("SELECT * FROM alternative ");
                if ($hasil->num_rows > 0) 
                {
                while($row = $hasil->fetch_assoc()){
                ?>
                <option value="<?= $row['nama_rs']; ?>"><?= $row['nama_rs']; ?></option>
                <?php }} ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="stambuk" class="col-sm-2 col-form-label">Fasilitas Instansi</label>
              <div class="col-sm-10">
              <select class="form-control" name="fasilitas">
                    <option>--Silahkan Pilih--</option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Kenyamanan Instansi</label>
              <div class="col-sm-10">
              <select class="form-control" name="kenyamanan">
                    <option>--Silahkan Pilih--</option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
              </div>
            </div>     
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Pelayanan Instansi</label>
              <div class="col-sm-10">
              <select class="form-control" name="pelayanan">
                    <option>--Silahkan Pilih--</option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
              </div>
            </div>   
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Keamanan Instansi</label>
              <div class="col-sm-10">
              <select class="form-control" name="keamanan">
                    <option>--Silahkan Pilih--</option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
              </div>
            </div> 
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Efesiensi Instansi</label>
              <div class="col-sm-10">
              <select class="form-control" name="efesiensi">
                    <option>--Silahkan Pilih--</option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
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