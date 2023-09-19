<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Data Siswa</title>
</head>
<body>
    <div class="content">
        <div>
            <h1>Data Siswa</h1>
            <a href="create.php">
                <h3>Tambah Data</h3>
            </a>
            <!-- Navigasi -->
            <div><h5 class="text-center"><b>TABEL DAFTAR BUKU</b></h5> <br><br>
          <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Nomor absen</th>
                <th>Nama Siswa</th>
                <th>Opsi</th>
              </tr>
          <?php
          include 'knk.php';      
          $no= 1;                     
          $data= mysqli_query($koneksi,"SELECT * FROM tb_siswa"); 
          while($d = mysqli_fetch_array($data)){                   
          ?>
              <tr>
                  <td><?php echo $no++; ?> </td>
                  <td><?php echo $d['no_absen']; ?></td>
                  <td><?php echo $d['nama']; ?> </td>
                  <td><a href="#">isi</a></td>
                  <td>  
                      <a href="edit.php?id_siswa=<?php echo $d['id_siswa']; ?>"></a>        
                      <a href="hapus.php?id_siswa=<?php echo $d['id_siswa']; ?>"></a>
                  </td>
              </tr>
                  <?php    
                     }  
                  ?>
          </table>
        </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy;2023 Hak Cipta Dilindungi</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>