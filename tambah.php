<html>
    <head>
    </head>
    <body>
        <h1>Form Tambah </h1>
        <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_guru">Nama Guru :</label>
                    <input type="text" name="nama_guru" />
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" />
                </p>
                <p>
                    <label for="jenis_kelamin">jenis kelamin :</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" />Laki-Laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" />Perempuan</label>
                </p>
                <p>
                    <label for="nama_mapel">Nama Mapel :</label>
                    <input type="text" name="nama_mapel" />
                </p>
                <p>
                    <label for="ruangan">Ruangan :</label>
                    <input type="number" name="ruangan" />
                </p>
                <p>
                    <input type="submit" value="tambah" name="tambah" />
                </P>
</fieldset>
</form>
</body>
</html>