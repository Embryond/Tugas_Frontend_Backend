   <?php
  //Koneksi Database
   $server = "localhost";
   $user = "root";
   $pass = "";
   $database = "dblatihan2";

   $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

   //jika tombol simpan di Click
   if(isset($_POST['bsimpan']))
   {
    $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (telepon, nama, alamat)
                      VALUES ('$_POST[tnama]', 
                          '$_POST[ttelepon]', 
                          '$_POST[talamat]')
                                   ");
    if($simpan) //jika simpan sukses
    {
      echo "<script>
          alert('Simpan data sukses!');
          document.location='pembeli.php';
      </script>";
    }
    else
    {
      echo "<script>
          alert('Simpan data Gagal!');
          document.location='pembeli.php';
      </script>";
    }
   }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.14.0-web/css/all.min.css">

    <title>Hello, world!</title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">Selamat Datang Admin | <b>Rental Mobil</b> </a>
     
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <div class="icon ml-4">
      <h5>
        <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
        <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
        <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i>
      </h5>
    </div>
  </div>
</nav>

<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
  <li class="nav-item">
    <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="pembeli.php"><i class="fas fa-shopping-cart mr-2"></i> Daftar Pembeli</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="penjual.php"><i class="fab fa-sellcast mr-2"></i> Daftar Penjual</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="jadwal.php"><i class="fas fa-calendar-alt mr-2"></i> Jadwal Kerja</a><hr class="bg-secondary">
  </li>
</ul>
    </div>
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-shopping-cart mr-2"></i> Daftar Pembeli</h3><hr>

      <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambahkan Daftar Pembeli</a>

   
  <!-- Awal Card Form -->
  <div class="card mt-3">
    <div class="card-header bg-primary text-white ">
      Form Pembeli
    </div>
    <div class="card-body">
     <form method="post" action="">
      <div class="fomr-group">
        <label>Telepon</label>
        <input type="text" name="ttelepon" class="form-control" placeholder="Input Nama anda disini!" required>
      </div>
      <div class="fomr-group">
        <label>Nama</label>
        <input type="text" name="tnama" class="form-control" placeholder="Input Telepon anda disini!" required>
      </div>
      <div class="fomr-group">
        <label>Alamat</label>
        <textarea class="form-control" name="talamat" placeholder="Input Alamat anda disini!"></textarea>
      </div>

      <button type="submit" class="btn btn-success mt-3" name="bsimpan">Simpan</button>
      <button type="reset" class="btn btn-danger mt-3" name="breset">Kosongkan</button>


     </form>
    </div>
  </div>
  <!-- Akhir Card Form -->

  <!-- Awal Card Tabel -->
  <div class="card mt-3">
    <div class="card-header bg-success text-white ">
      Daftar Pembeli
    </div>
    <div class="card-body">

      <table class="table table-bordered table-striped">
        <tr>
          <th>No.</th>
          <th>Telepon</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
        <?php
          $no = 1;
          $tampil = mysqli_query($koneksi, "SELECT * from tmhs order by id_mhs desc");
          while($data = mysqli_fetch_array($tampil)) :

        ?>
        <tr>
          <td><?=$no++;?></td>
          <td><?=$data['telepon']?></td>
          <td><?=$data['nama']?></td>
          <td><?=$data['alamat']?></td>
          <td>
            <a href="#" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a>

          </td>
        </tr>
      <?php endwhile; //penutup perulangan while ?>
      </table>

    </div>
  </div>
  <!-- Akhir Card Tabel -->
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

     
    </div>
</div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>