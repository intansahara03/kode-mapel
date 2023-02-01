<?php
include("koneksi.php");
if(!isset($_GET['id_guru'])){
    header("Location:lihat-data.php?");
}
   $id=$_GET['id_guru'];
   $sql="SELECT * FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel"; 
   $query = mysqli_query($koneksi,$sql);
   $mapel = mysqli_fetch_assoc($query); 

?>     
<html>
    <head>
    </head>
    <body>
        <h1>Form Edit Guru</h1>
        <form action="proses-edit.php" method="POST">
        <a href="lihat-data.php"><input type="button" value="kembali"></a>
            <fieldset>
                <input type="hidden" name="id_guru" value="<?php echo $mapel['id_guru']?>" />
                <p>
                    <label for="nama_guru">Nama Guru :</label>
                    <input type="text" name="nama_guru" value="<?php echo $mapel['nama_guru']?>" />
                </p>
                <p>
                <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" value="<?php echo $mapel['alamat']?>" />
                </p>
                <p>
                    <label for="jenis_kelamin">jenis kelamin :</label>
                    <input type="radio" name="jenis_kelamin" value="laki-laki" value="<?php echo $mapel['jenis_kelamin']?>" />Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="perempuan" value="<?php echo $mapel['jenis_kelamin']?>" />Perempuan
                </p>
                <p>
                    <label for="kode_mapel">Kode Mapel:</label>
                    <input type="text" name="kode_mapel"  value="<?php echo $mapel['kode_mapel']?>" /> 
                </p>
                <p>
                    <label for="ruangan">Ruangan:</label>
                    <input type="number" name="ruangan"  value="<?php echo $mapel['ruangan']?>" />
                </p>
                <p>
                    <input type="submit" value="edit" name="edit" />
                </P>
</fieldset>
</form>
</body>
</html>