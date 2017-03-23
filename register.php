<?php
include "koneksi.php";
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$hakakses=$_POST['hakakses'];
$alamat=$_POST['alamat'];
$jk=$_POST['jk'];
$email=$_POST['email'];
$pekerjaan=$_POST['pekerjaan'];
$status=$_POST['status'];
$nohp=$_POST['nohp'];

$query=mysql_query("INSERT INTO `tabelpengguna`(`nama`, `username`, `password`, `hakakses`, `alamat`, `jk`, `email`, `pekerjaan`, `status`, `nohp`) VALUES ('$nama', '$username', '$password', '$hakakses', '$alamat', '$jk', '$alamat', '$pekerjaan', '$status', '$nohp')");
$query2=mysql_query("INSERT INTO `admin`(`nama`, `username`, `password`) VALUES ('$nama', '$username', '$password') WHERE hakakses='$hakakses'='Admin'");
if($query){
	header ('location:dataregister.php');
}
else{
  echo "gagal hapus data";
  echo mysql_error();
}
?>