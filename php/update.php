<?php
include 'knk.php';

$id_siswa = $_POST['id_siswa'];
$no_absen = $_POST['no_absen'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi, "update tb_siswa set no_absen='$no_absen', nama='$nama', kelas='$kelas', jenis_kelamin='$jenis_kelamin' where id_siswa='$id_siswa'");

header("location:index.php");
?>