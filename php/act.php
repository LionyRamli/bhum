<?php
include 'knk.php';

    $id = $_POST["id_siswa"];
    $nik =$_POST["nik"];
    $nama = $_POST["nama_siswa"];
    $kelas = $_POST["kelas"];
    $kategori = $_POST["kategori_penilaian"];
    $nilai = $_POST["nilai"];

    $redirectUrl = "";
    switch ($kategori) {
        case "Site 1":
            $redirectUrl = "site1.php";
            break;
        case "Site 2":
            $redirectUrl = "site2.php";
            break;
        case "Site 3":
            $redirectUrl = "site3.php";
            break;
        case "Site 4":
            $redirectUrl = "site4.php";
            break;
        default:
            $redirectUrl = "bis.php"; 
    }

    mysqli_query($koneksi,"INSERT into co values('$id','$nama','$kelas','$kategori','$nilai')");

    header("Location: $redirectUrl");
?>
