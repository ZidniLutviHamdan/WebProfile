<?php session_start();
include "koneksi.php";
$query2=mysql_query("select * from db_sddiy where AKREDITASI='A'");
$jumlah=mysql_num_rows($query2);
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
    <th>AKSI</th>
</tr>
<?php
?>


<?php
while ($row=mysql_fetch_array($query2)) {
?>
<tr>
        <td><?php echo $row['NAMASP'];?></td>
        <td align="left"><?php echo $row['ALAMAT'];?></td>
        <td>
        <a href="delete2.php?NAMASP=<?php echo $row['NAMASP']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
            <a href="update2.php? NO=<?php echo $row['NO']; ?>">Update</a>
        </td>
</tr>
<?php
    }
    ?>
    </table><br />
    <a href="logout.php">Logout</a>