<?php
include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
$query=mysql_query("select * from admin where username='$username' and password='$password'");
$queri=mysql_query("select * from user where username='$username' and password='$password'");


$cek=mysql_num_rows($query);
$cekk=mysql_num_rows($queri);


if($cek){
$_SESSION['username']=$username;
?>Anda berhasil login. silahkan menuju <a href="halpengubahdata.php">Halaman Pengubah Data</a><?php
}
elseif ($cekk) {
	$_SESSION['username']=$username;
	?>Anda berhasil login. silahkan menuju <a href="halamanuser.php">Lihat Data</a><?php
}
else{
?>Anda gagal login. silahkan <a href="form_admin.html">Login kembali</a>
<?php
echo mysql_error();
}
?>