<?php
include "koneksi.php";
$NO=$_GET['NO'];
$query = mysql_query("DELETE FROM db_sddiy WHERE NO='$NO'");
if ($query) {
	header("location:ubahalldatasekolah.php");
}
else {
	echo "gagal hapus";
}
?>