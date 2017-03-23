<?php session_start();
include "koneksi.php";
$query=mysql_query("select * from db_sddiy where AKREDITASI='A'");
$jumlah=mysql_num_rows($query);
echo "<br><br>";
echo "Data Semua Sekolah SD/MI Daerah Istimewa Yogyakarta Terakreditasi A";
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
<table width="90%">
<tr bgcolor="#56BFCC">
	<th>NAMA SP</th>
	<th>ALAMAT</th>
</tr>
<?php
?>


<?php
while ($row=mysql_fetch_array($query)) {
?>
<tr>
        <td><?php echo $row['NAMASP'];?></td>
        <td align="left"><?php echo $row['ALAMAT'];?></td>
</tr>
<?php
    }
    ?>
    </table><br />
    <a href="logout.php">Logout</a>