<?php include 'header.php' ?>
<title>Hasil Perhitungan</title>
<?php include '../koneksi.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Hasil Perhitungan</h1>
        </div>
<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
     Nilai Bobot Kriteria</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
    <thead>
      <tr>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
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
      </tr>
      <?php }} ?>
    </tbody>
  </table>     
</div>

<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
     Nilai Matriks</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
    <thead>
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Nama Instansi</th>
        <th colspan="5">Kriteria</th>
    </tr>
    <tr>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
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
      </tr>
      <?php }} ?>
    </tbody>
  </table>
</div>

  <div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
    Matriks Ternormalisasi</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
   <thead>
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Nama Instansi</th>
        <th colspan="5">Kriteria</th>
    </tr>
    <tr>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $pembagic1 = null;
        $pembagic2 = null;
        $pembagic3 = null;
        $pembagic4 = null;
        $pembagic5 = null;
        //Isi Pembagi C1
         $cariF = $conn->query("SELECT fasilitas FROM penilaian");
         if($cariF->num_rows>0)
         {
             $hasil = null;
             while($fasilitas=$cariF->fetch_row()){
                     $hasil += pow($fasilitas[0], 2);
             }
             $pembagic1 = round(sqrt($hasil),3);
         }
         //Isi Pembagi C2
         $cariKn = $conn->query("SELECT kenyamanan FROM penilaian");
         if($cariKn->num_rows>0)
         {
             $hasil = null;
             while($kenyamanan=$cariKn->fetch_row()){
                     $hasil += pow($kenyamanan[0], 2);
             }
             $pembagic2 = round(sqrt($hasil),3);
        }
        //Isi Pembagi C3
        $cariP = $conn->query("SELECT pelayanan FROM penilaian");
        if($cariP->num_rows>0)
        {
            $hasil = null;
            while($pelayanan=$cariP->fetch_row()){
                    $hasil += pow($pelayanan[0], 2);
            }
            $pembagic3 = round(sqrt($hasil),3);
        }
        //Isi Pembagi C4
        $cariK = $conn->query("SELECT keamanan FROM penilaian");
        if($cariK->num_rows>0)
        {
            $hasil = null;
            while($keamanan=$cariK->fetch_row()){
                    $hasil += pow($keamanan[0], 2);
            }
            $pembagic4 = round(sqrt($hasil),3);
        }
        //Isi Pembagi C5
        $cariE = $conn->query("SELECT efesiensi FROM penilaian");
        if($cariE->num_rows>0)
        {
            $hasil = null;
            while($efesiensi=$cariE->fetch_row()){
                    $hasil += pow($efesiensi[0], 2);
            }
            $pembagic5 = round(sqrt($hasil),3);
        }
        $sql = $conn->query("SELECT * FROM penilaian");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['rs'] ?></td>
      <td><?= $row['fasilitas'] / $pembagic1 ?></td>
      <td><?= $row['kenyamanan'] / $pembagic2 ?></td>
      <td><?= $row['pelayanan'] / $pembagic3 ?></td>
      <td><?= $row['keamanan'] / $pembagic4 ?></td>
      <td><?= $row['efesiensi'] /  $pembagic5 ?></td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>
</div>

