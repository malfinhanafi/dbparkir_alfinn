<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <center>
    <style>
        body{
            background-color: bisque;
            
        }
        </style>
<h1>Tempat parkir</h1>
<a href="datakendaraan.php">Tempat parkir</a>
    <table border='1'>
        <tr>
            <th>No.</th>
            <th>ID tempat</th>
            <th>Nama tempat</th>
            <th>harga</th>
            <th>Aksi</th>
</tr>
<?php 
        include '../../config/koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM  tempat_parkir");
        $no=1;
        if(mysqli_num_rows($query)){
            while($result=mysqli_fetch_assoc($query)){
            ?>
             <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $result['id_tempat'] ?></td>
                <td><?php echo $result['nama_tempat'] ?></td>
                <td><?php echo $result['harga'] ?></td>
                
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
    </table></center>
</body>
</html>