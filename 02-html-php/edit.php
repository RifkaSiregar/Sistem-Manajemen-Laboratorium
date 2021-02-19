<?php
  // memanggil file koneksi.php untuk membuat koneksi
$konek = mysqli_connect("localhost", "p06_gnf2","lTwqObjBHN", "p06_db");

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['ID'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $ID = ($_GET["ID"]);

    // menampilkan data update_data_inventaris dari database yang mempunyai ID=$ID
    $query = "SELECT * FROM `update_data_inventaris` WHERE ID='$ID'";
    $result = mysqli_query($konek, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($konek).
         " - ".mysqli_error($konek));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $ID = $data["ID"];
    $Nama_Inventaris = $data["Nama Inventaris"];
    $Jumlah = $data["Jumlah"];
    $Kondisi = $data["Kondisi"];
    $Status = $data["Status"];
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:update_data.php");
  }

session_start();
if(empty($_SESSION['username']) or empty($_SESSION['level'])){

    echo "<script>
    alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');
    document.location='login.php'</script>";
}


?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="../01-html-css/margin.css" media="all" />

    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
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
    <h1>Edit Data</h1>
    <div class="container">
      <form id="form_edit" action="edit_proses.php" method="post">
        <input type="hidden" name="ID" value="<?php echo $ID; ?>">
        <fieldset>
        <legend>Edit Data Inventaris</legend>
          <p>
            <label for="ID">ID : </label>
            <input type="text" name="ID" id="ID" value="<?php echo $ID ?>">
          </p>
          <p>
            <label for="Nama_Inventaris">Nama Inventaris : </label>
            <input type="text" name="Nama_Inventaris" id="Nama_Inventaris" value="<?php echo $Nama_Inventaris ?>">
          </p>
          <p>
            <label for="Jumlah">Kondisi : </label>
            <input type="text" name="Jumlah" id="Jumlah" value="<?php echo $Jumlah ?>">
          </p>
          <p>
            <label for="Kondisi">Kondisi : </label>
            <input type="text" name="Kondisi" id="Kondisi" value="<?php echo $Kondisi ?>">
          </p>
          <p>
            <label for="Status">Status : </label>
            <input type="text" name="Status" id="Status" value="<?php echo $Status ?>">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
        <p>
          <a href="update_data.php" class="btn btn-light">Back</a>
        </p>
      </form>
  </div>
  </body>
</html>