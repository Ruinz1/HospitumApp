<?php 
include '../koneksi.php';
$id = $_GET['id'];
$delete = $conn->query("DELETE FROM penilaian WHERE id='$id'");

if($delete){
echo "<script>window.location.href='penilaian.php';
alert('Data berhasil di Hapus');</script>";
}
else
{
    echo "<script>window.location.href='penilaian.php';
alert('Data gagal dihapus');</script>";
}

?>