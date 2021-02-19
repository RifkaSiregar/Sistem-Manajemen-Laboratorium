<?php
include "koneksi.php";
session_start();
if(isset($_POST['']))
{  
$tampil = mysqli_query($konek, "SELECT * from update_data_inventaris");
$data = mysqli_fetch_array($tampil);
}
?>

<!DOCTYPE html>
<html>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../01-html-css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <head>
        <title>Update Data Inventaris</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="margin.css" media="all" />
        <style>
            body{
                background-image: url(Simalab.jpeg);
            }
            .garis_verikal{
		        border-left: 1.75px black solid;
		        height: 30px;
		        width: 0px;
	        }
            .p{
                font-size: 30px;
                color: black;
                font-style: initial;
            }
        </style>
       
    </head>
        </div>
        <body>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class ="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <div class="garis_verikal"></div>
                <li class ="nav-item">
                    <a class="nav-link" href="data_informasi.php">Data Informasi</a>
                </li>
                <div class="garis_verikal"></div>
                <li class ="nav-item">
                    <a class="nav-link" href="cek_kondisi.php">Cek Kondisi</a>
                </li>
                <div class ="garis_verikal"></div>
                <li class ="nav-item">
                  <a class="nav-link" href="formtransaksi.php">Transaksi</a>
                </li>
                <div class="garis_verikal"></div>
                <li class ="nav-item">
                  <a class="nav-link" href="update.php">Update Data</a>
                </li>
                <div class = "garis-verikal"></div>
                <li class ="nav-item">
                  <a class="nav-link" href="log_aktivity.php">Log Aktivity</a>
                </li>
            </ul>          
            </div>        
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
        <nav class="navbar navbar-expand-lg navbar-primary bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class ="nav-item">
                    <a class="nav-link" href="../01-html-css/main_interface_css.html">Home</a>
                </li>
                <div class="garis_verikal"></div>
                <li class ="nav-item">
                    <a class="nav-link" href="../01-html-css/data_informasi_css.html">Data Informasi</a>
                </li>
                <div class="garis_verikal"></div>
                <li class ="nav-item">
                    <a class="nav-link" href="../01-html-css/cek_kondisi_css.html">Cek Kondisi</a>
                </li>
                <div class = "garis-verikal"></div>
                <li class ="nav-item">
                  <a class="nav-link" href="log_aktivity.php">Log Aktivity</a>
                </li>
                
            </ul>
            <div class="search-container">
            <div class="search-box">
                <input class="search-txt" type="text" name="cari" placeholder="Type to search">
                <a class="search-btn" href="../02-html-php/cari.php">
                    <span class="icon"></span><i class="fas fa-search"></i>
                </a>
            </div>
            </div>
            </div>      
        </nav>

  <div class="container">
          <div class="jumbotron">
        <div class="card">
            <div class="card-header text-center display-4">
              Data Inventaris  
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
        $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * from `update_data_inventaris` order by ID desc");
            while($data = mysqli_fetch_array($tampil)) :
            
        ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['ID']?></td>
                <td><?=$data['Nama Inventaris']?></td>
                <td><?=$data['Jumlah']?></td>
                <td><?=$data['Kondisi']?></td>
                <td><?=$data['Status']?></td>
                </tr>      
<?php endwhile; //penutup perulangan while?>
</table>
      </div>
      </div>
</div>
</div>
</div>
</div>
</div>
</div>

        <div class= "container">
            <a href="update_data.php" class="btn btn-success">Update</a>
            <a href="index.php" class="btn btn-danger">Cancel</a>         
        </div> 
        </div>       
    </body>
</html>

