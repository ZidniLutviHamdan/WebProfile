<?php
//membuat koneksi ke database
  $host = "localhost";
  $user = "root";      
  $password = "";      
  $database = "data1";  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database);


?>

<center> 
MENAMPILKAN DATA LOLOS SELEKSI SNMPTN IPB TAHUN 2016
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border="1" Width="800" class="odd"> 
<!-- Colgroup -->
     <colgroup>
        <col class="vzebra-odd"> 
        <col class="vzebra-even">
        <col class="vzebra-odd">
        <col class="vzebra-even">
     </colgroup> 
<tr>
    <th bgcolor="#7F6C31"> NIM </th>
    <th bgcolor="#7F6C31"> NAMA </th>
    <th bgcolor="#7F6C31"> NOPEND </th>
    
</tr>

<?php
  // Perintah untuk menampilkan data
  $queri= "select * from datamhssnmptnipb2016 "  ;  //menampikan SEMUA data dari tabel siswa
  $hasil=mysql_query ($queri);    //fungsi untuk SQL

if ($hasil === FALSE){
  die(mysql_error());
}

while ($row = mysql_fetch_array($hasil))
  {echo "
       <tr>
        <td>".$row['NIM']."</td>
        <td>".$row['NAMA']."</td>
        <td>".$row['NOPEND']."</td>
    </tr>";
    }
    ?>
    </table>
