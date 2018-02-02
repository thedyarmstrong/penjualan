<?php
error_reporting(0);

session_start();
include "koneksi.php";
$username= $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $sql = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");

        if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
            $qry = mysql_fetch_array($sql);
            $_SESSION['username'] = $qry['username'];
            $_SESSION['level'] = $qry['level'];

                if($qry){
                    header("location:home.php");

                }

                }else{
                ?>
<script language="JavaScript">
    alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
    document.location='index.php';
</script>
<?php
}
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['level']);

    header("location:index.php");
}

?>
