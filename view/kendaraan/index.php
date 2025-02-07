<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <style>
        body{
            background-color: bisque;
            
        }

    </style>
<h1>Data Kendaraan</h1>
<a href="kendaraanbaru.php">Cari Kendaraan baru</a>
    <table border='1'>
        <tr>
            <th>No.</th>
            <th>Plat No</th>
            <th>ID tempat</th>
            <th>Waktu masuk</th>
            <th>Type kendaraan</th>
            <th>Aksi</th>
</tr>
<?php 
        include '../../config/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM  kendaraan");
        $no=1;
        if(mysqli_num_rows($query)){
            while($result=mysqli_fetch_assoc($query)){
            ?>
             <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $result['plat_no'] ?></td>
                <td><?php echo $result['id_tempat'] ?></td>
                <td><?php echo $result['waktu_masuk'] ?></td>
                <td><?php echo $result['type_kendaraan'] ?></td>
                
                <td>
                    <a href="">Edit |</a>
                    <a href="">Hapus </a>
                </td>
            </tr>
            <?php
            $no++;}
        }
        else{
            echo "Data Kurang";
        }
        ?>
    </table>
    </center>
</body>
</html>