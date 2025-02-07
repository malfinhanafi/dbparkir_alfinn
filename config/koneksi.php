<?php

$conn = mysqli_connect('localhost','root','','dbparkir_alfinnnn');

if(!$conn){
    die("Koneksi Gagal".mysqli_connect_error());
}