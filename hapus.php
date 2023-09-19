<?php 
include "knk.php";

$id_siswa = $_GET["id_siswa"]; 

mysqli_query($koneksi, "delete from tb_siswa where id_siswa='$id_siswa'");//field yang kita panggil yaitu primary key akan menghapus semua

header("location:index.php");   
?>