<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
     Nilai Bobot Ternormalisasi</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
    <thead>
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Nama Instansi</th>
        <th colspan="5">Kriteria</th>
    </tr>
    <tr>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $c1 = null;
        $c2 = null;
        $c3 = null;
        $c4 = null;
        $c5 = null;
        $nilaiKriteria = $conn->query("SELECT * FROM kriteria");

        if($nilaiKriteria->num_rows>0)
        {
            $kriteria = $nilaiKriteria->fetch_assoc();
            $c1 = $kriteria['fasilitas'];
            $c2 = $kriteria['kenyamanan'];
            $c3 = $kriteria['pelayanan'];
            $c4 = $kriteria['keamanan'];
            $c5 = $kriteria['efisiensi'];
        }
         //mengkosongkan tabel m_terbobot

         $truncateT = $conn->query("TRUNCATE TABLE m_terbobot");

        $nilaiPenilaian = $conn->query("SELECT * FROM penilaian");
        if($nilaiPenilaian->num_rows>0){
          while($row = $nilaiPenilaian->fetch_assoc()){
            
            $m_terbobotC1 = ($row['fasilitas'] / $pembagic1) * $c1;
            $m_terbobotC2 = ($row['kenyamanan'] / $pembagic2) * $c2;
            $m_terbobotC3 = ($row['pelayanan'] / $pembagic3) * $c3;
            $m_terbobotC4 = ($row['keamanan'] / $pembagic4) * $c4;
            $m_terbobotC5 = ($row['efesiensi'] / $pembagic5) * $c5;
            $nama_rs = $row['rs'];
            $insert_m_terbobot = $conn->query("INSERT INTO m_terbobot (nama_rs,c1,c2,c3,c4,c5) VALUES ('$nama_rs','$m_terbobotC1','$m_terbobotC2','$m_terbobotC3','$m_terbobotC4','$m_terbobotC5') ");
          }
        }
        $hasil_mterbobot = $conn->query("SELECT * FROM m_terbobot");
        if($hasil_mterbobot->num_rows>0){
            while($row=$hasil_mterbobot->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['nama_rs'] ?></td>
      <td><?= $row['c1'] ?></td>
      <td><?= $row['c2'] ?></td>
      <td><?= $row['c3'] ?></td>
      <td><?= $row['c4'] ?></td>
      <td><?= $row['c5'] ?></td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>
</div>

<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
     Matriks Ideal Positif(max)</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
    <thead>
      <tr>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $PositifM1 = null;
        $PositifM2 = null;
        $PositifM3 = null;
        $PositifM4 = null;
        $PositifM5 = null;
        //positif (max) c1
        $PositifC1 = $conn->query("SELECT max(c1) FROM m_terbobot ");
        if($PositifC1->num_rows>0)
        {
            $row = $PositifC1->fetch_row();
            $PositifM1 = $row[0];
        }
        //positif (max) c2
        $PositifC2 = $conn->query("SELECT max(c2) FROM m_terbobot ");
        if($PositifC2->num_rows>0)
        {
            $row = $PositifC2->fetch_row();
            $PositifM2 = $row[0];
        }
        //positif (max) c3
        $PositifC3 = $conn->query("SELECT max(c3) FROM m_terbobot ");
        if($PositifC3->num_rows>0)
        {
            $row = $PositifC3->fetch_row();
            $PositifM3 = $row[0];
        }
        //positif (max) c4
        $PositifC4 = $conn->query("SELECT max(c4) FROM m_terbobot ");
        if($PositifC4->num_rows>0)
        {
            $row = $PositifC4->fetch_row();
            $PositifM4 = $row[0];
        }
        //positif (max) c5
        $PositifC5 = $conn->query("SELECT max(c5) FROM m_terbobot ");
        if($PositifC5->num_rows>0)
        {
            $row = $PositifC5->fetch_row();
            $PositifM5 = $row[0];
        }
      ?>
      <tr>
      <td><?= $PositifM1; ?></td>
      <td><?= $PositifM2; ?></td>
      <td><?= $PositifM3; ?></td>
      <td><?= $PositifM4; ?></td>
      <td><?= $PositifM5; ?></td>
      </tr>
    </tbody>
  </table>     
</div>

<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
     Matriks Ideal Negatif(min)</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
    <thead>
      <tr>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $NegatifM1 = null;
        $NegatifM2 = null;
        $NegatifM3 = null;
        $NegatifM4 = null;
        $NegatifM5 = null;
        //positif (max) c1
        $NegatifC1 = $conn->query("SELECT min(c1) FROM m_terbobot ");
        if($NegatifC1->num_rows>0)
        {
            $row = $NegatifC1->fetch_row();
            $NegatifM1 = $row[0];
        }
        //positif (max) c2
        $NegatifC2 = $conn->query("SELECT min(c2) FROM m_terbobot ");
        if($NegatifC2->num_rows>0)
        {
            $row = $NegatifC2->fetch_row();
            $NegatifM2 = $row[0];
        }
        //positif (max) c3
        $NegatifC3 = $conn->query("SELECT min(c3) FROM m_terbobot ");
        if($NegatifC3->num_rows>0)
        {
            $row = $NegatifC3->fetch_row();
            $NegatifM3 = $row[0];
        }
        //positif (max) c4
        $NegatifC4 = $conn->query("SELECT min(c4) FROM m_terbobot ");
        if($NegatifC4->num_rows>0)
        {
            $row = $NegatifC4->fetch_row();
            $NegatifM4 = $row[0];
        }
        //positif (max) c5
        $NegatifC5 = $conn->query("SELECT min(c5) FROM m_terbobot ");
        if($NegatifC5->num_rows>0)
        {
            $row = $NegatifC5->fetch_row();
            $NegatifM5 = $row[0];
        }
      ?>
      <tr>
      <td><?= $NegatifM1; ?></td>
      <td><?= $NegatifM2; ?></td>
      <td><?= $NegatifM3; ?></td>
      <td><?= $NegatifM4; ?></td>
      <td><?= $NegatifM5; ?></td>
      </tr>
    </tbody>
  </table>     
</div>

<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
     Jarak Solusi Ideal Positif (D<sup>+</sup>)</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Instansi</th>
        <th>D<sup>+</sup></th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $sql = $conn->query("SELECT * FROM m_terbobot");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['nama_rs'] ?></td>
      <td><?= sqrt(pow($row['c1'] - $PositifM1,2) + pow($row['c2'] - $PositifM2,2) 
            + pow($row['c3'] - $PositifM3,2) + pow($row['c4'] - $PositifM4,2) 
            + pow($PositifM5 - $row['c5'],2))?></td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>     
</div>


<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
     Jarak Solusi Ideal Negatif (D<sup>-</sup>)</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Instansi</th>
        <th>D<sup>-</sup></th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $sql = $conn->query("SELECT * FROM m_terbobot");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['nama_rs'] ?></td>
      <td><?= sqrt(pow($row['c1'] - $NegatifM1,2) + pow($row['c2'] - $NegatifM2,2) 
            + pow($row['c3'] - $NegatifM3,2) + pow($row['c4'] - $NegatifM4,2) 
            + pow($NegatifM5 - $row['c5'],2))?></td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>     
</div>

<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
     Nilai Preferensi</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Instansi</th>
        <th>Jenis Instansi</th>
        <th>Nilai</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $truncatePreferensi = $conn->query("TRUNCATE TABLE preferensi");
        $nilaimTerbobots = $conn->query("SELECT * FROM m_terbobot JOIN alternative ON alternative.nama_rs = m_terbobot.nama_rs");
        if($nilaimTerbobots->num_rows > 0){
            while($row = $nilaimTerbobots->fetch_assoc()){
            //hitung nilai preferensi
            $nilaiPreferensi = sqrt(pow($row['c1'] - $NegatifM1,2) + pow($row['c2'] - $NegatifM2,2) + pow($row['c3'] - $NegatifM3,2)+ pow($row['c4'] - $NegatifM4,2)+ pow($NegatifM5 - $row['c5'],2)) 
                            /(sqrt(pow($row['c1'] - $NegatifM1,2) + pow($row['c2'] - $NegatifM2,2) + pow($row['c3'] - $NegatifM3,2)+ pow($row['c4'] - $NegatifM4,2)+ pow($NegatifM5 - $row['c5'],2)) + sqrt(pow($row['c1']
                            - $PositifM1,2) + pow($row['c2'] - $PositifM2,2) + pow($row['c3'] - $PositifM3,2)+ pow($row['c4'] - $PositifM4,2)+ pow($PositifM5 - $row['c5'],2)));
            $rs = $row['nama_rs'];
            $jenis = $row['jenis'];
            $insertPrefrensi = $conn->query("INSERT INTO preferensi (nama_rs,nilai_preferensi,jenis) VALUES ('$rs','$nilaiPreferensi','$jenis') ");
                                }
                            }

        $sql = $conn->query("SELECT * FROM preferensi JOIN alternative ON alternative.nama_rs = preferensi.nama_rs");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['nama_rs'] ?></td>
      <td><?= $row['jenis'] ?></td>
      <td><?= $row['nilai_preferensi'] ?></td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>     
</div>

<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
     Ranking Nilai Preferensi</div>
   <div class="card-body">
   <table class="table table-head-fixed" id="">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Instansi</th>
        <th>Jenis Instansi</th>
        <th>Nilai</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        $sql = $conn->query("SELECT * FROM preferensi JOIN alternative ON alternative.nama_rs = preferensi.nama_rs  ORDER BY nilai_preferensi DESC");
        if($sql->num_rows>0){
          while($row = $sql->fetch_assoc()){
      ?>
      <tr>
      <td><?= $no++; ?></td>
      <td><?= $row['nama_rs'] ?></td>
      <td><?= $row['jenis'] ?></td>
      <td><?= $row['nilai_preferensi'] ?></td>
      </tr>
      <?php }} ?>
    </tbody>
  </table>     
</div>

</div>
</main>
<?php include 'footer.php' ?>