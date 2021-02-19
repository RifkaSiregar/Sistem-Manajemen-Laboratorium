<?php
// buka koneksi dengan MySQL
$konek = mysqli_connect("localhost", "p06_gnf2","lTwqObjBHN", "p06_db");

  //mengecek apakah di url ada GET id
  if (isset($_GET["ID"])) {

    // menyimpan variabel id dari url ke dalam variabel $id
    $ID = $_GET["ID"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM `update_data_inventaris` WHERE ID='$ID' ";
    $query1 = "DELETE FROM `data_informasi` WHERE ID='$ID' ";
    $hasil_query = mysqli_query($konek, $query);
    $hasil_query = mysqli_query($konek, $query1);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($konek).
           " - ".mysqli_error($konek));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:update_data.php");
?>