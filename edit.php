<?php
include("koneksi.php");
if(!isset($_GET['id_user'])){
    header('location:tampil.php?');
}
$id = $_GET['id_user'];
$sql = "SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan 
        WHERE tb_user.id_user";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc ($query);
if(mysqli_num_rows($query) < 1){
    die("DATA TIDAK DITEMUKAN");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<center>
<body>
    <h2>Form Edit</h2>
    <form action="proses-edit.php" method="POST">
    <a href="tampil.php"><input type="button" value="Kembali"/></a>

    <p>
        <input type="hidden" name="id_user" value="<?php echo $row['id_user']?>"/>
    </p>
    <p>
        <label for="nama_user">Nama User :</label>
        <input type="text" name="nama_user" value="<?php echo $row['nama_user']?>"/>
    </p>
    <p>
        <label for="jabatan">Jabatan :</label>
        <input type="text" name="jabatan" value="<?php echo $row['jabatan']?>"/>
    </p>
    <p>
        <label for="nama_bahan">Nama Bahan :</label>
        <input type="text" name="nama_bahan" value="<?php echo $row['nama_bahan']?>"/>
    </p>
    <p>
        <label for="jenis_bahan">Jenis Bahan :</label>
        <input type="text" name="jenis_bahan" value="<?php echo $row['jenis_bahan']?>"/>
    </p>
    <p>
        <label for="stok">Stok :</label>
        <input type="number" name="stok" value="<?php echo $row['stok']?>"/>
    </p>
    <p>
        <label for="harga">Harga :</label>
        <input type="number" name="harga" value="<?php echo $row['harga']?>"/>
    </p>
    <p>
        <label for="kondisi">Kondisi :</label>
        <label><input type="radio" name="kondisi" value="baik" value="<?php echo $row['kondisi']?>"/>baik</label>
        <label><input type="radio" name="kondisi" value="rusak" value="<?php echo $row['kondisi']?>"/>rusak</label>
    </p>
    <p>
        <label for="tanggal_masuk">Tanggal Masuk :</label>
        <input type="date" name="tanggal_masuk" value="<?php echo $row['tanggal_masuk']?>"/>
    </p>
    <p>
        <input type="submit" value="Edit" name="edit"/>
    </p>
    </form>
</body>
</center>
</html>