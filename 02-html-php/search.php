<?php 
// isi nama host, username mysql, dan password mysql anda
$konek = mysqli_connect("localhost","p06_gnf2","lTwqObjBHN");

// isikan dengan nama database yang akan di hubungkan
$data = mysqli_select_db($konek, "p06_db"); 
?>
 
<h3>SISTEM INFORMASI LABORATORIUM KOMPUTER</h3>
 

<form action="search.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th> 
        <th>ID</th> 
        <th>Nama Investaris</th> 
        <th>Kondisi</th> 
        <th>Jumlah</th>
	</tr>
	<?php 
	$database;
	
	
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($konek, "SELECT * FROM `search` WHERE `Nama Inventaris` like '%".$cari."%'");				

	}else{
		$data = mysqli_query($konek, "SELECT * FROM `search`");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['ID']; ?></td>
		<td><?php echo $d['Nama Inventaris']; ?></td>
		<td><?php echo $d['Kondisi']; ?></td>
		<td><?php echo $d['Jumlah']; ?></td>
		
	</tr>
	<?php } ?>
</table>