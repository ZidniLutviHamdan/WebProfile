<?php
include 'koneksi.php';

$NPSN=$_POST['NPSN'];
$NAMASP=$_POST['NAMASP'];
$ALAMAT=$_POST['ALAMAT'];
$JENJANG=$_POST['JENJANG'];
$query=mysql_query("UPDATE db_sddiy set NPSN='$NPSN', NAMASP='$NAMASP', ALAMAT='$ALAMAT', DESA='$DESA', JENJANG='$JENJANG' WHERE NAMASP='$NAMASP'");
if($query){
	header ('location:ubah3seknegeribantul.php');
}
else{
  echo "gagal hapus data";
  echo mysql_error();
}
?>