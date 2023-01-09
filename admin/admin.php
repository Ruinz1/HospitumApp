<?php include 'header.php' ?>
<title>Data Admin</title>
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
        <?php if($_SESSION['admin']=="Super Admin") {?>
        <th>Aksi</th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $sql = $conn->query("SELECT * FROM user WHERE class='admin'");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['username'] ?></td>
      <td><?= md5($row['password']) ?></td>
      <td><?= $row['nama'] ?></td>
      <?php if($_SESSION['admin']=="Super Admin") {?>
      <td>
          <a href="edit_admin.php?id=<?=$row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete_admin.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data ingin dihapus?')">Hapus</a>
      </td>
      <?php } ?>
      </tr>
      <?php }} ?>
    </tbody>
  </table>
  <?php if($_SESSION['admin']=="Super Admin") {?>
    <a href="tambah_admin.php" class="btn btn-primary">Tambah</a>
  <?php } ?>

</div>
</main>
<?php include 'footer.php' ?>