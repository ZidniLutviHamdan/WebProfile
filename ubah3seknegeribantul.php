<?php session_start();
include "koneksi.php";
$query=mysql_query("select * from db_sddiy where KABUPATEN='1' and JENJANG='SD'");
$jumlah=mysql_num_rows($query);
echo "<br><br>";
echo "Jumlah data ada : ".$jumlah;
?>
<style>
    table {
                border-collapse: collapse;
                border-bottom: 1px solid #ddd;
                width: 90%;
                    }
                tr:nth-child(even){
                    background-color: #FFFB91;
                }
                th {
                    background-color: #56BFCC;
                    color: white;
                }
</style>
<table align="center" width="90%">
<h2 align="center" style="border-bottom: 3px solid #ddd" >Data SD Jenjang Negeri Wilayah Bantul</h2>
<tr bgcolor="#56BFCC">
	<th>NPSN</th>
	<th>NAMA SP</th>
	<th>ALAMAT</th>
    <th>JENJANG</th>
    <th>AKSI</th>
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
        <td>
        <a href="delete3.php?NAMASP=<?php echo $row['NAMASP']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
            <a href="update3.php? NO=<?php echo $row['NO']; ?>">Update</a>
        </td>
</tr>
<?php
    }
    ?>
    </table><br />
    <a href="logout.php">Logout</a>