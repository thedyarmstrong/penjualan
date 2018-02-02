<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut
}

include ('koneksi.php');

 $namapembeli=$_POST['namapembeli'];
 $no_hp=$_POST['no_hp'];
 $namabarang=$_POST['namabarang'];
 $panjang=$_POST['panjang'];
 $lebar=$_POST['lebar'];
 $ongkosjahit=$_POST['ongkosjahit'];
 $harga=$_POST['harga'];
 $total=$_POST['total'];



 //periksa apakah udah submit
 if (isset($_POST['submit']))
 {

     $insert=mysql_query("INSERT INTO penjualan(namapembeli,no_hp,namabarang,panjang,lebar,ongkosjahit,hargabarang,total)
       VALUES
       ('$namapembeli','$no_hp','$namabarang','$panjang','$lebar','$ongkosjahit','$harga','$total')");

     //jika sudah berhasil
     if ($insert)
     {
       echo "<script> document.location.href='penjualan.php'; </script>";
     }else{
       echo "GAGAL";
     }
   }

?>

<!DOCTYPE HTML>
<html>
<head>
<title>TSB application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>

<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">TSB Application</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-nav navbar-right">

			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/user.jpg"></a>

	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong><?php echo strtoupper($_SESSION['username']);?> (<?php echo ($_SESSION['level']);?>)</strong>
						</li>

						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
	        		</ul>
	      		</li>
			</ul>


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="active">
                            <a href="home.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="penjualan.php"><i class="fa fa-laptop nav_icon"></i>Penjualan</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Input Stock<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="stocktoko.php">Stock Toko</a>
                                </li>
                                <li>
                                    <a href="#">Stock Gudang</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Laporan Penjualan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Hari Ini</a>
                                </li>
                                <li>
                                    <a href="#">Pilih Tanggal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Data Pelanggan</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


<!-- wrapper -->
<div id="page-wrapper">

  <div class="graphs">
  <div class="xs">

     <h3>Penjualan</h3>

       <div class="tab-content">
      <div class="tab-pane active" id="horizontal-form">

        <form class="form-horizontal" action="penjualan.php" method="POST">

          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Nama Pelanggan :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control1" id="focusedinput" placeholder="" name="namapembeli">
            </div>
          </div>

          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Nomor Telp :</label>
            <div class="col-sm-4">
              <input type="number" class="form-control1" id="focusedinput" placeholder="08xxxxxxxxxx" name="no_hp">
            </div>
          </div>

          <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Jenis Barang </label>
            <div class="col-sm-8"><select name="namabarang" id="selector1" class="form-control1">

              <?php
              include "koneksi.php";

              $query = mysql_query("SELECT * FROM stocktoko ORDER BY nama_barang");
              $i=1;

              while($d = mysql_fetch_array($query)){?>

              <option><?php echo $d['nama_barang']; ?></option>

            <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="focusedinput" class="col-sm-2 control-label">Panjang :</label>
          <div class="col-sm-3">
            <input type="number" class="form-control1" id="focusedinput" placeholder="" name="panjang">
          </div>
          <div class="col-sm-2">
            <p class="help-block">satuan (Meter)</p>
          </div>
        </div>

        <div class="form-group">
          <label for="focusedinput" class="col-sm-2 control-label">Lebar :</label>
          <div class="col-sm-3">
            <input type="number" class="form-control1" id="focusedinput" placeholder="" name="lebar">
          </div>
          <div class="col-sm-2">
            <p class="help-block">satuan (Meter)</p>
          </div>
        </div>

        <div class="form-group">
          <label for="focusedinput" class="col-sm-2 control-label">Ongkos Jahit :</label>
          <div class="col-sm-4">
            <input type="number" class="form-control1" id="focusedinput1" placeholder="" name="ongkosjahit" onkeyup="sum();">
          </div>
        </div>

        <div class="form-group">
          <label for="focusedinput" class="col-sm-2 control-label">Harga Barang:</label>
          <div class="col-sm-4">
            <input type="number" class="form-control1" id="focusedinput2" placeholder="" name="harga" onkeyup="sum();">
          </div>
        </div>

        <div class="form-group">
          <label for="disabledinput" class="col-sm-2 control-label">Total :</label>
          <div class="col-sm-8">
            <input type="number" class="form-control1" id="disabledinput" name="total" readonly>
          </div>
        </div>



        <div class="form-group">
          <div class="col-sm-2">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          <button type="reset" class="btn btn-default">Reset</button>
        </div>
        </div>

       </form>

</div>
</div>

<div class="bs-example4" data-example-id="simple-responsive-table">
  <div class="table-responsive">
<table id="example" class="table table-hover table-striped table-bordered">
      <thead>
          <tr>
              <th>NO</th>
              <th>Tanggal dan Jam</th>
              <th>Nama Pembeli</th>
              <th>Nomor Telepon</th>
              <th>Jenis Barang</th>
              <th>Panjang</th>
              <th>Lebar</th>
              <th>Harga Barang</th>
              <th>Ongkos Jahit</th>
              <th>Total</th>
              <th>Print</th>
          </tr>
      </thead>

  <tbody>
    <?php
    include "koneksi.php";

    $query = mysql_query("SELECT * FROM penjualan WHERE tanggal >= CURRENT_DATE() ORDER BY noid DESC");
    $i=1;

    while($d = mysql_fetch_array($query)){?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $d['tanggal']; ?></td>
        <td><?php echo $d['namapembeli']; ?></td>
        <td><?php echo $d['no_hp']; ?></td>
        <td><?php echo $d['namabarang']; ?></td>
        <td><?php echo $d['panjang']; ?> Meter</td>
        <td><?php echo $d['lebar']; ?> Meter</td>
        <td>Rp. <?php echo $d['hargabarang']; ?></td>
        <td>Rp. <?php echo $d['ongkosjahit']; ?></td>
        <td>Rp. <?php echo $d['total']; ?></td>
        <td><a href="printpenjualan.php&id=<?php echo $d['noid'];?>"><span><i class="fas fa-print"></i></span> Print</a></td>
      </tr>
    <?php
    }
    ?>

  </tbody>
  <tfoot>
          <tr>
            <th>NO</th>
            <th>Tanggal dan Jam</th>
            <th>Nama Pembeli</th>
            <th>Nomor Telepon</th>
            <th>Jenis Barang</th>
            <th>Panjang</th>
            <th>Lebar</th>
            <th>Harga Barang</th>
            <th>Ongkos Jahit</th>
            <th>Total</th>
            <th>Print</th>
          </tr>
      </tfoot>
</table>
</div>
</div>




<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
  $('#example').DataTable( {
      initComplete: function () {
          this.api().columns().every( function () {
              var column = this;
              var select = $('<select><option value=""></option></select>')
                  .appendTo( $(column.footer()).empty() )
                  .on( 'change', function () {
                      var val = $.fn.dataTable.util.escapeRegex(
                          $(this).val()
                      );

                      column
                          .search( val ? '^'+val+'$' : '', true, false )
                          .draw();
                  } );

              column.data().unique().sort().each( function ( d, j ) {
                  select.append( '<option value="'+d+'">'+d+'</option>' )
              } );
          } );
      }
  } );
} );
</script>












</div>
<!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
function sum() {
      var txtFirstNumberValue = document.getElementById('focusedinput1').value;
      var txtSecondNumberValue = document.getElementById('focusedinput2').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('disabledinput').value = result;
      }
}
</script>
</body>
</html>
