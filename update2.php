<?php
include "koneksi.php";
$NO=$_GET['NO'];
$query=mysql_query("SELECT * FROM db_sddiy WHERE NO='$NO'");
?>
<form action="simpan2.php" method="post">
<table border="1">
<?php
while ($row = mysql_fetch_array($query)) {
  ?>
  <input type="hidden" name="NO" value="<?php echo $NO;?>"/>
  <tr>
  <td>NPSN</td>
  <td><input type="text" name="NPSN"><?php echo $row['NPSN'];?><td>
  </tr>
  <tr>
      <td>NAMA SP</td>
      <td><input type="text" name="NAMASP"><?php echo $row['NAMASP'];?><td>
  </tr>
  <tr>
      <td>Alamat</td>
      <td><input type="text" cols="20" rows="5" name="ALAMAT"><?php echo $row['ALAMAT'];?></textarea></td>
  </tr>
  <tr>
      <td>JENJANG</td>
      <td><input type="text" name="JENJANG"><?php echo $row['JENJANG'];?><td>
  </tr>
  <tr><td><input type="submit" value="Simpan" name="simpan" /></td>
  </tr>
  <?php
}
?>
</table>
</form>