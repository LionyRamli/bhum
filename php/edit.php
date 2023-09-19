<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Data Siswa</h2></center>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>EDIT DATA SISWA</h3>

    <?php
     include "knk.php";
     $id_siswa = $_GET['id_siswa'];
     $data = mysqli_query($koneksi, "select * from tb_siswa where id_siswa='$id_siswa'"); 
     while($d = mysqli_fetch_array($data)){
         ?>
         <form method="post" action="update.php">
             <table>
                 <tr>
                        <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">
                 </tr>
                 <tr>
                     <td>No Absen</td>
                     <td><input type="number" name="no_absen" value="<?php echo $d['no_absen']; ?>"></td>
                 </tr>
                 <tr>
                     <td>Nama</td>
                     <td>
                         <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                     </td>
                 </tr>
                 <tr>
                     <td>Kelas</td>
                     <td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
                 </tr>
                 <tr>
                     <td>Jenis Kelamin</td>
                     <td><input type="type" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
                 </tr>
                 <tr>
                     <td></td>
                     <td><input type="submit" value="SIMPAN"></td>
                 </tr>
             </table>
         </form>
    <?php 
    } 
    ?>

</body>
</html>