<?php
// memanggil file koneksi.php untuk melakukan koneksi database
$konek = mysqli_connect("localhost", "p06_gnf2","lTwqObjBHN", "p06_db");

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	  $ID = $_POST['ID'];
    $Nama_Inventaris = $_POST['Nama_Inventaris'];
    $Jumlah = $_POST['Jumlah'];
    $Kondisi = $_POST['Kondisi'];
    $Status = $_POST['Status'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO `update_data_inventaris` VALUES ('$ID', '$Nama_Inventaris','$Jumlah' ,'$Kondisi', '$Status')";
  $query1 = "INSERT INTO `data_informasi` VALUES ('$ID', '$Nama_Inventaris','$Jumlah' ,'$Kondisi', '$Status')"; 
  $result = mysqli_query($konek, $query);
  $result = mysqli_query($konek, $query1);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($konek).
           " - ".mysqli_error($konek));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:update_data.php");
?>