<?php
include "koneksi.php";
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>User Log</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
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
              Daftar User Log 
          </div>
          <form class="form-inline" method="get">
				<div class="form-group">
					<select name="urut" class="form-control" onchange="form.submit()">
						<option value="">Filter</option>
						<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
						<option value="Laboran" <?php if($urut == 'Laboran'){ echo 'selected'; } ?>>Level Laboran</option>
						<option value="Koordinator" <?php if($urut == 'Koordinator'){ echo 'selected'; } ?>>Level Koordinator</option>
					</select>
				</div>
			</form>
			<br />
          <div class="card-body">
          <table id="datatableid" class="table table-bordered table-sm table-striped mt-3 text-center">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Lengkap </th>
            <th>Level</th>
            <th>Action</th>
            <th>Created_at</th>
            <th>Updated_at</th>
</tr>
</thead>

<?php
if($urut){
    $sql = mysqli_query($koneksi, "SELECT * FROM tuser WHERE level='$urut' ORDER BY id ASC");
}else{
    $sql = mysqli_query($koneksi, "SELECT * FROM tuser ORDER BY id ASC");
}
        $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * from user_log order by id desc");
            while($data = mysqli_fetch_array($tampil)) :
        ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['id']?></td>
                <td><?=$data['nama_lengkap']?></td>
                <td><?=$data['level']?></td>
                <td><?=$data['action']?></td>
                <td><?=$data['created_at']?></td>
                <td><?=$data['updated_at']?></td>
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
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#datatableid').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Your Data",
        }
    });

} );
    </script>
    
</body>
</html>
