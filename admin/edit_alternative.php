<?php include 'header.php' ?>
<title>Edit Data Alternative</title>
<?php include '../koneksi.php'; 
if(isset($_POST['edit'])){
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $gambar = $_POST['gambar'];
    $update = $conn->query("UPDATE alternative SET nama_rs='$nama', alamat='$alamat', jenis='$jenis', gambar='$gambar' WHERE id='$id' ");
    if($update){
        echo "<script>window.location.href='alternative.php';
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
    <h3 class="card-title">Edit Alternative</h3>
  </div>
  <div class="card-body">
    <form method="POST">
    <?php 
        $id = $_GET['id'];
        $dapat = $conn->query("SELECT * FROM alternative WHERE id='$id'");
        if($dapat->num_rows>0){
            $row = $dapat->fetch_assoc();
    ?>
        <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Instansi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?= $row['nama_rs']; ?>" placeholder="">
              </div>
            </div>   
        <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" value="<?= $row['alamat']; ?>" placeholder="">
              </div>
            </div>  
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Jenis Instansi</label>
              <div class="col-sm-10">
              <select class="form-control" name="jenis">
              <option value="<?= $row['jenis']; ?>" >--Silahkan pilih --</option></option>
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
              <input class="form-control" value="<?= $row['gambar']; ?>" type="file" name="gambar" accept="image/png, image/gif, image/jpeg, image/jpg"  />
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