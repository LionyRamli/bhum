<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Raport Siswa</title>

   
</head>
<body>
       
    </div>
    <div class="container">
        <!-- Konten Anda -->
        <h2 class="text-center"><b>RAPORT SISWA</b></h3>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Nomor Absen</th>
                <th>Nama Siswa</th>
                <th>Isi Nilai</th>
                <th>Opsi</th>
            </tr>
            <?php
            include 'knk.php';      
            $no = 1;                     
            $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa"); 
            while($d = mysqli_fetch_array($data)){                   
            ?>
                <tr>
                    <td><?php echo $no++; ?> </td>
                    <td><?php echo $d['no_absen']; ?></td>
                    <td><?php echo $d['nama']; ?> </td>
                    <td><a href="#" class="btn btn-primary">Isi</a></td>
                    <td>  
                        <a href="edit.php?id_siswa=<?php echo $d['id_siswa']; ?> " class="btn btn-primary">Edit</a>        
                        <a href="hapus.php?id_siswa=<?php echo $d['id_siswa']; ?>" class="btn btn-danger">Hapus</a>
                        <a href="detail.php?id_siswa=<?php echo $d['id_siswa']; ?>" class="btn btn-warning">Detail</a>
                    </td>
                </tr>
            <?php    
                }  
            ?>
        </table>
              </tr>
              hksgdhds
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
                      <a href="edit.php?id_siswa=<?php echo $d['id_siswa']; ?>">Edit</a>        
                      <a href="hapus.php?id_siswa=<?php echo $d['id_siswa']; ?>">Hapus</a>
                      <a href="detail.php?id_siswa=<?php echo $d['id_siswa']; ?>">Detail</a>
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
    <h1>hallo</h1>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
