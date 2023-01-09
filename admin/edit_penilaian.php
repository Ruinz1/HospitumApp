<?php include 'header.php' ?>
<title>Edit Data Penilaian</title>
<?php include '../koneksi.php';
   if(isset($_POST['edit'])){
    $id = $_GET['id'];
    $rs = $_POST['rs'];
    $f = $_POST['fasilitas'];
    $k = $_POST['kenyamanan'];
    $p = $_POST['pelayanan'];
    $km = $_POST['keamanan'];
    $e = $_POST['efesiensi'];

    $update = $conn->query("UPDATE penilaian SET rs='$rs', fasilitas='$f', kenyamanan='$k'
                            , pelayanan='$p', keamanan='$km', efesiensi='$e' WHERE id='$id' ");
    if($update){
        echo "<script>window.location.href='penilaian.php';
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
    <h3 class="card-title">Edit Penilaian</h3>
  </div>
  <div class="card-body">
  <form class="form-horizontal" method="POST" action="">
          <div class="card-body">
          <div class="form-group row">
              <label for="stambuk" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
              <div class="col-sm-10">
              <select class="form-control" name="rs" requierd>
              <?php 
                $id = $_GET['id'];
                $hasil = $conn->query("SELECT * FROM penilaian WHERE id='$id'");
                if ($hasil->num_rows > 0) 
                {
                $row = $hasil->fetch_assoc();
                ?>
                <option value="<?= $row['rs']; ?>" selected="selected" ><?= $row['rs']; ?></option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="stambuk" class="col-sm-2 col-form-label">Fasilitas Rumah Sakit</label>
              <div class="col-sm-10">
              <select class="form-control" name="fasilitas">
                    <option value="<?= $row['fasilitas']; ?>"><?= $row['fasilitas']; ?></option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Kenyamanan Rumah Sakit</label>
              <div class="col-sm-10">
              <select class="form-control" name="kenyamanan">
                    <option value="<?= $row['kenyamanan']; ?>"><?= $row['kenyamanan']; ?></option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
              </div>
            </div>     
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Pelayanan Rumah Sakit</label>
              <div class="col-sm-10">
              <select class="form-control" name="pelayanan">
                    <option value="<?= $row['pelayanan']; ?>"><?= $row['pelayanan']; ?></option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
              </div>
            </div>   
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Keamanan Rumah Sakit</label>
              <div class="col-sm-10">
              <select class="form-control" name="keamanan">
                    <option value="<?= $row['keamanan']; ?>"><?= $row['keamanan']; ?></option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
              </div>
            </div> 
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Efesiensi Rumah Sakit</label>
              <div class="col-sm-10">
              <select class="form-control" name="efesiensi">
                    <option value="<?= $row['efesiensi']; ?>"><?= $row['efesiensi']; ?></option>
                    <option value="5">Sangat Baik</option>
                    <option value="4">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="2">Kurang Baik</option>
                    <option value="1">Tidak Baik</option>
                </select>
              </div>
            </div> 
            <?php } ?>    
  </div>
  </div>
  <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
  </div>
</form>
</div>
</main>
<?php include 'footer.php' ?>