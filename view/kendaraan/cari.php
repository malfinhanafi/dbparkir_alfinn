<?php

$plat_no = $_POST['plat_no'];
$id_tempat = $_POST['id_tempat'];
$waktu_masuk = $_POST['waktu_masuk'];
$type_kendaraan = $_POST['type_kendaraan'];
$nama_pemilik = $_POST['nama_pemilik'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO kendaraan Values('$plat_no','$id_tempat','$waktu_masuk',
'$type_kendaraan','$nama_pemilik')");

if($query){
    echo "<script>alert('Tambah Berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else {
    echo "<script>alert('Tambah Gagal')</script>";
    echo "<script>window.location.href='carikendaraan.php'</script>";
}