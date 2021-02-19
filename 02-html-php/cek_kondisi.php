<?php
include "koneksi.php";
//Jika tombol simpan diklik
if(isset($_POST['bsimpan']))
{   
    //Data akan diedit
    $edit = mysqli_query($koneksi, "UPDATE cek_kondisi set
                                  Kondisi = '$_POST[tkondisi]'
                                  WHERE ID = '$_GET[id]'
                                  ");
      if($edit) //Jika edit sukses
        {
            echo "<script>
            alert('Edit data sukses!');
            document.location='cek_kondisi.php';
            </script>";
        }
    else
    {
            echo "<script>
            alert('Edit data gagal!');
            document.location='cek_kondisi.php';
            </script>";   
    } 
  }

//Pengujian jika tombol edit diklik
if(isset($_GET['hal']))
{
    //Pengujian jika edit data
    if($_GET['hal'] == "edit")
    {
        //Tampilkan Data yang akan diedit
        $tampil = mysqli_query($koneksi, "SELECT * from cek_kondisi WHERE ID = '$_GET[id]' ");
        $data = mysqli_fetch_array($tampil);
        if($data)
        {
            //Jika data ditemukan, maka data ditampung ke dalam variabel
            $vid = $data['ID'];
            $vnama = $data['Nama Inventaris'];
            $vkondisi = $data['Kondisi']; 
        }
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
<html lang="en">
  <head>
    <title>Cek Kondisi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
</body>

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

    <div class="container">
          <div class="jumbotron">
        <div class="card">
            <div class="card-header text-center display-4">
              Daftar Kondisi Inventaris  
          </div>
          <div class="card-body">
          <table class="table table-bordered table-sm table-striped mt-3 text-center">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Inventaris</th>
            <th>Kondisi</th>
            <th>Aksi</th>
</tr>
</thead>
<?php
        $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * from cek_kondisi order by ID desc");
            while($data = mysqli_fetch_array($tampil)) :
            
        ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['ID']?></td>
                <td><?=$data['Nama Inventaris']?></td>
                <td><?=$data['Kondisi']?></td>
                <td>
                    <a href="cek_kondisi.php?hal=edit&id=<?=$data['ID']?>" class="btn btn-warning badge-pill"> Edit <a>
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


<!-- Awal Card Form -->
<div class="container">
<div class="jumbotron">
<div class="card bg-info text-dark">
<div class="card header text-center display-4">
  Form Edit Kondisi
  </div>
  <div class="card-body">
  <form method="post" action="">
        
        <div class="form-group row">
            <label for="staticnama" class="col-form-label">Nama Inventaris</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" value="<?=@$vnama?>" id="staticnama">
        </div>
        </div>
        <div class="form-group row">
            <label for="kondisi" class="col-form-label">Kondisi</label>
            <div class="col-sm-10">
            <input type="text" name="tkondisi" value="<?=@$vkondisi?>" id="kondisi" class="form-control" placeholder="Input Kondisi disini!" required>
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
     
      <div class="footer">
        <p>© 2020 Copyright: Simalab Kelompok 6 PPW</p>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>