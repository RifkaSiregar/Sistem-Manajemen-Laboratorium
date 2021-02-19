<?php  
//export.php  
$konek = mysqli_connect("localhost", "p06_gnf2","lTwqObjBHN", "p06_db");
include 'koneksi.php';
$output = '';
if(isset($_POST["export"]))
{
$no = 1;   
 $query = "SELECT * FROM data_informasi";
 $data = mysqli_query($koneksi, $query);
 if(mysqli_num_rows($data) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>NO</th>
                    <th>ID</th>
                    <th>Nama Inventaris</th>
                    <th>Jumlah</th>
                    <th>Kondisi</th>
                    <th>Status</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($data))
  {
   $output .= '
                    <tr>  
                        <td>'.$no.'</td>  
                        <td>'.$row["ID"].'</td>  
                         <td>'.$row["Nama_inventaris"].'</td>  
                         <td>'.$row["Jumlah"].'</td>  
                         <td>'.$row["Kondisi"].'</td>  
                         <td>'.$row["Status"].'</td>
                    </tr>';
                    $no++;
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Data Informasi.xls');
  echo $output;
 }
}
?>
