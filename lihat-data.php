<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
<h1>Mapel SMKN 1 SAYUNG</h1>
<h4> <a href=tambah.php>Tambah Siswa</a></h4>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama guru</th>
        <th>Alamat</th>
        <th>Jenis kelamin</th>
        <th>Nama Mapel</th>
        <th>Ruangan</th>
        <th>Aksi</th>
</tr>

<?php
     include("koneksi.php");
     $sql="SELECT * FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel";
     $query = mysqli_query($koneksi, $sql);

     while($mapel=mysqli_fetch_array($query)){
    
    echo "<tr>";
          echo "<td>".$mapel['id_guru']."</td>";
          echo "<td>".$mapel['nama_guru']."</td>";
          echo "<td>".$mapel['alamat']."</td>";
          echo "<td>".$mapel['jenis_kelamin']."</td>";
          echo "<td>".$mapel['nama_mapel']."</td>";
          echo "<td>".$mapel['ruangan']."</td>";
          echo "<td>";
          echo "<a href='edit.php?id_guru=".$mapel['id_guru']."'>Edit</a> |";
          echo "<a href='hapus.php?id_guru=".$mapel['id_guru']."'>Hapus</a> |";
          echo "</td>";
          echo '</tr>';


     }
     ?>
     </table>
    </body>
    </html>