<?php
session_start();
if(empty($_SESSION['username']) or empty($_SESSION['level'])){

    echo "<script>
    alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');
    document.location='login.php'</script>";
}
?>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../01-html-css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <head>
        <title>Log Activity</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="../01-html-css/margin.css" media="all" />
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
      body{
        background-image: url("../01-html-css/Simalab.jpeg");
      }
      .garis_verikal{
        border-left: 1.75px black solid;
        height: 30px;
	      width: 0px;
	    }
    </style>
    </head>
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
                <div class="garis_verikal"></div>
                <div class="menu-warp">
                    <ul>
                        <li class="dropdown"><a href="#">Transaksi</a>
                            <ul class="isi-dropdown">
                            <li><a href="../01-html-css/Form_Transaksi_css.html">Transaksi</a></li>
                            <li><a href="../01-html-css/update_data_with_css.html">Update Data</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
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
        
        <table border="1">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>page</th>
        <th>IP</th>
        <th>date auto</th>
      </tr>
      <?php include ("log.php");?>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
        $query = "SELECT * FROM `tracker` ";
        $result = mysqli_query($konek, $query);
        if(!$result){
            die ("Query Error: ".mysqli_errno($konek).
               " - ".mysqli_error($konek));
        }
        // $query = "SELECT * FROM `tracker` where IP ORDER BY date_auto";
        // $result = mysqli_query($konek, $query);

        // for ($i = 0;$i<mysqli_num_rows ($result);$i++){   
        //     $date_auto = mysql_result($result, $i, "date_auto");
        //     $date = date("H:i:s m/d/Y", $date_auto);

        //     echo "Date : $date";
        // }

        

      //buat perulangan untuk element tabel dari update_data_inventaris
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
          {
            // mencetak / menampilkan data
            echo "<tr>";
            echo "<td>$no</td>"; //menampilkan no urut
            echo "<td>$nama</td>";
            echo "<td>$data[page]</td>"; //menampilkan data Id dari inventaris
            echo "<td>$data[IP]</td>"; //menampilkan data nama inventaris
            echo "<td>$data[date_auto]</td>";
            echo "</tr>";
            $no++; // menambah nilai nomor urut
          }
      ?>
    </table>
    </body>
</html>