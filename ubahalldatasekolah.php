<?php session_start();
include "koneksi.php";
$query=mysql_query("select * from db_sddiy");
$jumlah=mysql_num_rows($query);
echo "<br><br>";
echo "Data Semua Sekolah SD/MI Daerah Istimewa Yogyakarta";
echo "<br><br>";
echo "Jumlah data ada : ".$jumlah;
?>
<style>
    table {
                border-collapse: collapse;
                width: 100%;
                    }
                tr:nth-child(even){background-color: #f2f2f2}
                th {
                    background-color: #56BFCC;
                    color: white;
                }
</style>
<table width="100%">
<tr bgcolor="#56BFCC">
	<th>NO</th>
	<th>NPSN</th>
	<th>NAMA SP</th>
	<th>ALAMAT</th>
	<th>DESA</th>
    <th>KECAMATAN</th>
    <th>KABUPATEN</th>
    <th>JENJANG</th>
    <th>STATUS</th>
    <th>AKREDITASI</th>
    <th>TELEPON</th>
    <th>AKSI</th>
</tr>
<?php
?>


<?php
while ($row=mysql_fetch_array($query)) {
?>
<tr>
		<td align="center"><?php echo $row['NO'];?></td>
        <td align="center"><?php echo $row['NPSN'];?></td>
        <td><?php echo $row['NAMASP'];?></td>
        <td align="left"><?php echo $row['ALAMAT'];?></td>
        <td><?php echo $row['DESA'];?></td>
        <td><?php echo $row['KECAMATAN'];?></td>
        <td align="center"><?php echo $row['KABUPATEN'];?></td>
        <td align="center"><?php echo $row['JENJANG'];?></td>
        <td align="center"><?php echo $row['STATUS'];?></td>
        <td align="center"><?php echo $row['AKREDITASI'];?></td>
        <td><?php echo $row['TELEPON'];?></td>
        <td>
        <a href="delete.php?NO=<?php echo $row['NO']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
            <a href="update.php? NO=<?php echo $row['NO']; ?>">Update</a>
        </td>
</tr>
<?php
    }
    ?>
    </table><br />
    <a href="logout.php">Logout</a>