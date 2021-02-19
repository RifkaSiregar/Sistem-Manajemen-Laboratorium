<?php

$konek = mysqli_connect("localhost", "p06_gnf2","lTwqObjBHN", "p06_db") or die("error connecting");



$nama = $_SESSION['username'];
$this_page = $_SERVER["PHP_SELF"];
$IP = $_SERVER["REMOTE_ADDR"];
$data_auto = date("Y/m/d H:i:s");

$query = "INSERT into tracker (nama, page, IP, date_auto) VALUES ('$nama','$this_page', '$IP', '$data_auto')";
$result = mysqli_query($konek,$query);

$query = "SELECT count(*) from tracker where page ='$this_page'";
$result = mysqli_query($konek, $query);

?>