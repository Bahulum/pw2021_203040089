<?php
require 'php/functions.php';

$sembako = query("SELECT * FROM sembako")
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>My Store</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark p-2">
    <div class="container-fluid">
      <a class="navbar-brand fs-md-5 fw-bold" href="#">ULUM Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="php/admin.php">Halaman Admin</a>
          <a class="nav-link" href="#portofolio">Barang</a>
          <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contact Us</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- carousel -->
  <div id="carouselExampleDark" class="carousel carousel-fade slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/img/carousel/rsz_store1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption text-center">
          <div class="container teks">
            <h1 class="display-4">EXPLORE YOUR SELF WITH <br> <span class="fw-bold">ULUM STORE</span></h1>
            <hr class="my-4">
            <p>Berbelanja dengan nyaman</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/img/carousel/rsz_store2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <div class="container teks">
            <h1 class="display-4">EXPLORE YOUR SELF WITH <br> <span class="fw-bold">ULUM STORE</span></h1>
            <hr class="my-4">
            <p>Berbelanja dengan nyaman</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/img/carousel/rsz_store3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <div class="container teks">
            <h1 class="display-4">EXPLORE YOUR SELF WITH <br> <span class="fw-bold">ULUM STORE</span></h1>
            <hr class="my-4">
            <p>Berbelanja dengan nyaman</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
    </a>
    <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
    </a>
  </div>
  <!-- akhir carousel -->


  <!-- portofolio -->
  <section id="portofolio" class="portofolio p-3">

    <div class="container">

      <div class="title text-center pt-2">
        <h1>Barang</h1>
      </div>

      <div class="row">
        <?php
        $nomer = 1;
        foreach ($sembako as $smb) :
        ?>

          <div class="card col-12 col-md-3 pt-3 " style="width: 18rem; padding:20px; margin:21px;">
            <img src="asset/img/<?= $smb["Gambar"]; ?>" alt="">
            <div class="card-body">
              <h5 class="card-title"><?= $smb["Nama_barang"] ?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="php/detail.php?id=<?= $smb['id'] ?>" class="btn btn-primary">Detail </a>

            </div>
          </div>

        <?php endforeach; ?>

      </div>

    </div>
  </section>
  <!-- akhir portofolio -->

  <!-- contact -->
  <section id="contact" class="contact bg-secondary p-3">
    <div class="container">

      <div class="title text-center p-2">
        <h1>Contact Us</h1>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-sm-12">
          <div class="card text-white bg-primary mb-3 text-center">
            <div class="card-body">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill mb-1" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
              </svg>
              <h5 h5 class="card-title">Contact</h5>
              <p class="card-text">Silahkan kirim kritik dan saran.</p>
            </div>
          </div>

          <div class="card mb-2">
            <div class="card-body">
              <h5 h5 class="card-title p-2 ps-0">Our Store</h5>
              <ul class="list-group">
                <li class="list-group-item">Ulum Store</li>
                <li class="list-group-item">Jl. Perum Citra Kebun Mas no.1, karawang</li>
                <li class="list-group-item">Jawa Barat, Indonesia</li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-7 col-sm-12">

          <div class="card">
            <div class="card-body">

              <form>
                <div class="form-group mb-1">
                  <label for="nama floatingInputValue">Nama</label>
                  <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group mb-1">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group mb-1">
                  <label for="telp">NO telp</label>
                  <input type="text" class="form-control" id="telp">
                </div>
                <div class="form-group mb-1">
                  <label for="pesan">Pesan</label>
                  <textarea name="Pesan" id="pesan" class="form-control"></textarea>
                </div>
                <div class="form-group mb-1">
                  <button type="button" class="btn btn-primary mt-2">Kirim Pesan!</button>
                </div>
              </form>

            </div>
          </div>

        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- akhir contact -->

  <!-- footer -->
  <footer class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col p-3 text-center">
          <small>Copyright &copy; 2020 - Bahrul Ulum.</small>

        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->


  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    const carousel = document.querySelectorAll('.carousel');
    M.carousel.init(carousel, {
      interval: 3000
    });
  </script>

</body>