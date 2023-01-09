<?php include 'header.php' ?>

<title>Index</title>
<?php include '../koneksi.php';

                           $panggil = $conn->query("SELECT * FROM alternative");
                           $count1 = $panggil->num_rows;
                           $panggil2 = $conn->query("SELECT * FROM kriteria");
                           $count2 = $panggil2->num_rows;
                           $panggil3 = $conn->query("SELECT * FROM penilaian");
                           $count3 = $panggil3->num_rows;
                           $panggil4 = $conn->query("SELECT * FROM user WHERE class='user'");
                           $count4 = $panggil4->num_rows;
                           $panggil5 = $conn->query("SELECT * FROM user WHERE class='admin'");
                           $count5 = $panggil5->num_rows;
                           $panggil6 = $conn->query("SELECT * FROM preferensi");
                           $count6 = $panggil6->num_rows;
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Data Alternative</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                        <?= $count1; ?>
                            <div class="small text-white"><i class="fas fa-angle-left"></i></div>
                        </div>
                    </div>
                </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Data Kriteria</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                        <?= $count2; ?> 
                        <div class="small text-white"><i class="fas fa-angle-left"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Data Penilaian</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                        <?= $count3; ?>
                        <div class="small text-white"><i class="fas fa-angle-left"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Data Admin</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                        <?= $count5; ?>
                            <div class="small text-white"><i class="fas fa-angle-left"></i></div>
                        </div>
                    </div>
                </div> 
            <div class="col-xl-4 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Data User</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                        <?= $count4; ?>
                            <div class="small text-white"><i class="fas fa-angle-left"></i></div>
                        </div>
                    </div>
                </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Data Nilai Preferensi</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                        <?= $count6; ?>
                        <div class="small text-white"><i class="fas fa-angle-left"></i></div>
                    </div>
                </div>
            </div>      
</div>
<div class="row">
    <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                            Chart Jenis Instansi
                    </div>
                        <div class="card-body"><canvas id="ChartF" width="100%" height="40"></canvas></div>
                    </div>
                </div>
</div>
<div class="row">
<div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                            Chart Ranking Nilai Preferensi
                        </div>
                        <div class="card-body"><canvas id="ChartRanking" width="100%" height="40"></canvas></div>
                    </div>
                </div>
</div>
</div>
</main>
<?php include 'footer.php' ?>
<?php include 'chart.php' ?>