<?php

$host="localhost";
$user="root";
$pass="";
$db="penjualantsb";


$koneksi=mysql_connect($host,$user,$pass);
$database=mysql_select_db($db,$koneksi);
$tanggal=date('d-M-y');
/*
if ($koneksi)
{
	echo "berhasil : )";
}else{
	echo "Gagal !";
}
*/
?>
