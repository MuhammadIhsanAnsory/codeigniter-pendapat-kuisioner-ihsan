<?php
$n_sangat_puas = count($sangat_puas);
$n_puas = count($puas);
$n_tidak_puas = count($tidak_puas);

// ========= DATA UNTUK SEMINGGU TERAKHIR ================

// // start nilai sangat puas seminggu terakhir
// $conn = mysqli_connect("localhost", "root", "", "kuisioner");
// $sangat_puas_smg = mysqli_query($conn, "SELECT * FROM tb_sangat_puas WHERE tanggal >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY
// AND tanggal < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY");
// $sangat_puas_seminggu = mysqli_num_rows($sangat_puas_smg);
// //--------------end sangat puas seminggu

// // start nilai puas seminggu terakhir
// $puas_smg = mysqli_query($conn, "SELECT * FROM tb_puas WHERE tanggal >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY
// AND tanggal < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY");
// $puas_seminggu = mysqli_num_rows($puas_smg);
// //--------------end puas seminggu

// // start nilai kurang puas seminggu terakhir
// $kurang_puas_smg = mysqli_query($conn, "SELECT * FROM tb_tidak_puas WHERE tanggal >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY
// AND tanggal < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY");
// $kurang_puas_seminggu = mysqli_num_rows($kurang_puas_smg);
// //--------------end kurang puas seminggu
// // ========= END DATA UNTUK SEMINGGU TERAKHIR ================





// ========= DATA UNTUK SEBULAN TERAKHIR ================

// $conn = mysqli_connect("localhost", "root", "", "kuisioner");
// // start nilai sangat puas sebulan terakhir
// $sangat_puas_sbln = mysqli_query($conn, "SELECT * FROM tb_sangat_puas WHERE tanggal >= $angka_sebulan_terakhir");
// $sangat_puas_sebulan = mysqli_num_rows($sangat_puas_sbln);
// //--------------end sangat puas sebulan

// // start nilai puas sebulan terakhir
// $puas_sbln = mysqli_query($conn, "SELECT * FROM tb_puas WHERE tanggal >= $angka_sebulan_terakhir");
// $puas_sebulan = mysqli_num_rows($puas_sbln);
// //--------------end puas sebulan

// // start nilai kurang puas sebulan terakhir
// $kurang_puas_sbln = mysqli_query($conn, "SELECT * FROM tb_tidak_puas WHERE tanggal >= $angka_sebulan_terakhir");
// $kurang_puas_sebulan = mysqli_num_rows($kurang_puas_sbln);
// //--------------end kurang puas sebulan
// // ========= END DATA UNTUK SEBULAN TERAKHIR ================







?>

<!-- canvas 1     -->
<div class="container">
  <div class="row">
    <a href="<?= base_url('dashboard') ?>" class="btn btn-primary btn-lg mt-3">Kembali</a>
  </div>
  <h2 class="text-center">HASIL</h2>

  <canvas id="doughnutChart"></canvas>

  <div class="row text-center my-5">
    <div class="col-md-4 bg-primary text-white">
      <h2>Sangat Puas</h2>
      <h4><?= $n_sangat_puas ?> orang</h4>
    </div>
    <div class="col-md-4  bg-info text-white">
      <h2>Puas</h2>
      <h4><?= $n_puas ?> orang</h4>
    </div>
    <div class="col-md-4  bg-danger text-white">
      <h2>Tidak Puas</h2>
      <h4><?= $n_tidak_puas ?> orang</h4>
    </div>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
  //doughnut

  var sangat_puas = '<?= $n_sangat_puas ?>';
  var puas = '<?= $n_puas ?>';
  var tidak_puas = '<?= $n_tidak_puas ?>';

  var ctxD = document.getElementById("doughnutChart").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Sangat Puas", "Puas", "Tidak Puas"],
      datasets: [{
        data: [sangat_puas, puas, tidak_puas],
        backgroundColor: ["#3e64ff", "#46BFBD", "#F7464A"],
        hoverBackgroundColor: ["#2d4fdb", "#5AD3D1", "#FF5A5E"]
      }]
    },
    options: {
      responsive: true
    }
  });
</script>

<!-- END canvas 1     -->

<!-- canvas 2     -->
<!-- <div class="container">
  <br>
  <br>
  <h2 class="text-center">HASIL VOTE SEMINGGU TERAKHIR</h2>
  <canvas id="doughnutChartSeminggu"></canvas>
</div>


<script>
  //doughnut

  var sangat_puas_seminggu = '<?= $sangat_puas_seminggu ?>';
  var puas_seminggu = '<?= $puas_seminggu ?>';
  var tidak_puas_seminggu = '<?= $kurang_puas_seminggu ?>';

  var ctxD = document.getElementById("doughnutChartSeminggu").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Sangat Puas", "Puas", "Tidak Puas"],
      datasets: [{
        data: [sangat_puas_seminggu, puas_seminggu, tidak_puas_seminggu],
        backgroundColor: ["#3e64ff", "#46BFBD", "#F7464A"],
        hoverBackgroundColor: ["#2d4fdb", "#5AD3D1", "#FF5A5E"]
      }]
    },
    options: {
      responsive: true
    }
  });
</script> -->
<!-- END canvas 2     -->

<!-- canvas 3     -->
<!-- <div class="container">
  <br>
  <br>
  <h2 class="text-center">HASIL VOTE SEBULAN TERAKHIR</h2>
  <canvas id="doughnutChartSebulan"></canvas>
</div>

<script> -->
<!-- //doughnut -->

<!-- var sangat_puas_sebulan = '<?= $sangat_puas_sebulan ?>';
  var puas_sebulan = '<?= $puas_seminggu ?>';
  var tidak_puas_sebulan = '<?= $kurang_puas_sebulan ?>';

  var ctxD = document.getElementById("doughnutChartSebulan").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Sangat Puas", "Puas", "Tidak Puas"],
      datasets: [{
        data: [sangat_puas_sebulan, puas_sebulan, tidak_puas_sebulan],
        backgroundColor: ["#3e64ff", "#46BFBD", "#F7464A"],
        hoverBackgroundColor: ["#2d4fdb", "#5AD3D1", "#FF5A5E"]
      }]
    },
    options: {
      responsive: true
    }
  });
</script> -->
<!-- END canvas 3     -->