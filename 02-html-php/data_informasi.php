<?php
include 'koneksi.php';

session_start();
if(empty($_SESSION['username']) or empty($_SESSION['level'])){

    echo "<script>
    alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');
    document.location='data_informasi.php'</script>";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Data Informasi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
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
        <div class="card">
            <div class="card-header text-center display-4">
            <br/>
              Data Informasi
              <br/>
          </div>
          <div class="card-body">
          <table class="table table-bordered table-sm table-striped mt-3 text-center">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Inventaris</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
            <th>Status</th>
            
</tr>
</thead>
<?php
        include 'koneksi.php';
        $no = 1;
		$data = mysqli_query($koneksi,"select * from data_informasi");
		while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
                <td><?php echo $no++;?></td>
				<td><?php echo $d['ID'];?></td>
				<td><?php echo $d['Nama_inventaris'];?></td>
				<td><?php echo $d['Jumlah'];?></td>
				<td><?php echo $d['Kondisi'];?></td>
				<td><?php echo $d['Status'];?></td>
                    
            </tr> 
<?php 
        }    
        ?> 
</table>
</div>
        <div class="container">
            <ul class= "pagination justify-content-center" style="margin:20px 0">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>                            
            </ul>
        </div>
      
    <form method="post" action="export.php">
     <center><input type="submit" name="export" class="btn btn-success" value="Download" /></center>
    </form> 
    <style>
      .footer {
         left: 0;
         bottom: 0;
         width: 100%;
         background-color: rgba(55, 50, 78, 0.247);
         color: white;
         text-align: center;
      }
      </style>
      </head>
     
      <div class="footer">
      </br>
      
        <p>© 2020 Copyright: Simalab Kelompok 6 PPW</p>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
