<?php 
// isi nama host, username mysql, dan password mysql anda
$konek = mysqli_connect("localhost","p06_gnf2","lTwqObjBHN");

// isikan dengan nama database yang akan di hubungkan
$data = mysqli_select_db($konek, "p06_db"); 
?>

<h8>STATISTICAL DATA TRANSAKSI BERDASARKAN NAMA INVENTARIS</h8>


<head>

	<title>Bar Chart</title>
	<script src="../../../Chart.bundle.js"></script>
	<script src="../../utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
body{
  background-image: url("Simalab.jpeg");
}
.garis_verikal{
  border-left: 1.75px black solid;
  height: 30px;
  width: 0px;
}

</style>


        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index_css.html">Home</a>
                    </li>
                    <div class="garis_verikal"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="data_informasi_css.html">Data Informasi</a>
                    </li>
                    <div class="garis_verikal"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="form_cek_kondisi_css.html">Cek Kondisi</a>
                    </li>
                    <div class="garis_verikal"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi_css.html">Transaksi</a>
                    </li>
                    <div class ="garis_verikal"></div>
            <li class ="nav-item">
                <a class="nav-link" href="update_data_with_css.html">Update Data</a>
            </li>
                </ul>
                
    <div class="dropdown">
                    <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                        Halo, <b><?= $_SESSION['username']?></b>
                      </button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="webchat_css.html">Chat</a>  
                          <a class="dropdown-item" href="logout.php">Logout</a>
                              
                      </div>
                    </div>
                  </body>
    </div> </div>

                <link rel="stylesheet" href="style.css">
                <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        </nav>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>




<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>

<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
 
	<table border="1">
		<thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Inventaris</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
            <th>Status</th>
            
</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($konek,"SELECT * FROM `data_informasi`");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
                    <td><?php echo $no++; ?></td>
					<td><?php echo $d['ID']; ?></td>
					<td><?php echo $d['Nama Inventaris']; ?></td>
                    <td><?php echo $d['Jumlah']; ?></td>
                    <td><?php echo $d['Kondisi']; ?></td>
                    <td><?php echo $d['Status']; ?></td>
                </tr>
				<?php 
			}
			?>
		</tbody>
	</table>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Hardisk", "Mouse", "Proyektor", "Lenovo Yoga 520", "Keybooard", "CPU"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_Hardisk = mysqli_query($konek,"SELECT * FROM `data_informasi` WHERE `Nama Inventaris` like 'Hardisk'");
					echo mysqli_num_rows($jumlah_Hardisk);
					?>, 
					<?php 
					$jumlah_Mouse = mysqli_query($konek,"SELECT * FROM `data_informasi` WHERE `Nama Inventaris` like 'Mouse'");
					echo mysqli_num_rows($jumlah_Mouse);
					?>, 
					<?php 
					$jumlah_Proyektor = mysqli_query($konek,"SELECT * FROM `data_informasi` WHERE `Nama Inventaris` like 'Proyektor'");
					echo mysqli_num_rows($jumlah_Proyektor);
					?>, 
					<?php 
					$jumlah_Lenovo = mysqli_query($konek,"SELECT * FROM `data_informasi` WHERE `Nama Inventaris` like 'Lenovo Yoga 520'");
					echo mysqli_num_rows($jumlah_Lenovo);
					?>
                    <?php 
					$jumlah_Keyboard = mysqli_query($konek,"SELECT * FROM `data_informasi` WHERE `Nama Inventaris` like 'Keyboard'");
					echo mysqli_num_rows($jumlah_Keyboard);
					?>
                    <?php 
					$jumlah_CPU = mysqli_query($konek,"SELECT * FROM `data_informasi` WHERE `Nama Inventaris` like 'CPU'");
					echo mysqli_num_rows($jumlah_CPU);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
        </script>
	<div id="container" style="width: 75%;">
		<canvas id="canvas"></canvas>
	</div>
	<button id="randomizeData">Randomize Data</button>
	<button id="addDataset">Add Dataset</button>
	<button id="removeDataset">Remove Dataset</button>
	<button id="addData">Add Data</button>
	<button id="removeData">Remove Data</button>
	<script>
		
	
</body>

</html>
