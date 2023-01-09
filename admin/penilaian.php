<?php include 'header.php' ?>
<title>Penilaian</title>
<?php include '../koneksi.php';
?>
<div id="layoutSidenav_content">
<main>
 
  <div class="card mb-4">
  <div class="card-header">
  
    <i class="fas fa-table me-1"></i>
     Data Penilaian Instansi Kesehatan</div>
   <div class="card-body">
   <table id="datatablesSimple">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Instansi</th>
        <th>Fasilitas</th>
        <th>Kenyamanan</th>
        <th>Pelayanan</th>
        <th>Keamanan</th>
        <th>Efesiensi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $sql = $conn->query("SELECT * FROM penilaian");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['rs'] ?></td>
      <td><?= $row['fasilitas'] ?></td>
      <td><?= $row['kenyamanan'] ?></td>
      <td><?= $row['pelayanan'] ?></td>
      <td><?= $row['keamanan'] ?></td>
      <td><?= $row['efesiensi'] ?></td>
      <td> 
          <a href="edit_penilaian.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete_penilaian.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data ingin dihapus?')">Hapus</a>
    </td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>
  <a href="tambah_penilaian.php" class="btn btn-primary">Tambah Data</a>
  

</div>
</main>
<?php include 'footer.php' ?>