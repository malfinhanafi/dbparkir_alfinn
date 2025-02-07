<?php

$id_tempat= $_POST['id_tempat'];
$nama_tempat= $_POST['nama_tempat'];
$harga = $_POST['harga'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO tempat_parkir Values('$id_tempat','$nama_tempatt','$harga')");

if($query){
    echo "<script>alert('Tambah Berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else {
    echo "<script>alert('Tambah Gagal')</script>";
    echo "<script>window.location.href='datakendaraan.php'</script>";
}