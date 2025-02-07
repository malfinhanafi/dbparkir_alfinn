<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Kendaraan baru</title>
</head>
<body><center>
    <style>
        body{
        
            font: normal 16px/normal "Times New Roman", Times, serif;
          background-color: burlywood;
        }

        .tombol {
            display: inline-block;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            cursor: pointer;
            padding: 10px 20px 10px 21px;
            border: 1px solid #018dc4;
         -webkit-border-radius: 3px;
            border-radius: 3px;
            font: normal 16px/normal "Times New Roman", Times, serif;
            color: rgba(255,255,255,0.9);
                 -o-text-overflow: clip;
         text-overflow: clip;
            background: #0199d9;
         -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
           box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
            text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
             -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
             -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
             -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
             transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
         
        }
            

    </style>

    <h1>List kendaraan baru</h1>
    <form action="cari.php" method="post">
        <label for="">Plat No</label>
        <input type="text" name="plat_no"><br>
        <label for="">ID tempat</label>
        <input type="number" name="id_tempat"><br>
        <label for="">Waktu masuk</label>
        <input type="text" name="waktu_masuk"><br>
        <label for="">Type kendaraan</label>
        <input type="text" name="type_kendaraan"><br>
        <label for="">Nama pemilik</label>
        <input type="text" name="nama_pemilik"><br>
        <button type="submit" class="tombol" >SIMPAN</button>  
    </form>
    </center>
</body>
</html>