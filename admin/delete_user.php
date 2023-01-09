<?php 
include '../koneksi.php';
$id = $_GET['id'];
$delete = $conn->query("DELETE FROM user WHERE id='$id' AND class='user'");

if($delete){
echo "<script>window.location.href='user.php';
alert('Data berhasil di Hapus');</script>";
}
else
{
echo "<script>window.location.href='user.php';
alert('Data gagal dihapus');</script>";
}

?>