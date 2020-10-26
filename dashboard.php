<!doctype html>
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
      <a class="navbar-brand" href="#">Selamat Datang Admin | <b>Toko Sepatu</b> </a>
     
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
      <h3><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h3><hr>

      <div class="row text-white">
          <div class="card bg-info ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-shopping-cart mr-2"></i>
              </div>
              <h5 class="card-title">Pembeli Perminggu</h5>
              <div class="display-4">100-150</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-right ml-2"></i></p></a>
            </div>
        </div>
         <div class="card bg-success ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-sellcast mr-2"></i>
              </div>
              <h5 class="card-title">Penjual Perminggu</h5>
              <div class="display-4">50-100</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-right ml-2"></i></p></a>
            </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="card ml-3 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-danger display-4 pt-4 pb-4">
              <i class="fab fa-instagram"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-danger">Instagram</h5>
              <a href="#" class="btn btn-danger">Follow</a>
            </div>
          </div>
           <div class="card ml-3 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-info display-4 pt-4 pb-4">
              <i class="fab fa-facebook-f"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-info">Facebook</h5>
              <a href="#" class="btn btn-info">Likes</a>
            </div>
          </div>
           <div class="card ml-3 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-primary display-4 pt-4 pb-4">
              <i class="fab fa-twitter"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-primary">Twiter</h5>
              <a href="#" class="btn btn-primary">Follow</a>
            </div>
          </div>
      </div>
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