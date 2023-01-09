<?php include 'header.php' ?>
<title>Tambah Data Alternative</title>
<?php include '../koneksi.php';
   if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $gambar = $_POST['gambar'];

    $query = $conn->query("SELECT * FROM alternative WHERE nama_rs='$nama'");
    if($query->num_rows>0){
        echo "<script>
        alert('Nama Rumah Sakit sudah diinputkan');
        </script>";
    }
    else{
    $i = $conn->query("INSERT INTO alternative (nama_rs,alamat,jenis,gambar) VALUES ('$nama','$alamat','$jenis','$gambar')");

    if($i){
        echo "<script>
        alert('Data berhasil disimpan');
        document.location.href = 'alternative.php';
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
    <h3 class="card-title">Input Alternative</h3>
  </div>
  <div class="card-body">
  <form class="form-horizontal" method="POST" action="">
          <div class="card-body">
            <div class="form-group row">
              <label for="stambuk" class="col-sm-2 col-form-label">Nama Instansi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" placeholder="">
              </div>
            </div>  
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Jenis Instansi</label>
              <div class="col-sm-10">
              <select class="form-control" name="jenis">
              <option>--Silahkan pilih --</option></option>
                    <option value="Rumah Sakit Umum">Rumah Sakit Umum</option>
                    <option value="Rumah Sakit Ibu dan Anak">Rumah Sakit Bersalin</option>
                    <option value="Puskesmas">Puskesmas</option>
                    <option value="Klinik">Klinik</option>
                </select>
              </div>
            </div>  
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
              <input class="form-control" type="file" name="gambar" accept="image/png, image/gif, image/jpeg, image/jpg" />
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