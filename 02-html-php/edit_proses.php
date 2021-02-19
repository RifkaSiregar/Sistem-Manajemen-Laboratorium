<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  $konek = mysqli_connect("localhost", "p06_gnf2","lTwqObjBHN", "p06_db");

  // membuat variabel untuk menampung data dari form edit
    $ID = $_POST['ID'];
    $Nama_Inventaris= $_POST['Nama_Inventaris'];
    $Jumlah = $_POST['Jumlah'];
    $Kondisi	= $_POST['Kondisi'];
    $Status = $_POST['Status'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE `update_data_inventaris` SET ID = '$ID', `Nama Inventaris` = '$Nama_Inventaris',Jumlah = '$Jumlah', Kondisi='$Kondisi', Status = '$Status' WHERE ID = '$ID'";
  $query1  = "UPDATE `data_informasi` SET ID = '$ID', `Nama Inventaris` = '$Nama_Inventaris',Jumlah = '$Jumlah', Kondisi='$Kondisi', Status = '$Status' WHERE ID = '$ID'";
  $result = mysqli_query($konek, $query);
  $result = mysqli_query($konek, $query1);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($konek).
       " - ".mysqli_error($konek));
  }
}

//lakukan redirect ke halaman index.php
header("location:update_data.php");

?>