<?php session_start();
include "koneksi.php";
$query=mysql_query("select * from db_sddiy where AKREDITASI='-' order by ALAMAT");
$jumlah=mysql_num_rows($query);
echo "<br><br>";
echo "Jumlah data ada : ".$jumlah;
?>
<style>
    table {
                border-collapse: collapse;
                    }
                tr:nth-child(even){background-color: #f2f2f2}
                th {
                    background-color: #56BFCC;
                    color: white;
                }
</style>
<table align="center" width="90%">
<h2 align="center">Data SD Wilayah DIY Tak Terakreditasi </h2>
<tr bgcolor="#56BFCC">
    <th>NPSN</th>
	<th>NAMA SP</th>
	<th>ALAMAT</th>
    <th>JENJANG</th>
</tr>
<?php
?>


<?php
while ($row=mysql_fetch_array($query)) {
?>
<tr>
        <td align="center" width="100px"><?php echo $row['NPSN'];?></td>
        <td><?php echo $row['NAMASP'];?></td>
        <td align="left"><?php echo $row['ALAMAT'];?></td>
        <td align="center"><?php echo $row['JENJANG'];?></td>
</tr>
<?php
    }
    ?>
    </table><br />
    <a href="logout.php">Logout</a>