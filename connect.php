<?php
$server = "localhost";
$user = "root";
$pass ="";
$database= "siswa";
$koneksi = new mysqli($server, $user, $pass, $database);

if ($koneksi->connect_error) {
    die("Ah Cupu mu".$koneksi->connect_error);
}
?>