<?php 
 $rs = $conn->query("SELECT nama_rs FROM preferensi ORDER BY nilai_preferensi DESC");
 $np = $conn->query("SELECT nilai_preferensi FROM preferensi ORDER BY nilai_preferensi DESC");
 $f = $conn->query("SELECT c1 FROM m_terbobot ORDER BY c1 DESC");
 $f1 = $conn->query("SELECT nama_rs FROM m_terbobot ORDER BY c1 DESC");
 $j1 = $conn->query("SELECT jenis FROM alternative WHERE jenis='Rumah Sakit Umum'");
 $jj1 = $j1->num_rows;
 $j2 = $conn->query("SELECT jenis FROM alternative WHERE jenis='Rumah Sakit Ibu dan Anak'");
 $jj2 = $j2->num_rows;
 $j3 = $conn->query("SELECT jenis FROM alternative WHERE jenis='Puskesmas' OR jenis='Klinik' ");
 $jj3 = $j3->num_rows;

?>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("ChartRanking");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["<?php while($row=$rs->fetch_assoc()){echo $row['nama_rs']; ?>","<?php }?>"],
    datasets: [{
      label: "Nilai Preferensi",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: ["<?php while($s=$np->fetch_assoc()){echo $s['nilai_preferensi']; ?>","<?php } ?>"],
    }],
  },
  options: {
    scales: {
      xAxes: [{ 
        time: {
          unit: ''
        },
        gridLines: {
          display: false
        },
        ticks: {
            beginAtZero:true
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 1,
          maxTicksLimit: 6
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("ChartF");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Rumah Sakit Umum","Rumah Sakit Bersalin","Puskesmas"],
    datasets: [{
      label: "Nilai Fasilitas",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: ["<?php echo $jj1;?>","<?php echo $jj2;?>","<?php echo $jj3;?>"],
    }],
  },
  options: {
    scales: {
      xAxes: [{ 
        time: {
          unit: ''
        },
        gridLines: {
          display: false
        },
        ticks: {
            beginAtZero:true
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 20,
          maxTicksLimit: 6
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>
