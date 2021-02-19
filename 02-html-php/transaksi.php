<?php
include "koneksi.php";

session_start();
if(empty($_SESSION['username']) or empty($_SESSION['level'])){

    echo "<script>
    alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');
    document.location='cek_kondisi.php'</script>";
}

?>

<!doctype html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
       

        body{
            background-image: url(Simalab.jpeg);
        background-size:cover
        }
        .garis_pembatas{
		        border-left: 1.75px black solid;
		        height: 30px;
		        width: 0px;
        </style>

    <title>Transaksi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <main>
    
    <nav class="navbar navbar-expand-lg navbar-primary bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class ="nav-item">
                <a class="nav-link" href="main_interface_css.html">Home</a>
            </li>
            <div class="garis_pembatas"></div>
            <li class ="nav-item">
                <a class="nav-link" href="data_informasi_css.html">Data Informasi</a>
            </li>
            <div class="garis_pembatas"></div>
            <li class ="nav-item">
                <a class="nav-link" href="cek_kondisi_css.html">Cek Kondisi</a>
            </li>
            <div class="garis_pembatas"></div>
            <li class ="nav-item">
                <a class="nav-link" href="transaksi_css.html">Transaksi</a>
            </li>
        </ul>    
        <form class="form-inline my-2 my-lg-0" action="/action_page.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" href="searching_interface_css.html">Cari</button>
        </form>
        </div>
    </nav>

    <div class="tron text-center">
        <h1><p class="text-center">TRANSAKSI</p></h1>
      
        <div class="container">
            <table class ="table" >
                <thead class="thead-dark">
                <tr>
                    <th>No</th> <th>Kode</th> 
                    <th>ID</th> <th>Tanggal</th> 
                    <th>Jumlah</th> <th>Status</th>
                </tr>
                </thead>
            </tbody>
                <tr class ="table-secondary">
                    <td>1</td>
                    <td>001</td> 
                    <td>002A</td> 
                    <td>15-04-2020</td> 
                    <td>4</td> 
                    <td>Peminjaman</td>
                </tr>
                <tr class ="table-light">
                    <td>2</td> <td>002</td> 
                    <td>003B</td> <td>16-04-2020</td> 
                    <td>1</td> <td>Pengembalian</td>
                </tr>
                <tr class ="table-secondary">
                    <td>3</td> <td>003</td> 
                    <td>002C</td> <td>16-04-2020</td> 
                    <td>2</td> <td>Peminjaman</td>
                </tr>     
                <tr class ="table-light">
                    <td>4</td> <td>004</td> 
                    <td>003C</td> <td>16-04-2020</td> 
                    <td>1</td> <td>Pengembalian</td>
                </tr>
                <tr class ="table-secondary">
                    <td>5</td> <td>005</td> 
                    <td>002D</td> <td>17-04-2020</td> 
                    <td>2</td> <td>Pengembalian</td>
                </tr>      
            </table>
        </div>
      
      </div>
      
    
      <div class="container">
        <ul class= "pagination justify-content-center" style="margin:20px 0">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>                         
        </ul>
         

        <div class="tron text-center">
  <a href="Form_Transaksi_css.html" class="btn btn-success" role="button">Tambah Transaksi</a>
  </div>  

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</main>
</body>
</html>