<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<center>
<body>
    <form action="proses-tambah.php" method="POST">
    <h2>Form Tambah</h2>
    <a href="tampil.php"><input type="button" value="Kembali"/></a>

    <p>
        <label for="nama_user">Nama User :</label>
        <input type="text" name="nama_user"/>
    </p>
    <p>
        <label for="jabatan">Jabatan :</label>
        <input type="text" name="jabatan"/>
    </p>
    <p>
        <label for="nama_bahan">Nama Bahan :</label>
        <input type="text" name="nama_bahan"/>
    </p>
    <p>
        <label for="jenis_bahan">Jenis Bahan :</label>
        <input type="text" name="jenis_bahan"/>
    </p>
    <p>
        <label for="stok">Stok :</label>
        <input type="number" name="stok"/>
    </p>
    <p>
        <label for="harga">Harga :</label>
        <input type="number" name="harga"/>
    </p>
    <p>
        <label for="kondisi">Kondisi :</label>
        <input type="radio" name="kondisi" value="baik"/>baik</label>
        <input type="radio" name="kondisi" value="rusak"/>rusak</label>
    </p>
    <p>
        <label for="tanggal_masuk">Tanggal Masuk :</label>
        <input type="date" name="tanggal_masuk"/>
    </p>
    <p>
        <input type="submit" value="Tambah" name="tambah"/>
    </p>
    </form>
</body>
</center>
</html>