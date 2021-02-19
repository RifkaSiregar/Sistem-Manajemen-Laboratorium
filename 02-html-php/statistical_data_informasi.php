<?php
include 'koneksi.php';


$data_informasi = mysqli_query($koneksi, "SELECT Nama_inventaris FROM data_informasi GROUP BY Jumlah");

$nama_inventaris = array();
$jumlah = array();

while ($data = mysqli_fetch_array($data_informasi)) {
 
}
session_start();
if(empty($_SESSION['username']) or empty($_SESSION['level'])){

    echo "<script>
    alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');
    document.location='data_informasi.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Informasi Visualization</title>
    <script type="text/javascript" src="chartjs/Chart.js"></script>
    <script type="text/javascript" src="Chart.bundle.min.js"></script>
</head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
  
  .garis_verikal{
    border-left: 1.75px black solid;
    height: 30px;
    width: 0px;
  }
  
</style>
  <body>
  <div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>
<body>
</style>
  <body>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class = "nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <div class ="garis_verikal"></div>
            <li class ="nav-item">
                <a class="nav-link" href="data_informasi.php">Data Informasi</a>
            </li>
            <div class ="garis_verikal"></div>
            <li class ="nav-item">
                <a class="nav-link" href="cek_kondisi.php">Cek Kondisi</a>
            </li>
            <div class ="garis_verikal"></div>
            <li class ="nav-item">
                <a class="nav-link" href="formtransaksi.php">Transaksi</a>
            </li>
            <div class ="garis_verikal"></div>
            <li class ="nav-item">
                <a class="nav-link" href="update.php">Update Data</a>
            </li>
            </li>
            <div class ="garis_verikal"></div>
            <li class ="nav-item">
                <a class="nav-link" href="statistical_data_informasi.php">Data Visualization</a>
            </li>
        </ul>
        <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  
    <div class="dropdown">
                    <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                        Halo, <b><?= $_SESSION['username']?></b>
                      </button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                    </div>
                  </body>
    </div> </div>
  </nav>
  <div class="jumbotron">
        
         
 
	<center>
		<h2>Data  Visualization</h2>
	</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
    <br/>
    

    <script>
		
        var barchart = document.getElementById('bar-chart');
        var chart = new Chart(barchart, {
          type: 'bar',
          data: {
            labels: <?php echo json_encode($nama_inventaris) ?>, // Merubah data tanggal menjadi format JSON
            datasets: [{
              label: 'Data Visualization',
              data: <?php echo json_encode($jumlah) ?>,
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)'
              ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)'
              ],
              borderWidth: 2
            }]
          }
        });
	</script>
</body>
</html>
