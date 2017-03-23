<?php
include 'koneksi.php';

$NO=$_POST['NO'];
$NPSN=$_POST['NPSN'];
$NAMASP=$_POST['NAMASP'];
$ALAMAT=$_POST['ALAMAT'];
$DESA=$_POST['DESA'];
$KECAMATAN=$_POST['KECAMATAN'];
$KABUPATEN=$_POST['KABUPATEN'];
$JENJANG=$_POST['JENJANG'];
$STATUS=$_POST['STATUS'];
$AKREDITASI=$_POST['AKREDITASI'];
$TELEPON=$_POST['TELEPON'];
$query=mysql_query("UPDATE db_sddiy set NPSN='$NPSN', NAMASP='$NAMASP', ALAMAT='$ALAMAT', DESA='$DESA', KECAMATAN='$KECAMATAN'
	,KABUPATEN='$KABUPATEN' , JENJANG='$JENJANG', STATUS='$STATUS', AKREDITASI='$AKREDITASI', TELEPON='$TELEPON' WHERE NO='$NO'");

if($query){
	header ('location:ubahalldatasekolah.php');
}
else{
  echo "gagal hapus data";
  echo mysql_error();
}
?>