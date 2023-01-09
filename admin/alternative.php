<?php include 'header.php' ?>
<title>Data Alternative</title>
<?php include '../koneksi.php';
?>
<div id="layoutSidenav_content">
<main>
 
  <div class="card mb-4">
  <div class="card-header">
  
    <i class="fas fa-table me-1"></i>
     Data Alternative</div>
   <div class="card-body">
   <table id="datatablesSimple">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Instansi</th>
        <th>Alamat</th>
        <th>Jenis Instansi</th>
        <th>Gambar Instansi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $sql = $conn->query("SELECT * FROM alternative");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['nama_rs'] ?></td>
      <td><?= $row['alamat'] ?></td>
      <td><?= $row['jenis'] ?></td>
      <td><img src="../bs/eNno/assets/img/team/<?= $row['gambar']; ?>" height="150" width="150" alt=""></td>
      <td>
          <a href="edit_alternative.php?id=<?=$row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete_alternative.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data ingin dihapus?')">Hapus</a>
    </td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>
  <a href="tambah_alternative.php" class="btn btn-primary">Tambah Data</a>
  

</div>
</main>
<?php include 'footer.php' ?>