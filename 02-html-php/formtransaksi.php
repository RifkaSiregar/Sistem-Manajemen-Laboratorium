<?php
include "koneksi.php";
if (isset($_POST['bsimpan'])) {
    $simpan = mysqli_query($koneksi, "INSERT INTO transaksi (Kode, ID, Tanggal, Jumlah, Status)
                                VALUES ('$_POST[tkode]','$_POST[tid]','$_POST[ttanggal]','$_POST[tjumlah]','$_POST[tstatus]')
                                ");
    $data = mysqli_fetch_array($simpan);
    if ($simpan) //Jika simpan sukses
    {
        echo "<script>
            alert('Transaksi sukses!');
            document.location='Form_Transaksi.php';
            </script>";
    } else {
        echo "<script>
            alert('Transaksi gagal!');
            document.location='Form_Transaksi.php';
            </script>";
    }
}
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
        body {
            background-image: url(Simalab.jpeg);
            background-size: cover
        }

        .garis_verikal {
            border-left: 1.75px black solid;
            height: 30px;
            width: 0px;
        }
    </style>

    <title>form transaksi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <main>

        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="main_interface.php">Home</a>
                    </li>
                    <div class="garis_verikal"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="data_informasi.php">Data Informasi</a>
                    </li>
                    <div class="garis_verikal"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="cek_kondisi.php">Cek Kondisi</a>
                    </li>
                    <div class="garis_verikal"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="Form_Transaksi.php">Transaksi</a>
                    </li>
                    <div class ="garis_verikal"></div>
            <li class ="nav-item">
                <a class="nav-link" href="update.php">Update Data</a>
            </li>
                </ul>
                
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

                <link rel="stylesheet" href="style.css">
                <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        </nav>


        <!-- Awal Card Form -->
        <div class="container">
            <div class="jumbotron">
                <div class="card bg-info text-dark">
                    <div class="card header text-center display-4">
                        Form Transaksi
                    </div>
                    <div class="card-body">
                        <form method="post" action="">

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tkode" value="<?= @$vkode ?>" id="kode" class="form-control" placeholder="Input Kode disini!" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tid" value="<?= @$vid ?>" id="id" class="form-control" placeholder="Input ID disini!" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="text" name="ttanggal" value="<?= @$vtanggal ?>" id="tanggal" class="form-control" placeholder="Input Tanggal disini!" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tjumlah" value="<?= @$vjumlah ?>" id="jumlah" class="form-control" placeholder="Input Jumlah disini!" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tstatus" value="<?= @$vstatus ?>" id="status" class="form-control" placeholder="Input Status disini!" required>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

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
      <body>
     
      <div class="footer">
        <p>© 2020 Copyright: Simalab Kelompok 6 PPW</p>
      </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </main>
</body>

</html>