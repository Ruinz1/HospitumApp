<?php include 'header.php' ?>
<title>Kriteria</title>
<?php include '../koneksi.php';
?>
<div id="layoutSidenav_content">
<main>
 
  <div class="card mb-4">
  <div class="card-header">
  
    <i class="fas fa-table me-1"></i>
     Data Kriteria</div>
   <div class="card-body">
   <table id="datatablesSimple">
    <thead>
      <tr>
        <th>Fasilitas</th>
        <th>Kenyamanan</th>
        <th>Pelayanan</th>
        <th>Keamanan</th>
        <th>Efesiensi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = $conn->query("SELECT * FROM kriteria");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $row['fasilitas'] ?></td>
      <td><?= $row['kenyamanan'] ?></td>
      <td><?= $row['pelayanan'] ?></td>
      <td><?= $row['keamanan'] ?></td>
      <td><?= $row['efisiensi'] ?></td>
      <td>
          <a href="delete_kriteria.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data ingin dihapus?')">Hapus</a>
    </td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>
  <a href="tambah_kriteria.php" class="btn btn-primary">Tambah Data</a>
  

</div>
</main>
<?php include 'footer.php' ?>