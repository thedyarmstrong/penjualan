<?php

include "koneksi.php";
$id=$_GET['id'];

$del=mysql_query("SELECT * FROM `penjualan` WHERE noid='$id'");

	if ($del){
	echo "<script> alert ('Data telah dihapus'); </script>";
	echo "<meta http-equiv='refresh' content='0; url=home.php'>";
	}else{
	echo "<script> alert ('Data gagal dihapus'); </script>";
	echo "<meta http-equiv='refresh' content='0; url=home.php'>";
	}




?>
