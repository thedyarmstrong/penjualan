<?php
error_reporting(0);
 include ('koneksi.php');

  $namabarang=$_POST['namabarang'];
  $panjang=$_POST['panjang'];
  $lebar=$_POST['lebar'];



  //periksa apakah udah submit
  if (isset($_POST['submit']))
  {

      $insert=mysql_query("INSERT INTO stocktoko(nama_barang,panjang,lebar)
        VALUES
        ('$namabarang','$panjang','$lebar')");

      //jika sudah berhasil
      if ($insert)
      {
        echo "<script> document.location.href='stocktoko.php'; </script>";
      }else{
        echo "GAGAL";
      }
    }

?>
