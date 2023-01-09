<?php include 'header.php' ?>
<title>Data User</title>
<?php include '../koneksi.php';
?>
<div id="layoutSidenav_content">
<main>
 
  <div class="card mb-4">
  <div class="card-header">
  
    <i class="fas fa-table me-1"></i>
     Data User</div>
   <div class="card-body">
   <table id="datatablesSimple">
    <thead>
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $sql = $conn->query("SELECT * FROM user WHERE class='user'");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['username'] ?></td>
      <td><?= md5($row['password']) ?></td>
      <td><?= $row['nama'] ?></td>
      <td>
          <a href="edit_user.php?id=<?=$row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete_user.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data ingin dihapus?')">Hapus</a>
    </td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>
  
  <a href="tambah_user.php" class="btn btn-primary">Tambah User</a>

  

</div>
</main>
<?php include 'footer.php' ?>