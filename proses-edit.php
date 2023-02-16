<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id=$_POST['id_user'];
    $nama_user=$_POST['nama_user'];
    $jabatan=$_POST['jabatan'];
    $nama_bahan=$_POST['nama_bahan'];
    $jenis_bahan=$_POST['jenis_bahan'];
    $stok=$_POST['stok'];
    $harga=$_POST['harga'];
    $kondisi=$_POST['kondisi'];
    $tanggal_masuk=$_POST['tanggal_masuk'];  

    $sql = "UPDATE tb_user SET nama_user='$nama_user',jabatan='$jabatan' 
    WHERE id_user='$id'";
    $query = mysqli_query($koneksi, $sql);

    $sql = "UPDATE tb_bahan SET nama_bahan='$nama_bahan',jenis_bahan='$jenis_bahan'
    ,stok='$stok',harga='$harga',kondisi='$kondisi',tanggal_masuk='$tanggal_masuk' 
    WHERE id_bahan='$id'";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php?status=SUKSES');
    }else {
        header('location:tampil.php?status=GAGAL');
    }
    }
?>