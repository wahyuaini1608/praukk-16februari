<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<center>
<body>
    <h2>DATA INVENTARIS</h2>
 <h2>ALAT DAN BAHAN LAB RPL</h2>
 <a href="index.php"><input type="button" value="Kembali"/></a>
 <a href="tambah.php"><input type="button" value="Tambah"/></a>
       <table border = "1">
        <tr>
            <th>NO</th>
            <th>Nama User</th>
            <th>Jabatan</th>
            <th>Nama Bahan</th>
            <th>Jenis Bahan</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Kondisi</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>

        <?php
        include("koneksi.php");
        $query = mysqli_query($koneksi, "SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan");
        $no = 1;
        foreach ($query as $row):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_user'];?></td>
            <td><?= $row['jabatan'];?></td>
            <td><?= $row['nama_bahan'];?></td>
            <td><?= $row['jenis_bahan'];?></td>
            <td><?= $row['stok'];?></td>
            <td><?= $row['harga'];?></td>
            <td><?= $row['kondisi'];?></td>
            <td><?= $row['tanggal_masuk'];?></td>
            <td>
                <a href="edit.php?id_user=<?= $row['id_user'];?>">Edit</a>||
                <a href="hapus.php?id_user=<?= $row['id_user'];?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
       </table>
</center>
</body>
</html>