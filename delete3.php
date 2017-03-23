<?php
include "koneksi.php";
$NAMASP=$_GET['NAMASP'];
$query = mysql_query("DELETE FROM db_sddiy WHERE NAMASP='$NAMASP'");
if ($query)
{
	header("location:ubah3seknegeribantul.php");
}
else
{
	echo "gagal hapus";
}
?>