<?php
include 'koneksi.php';

$nama=$_GET['nama'];
$komen=$_GET['komen'];

    $sql="insert into pesan(nama,pesan) values ('$nama','$komen')";
	$res=mysqli_query($kon,$sql);
	
	$data="select * from pesan";
	$nilai=mysqli_query($kon,$data);
	while($hasil=mysqli_fetch_array($nilai)){
		echo "<div style='background-color:magenta;padding:10px;'>$hasil[nama]</div>
		<div style='background-color:gray;padding:10px;margin-bottom:10px;'>$hasil[pesan]</div>
		";
	}
?>