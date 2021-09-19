<?php 
$data = file_get_contents('data/ban.json');
$menu = json_decode($data, true);

$menu = $menu ["menu"];
?>

<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="img/logo.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />

    <title>Price List | Omah Ban Motorsport</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <img src="img/logo1.png" width="100" height="75" alt="" />
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="contact.html">Contact</a>
            <a class="nav-item nav-link active" href="#price">Pricing</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar -->
    <!-- jumbotron -->
    <section class="jumbotroncontact">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/jumbotron/jumbo.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/jumbotron/p2.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/jumbotron/p3.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p> -->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- jumbotron -->

    <!-- price -->
    <section id="price" data-aos="fade-down" data-aos-offset="300" data-aos-duration="1000">
      <div class="row">
        <div class="col text-center">
          <h2><strong>TYPE OF TIRE</strong></h2>
          <hr />
        </div>
      </div>
      <div class="container mb-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">
        <h3 class="text-secondary"><strong>Tipe Ban - BRIDGESTONE</strong></h3>
        <div class="row text-center justify-content-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <?php foreach ($menu as $row) : ?>
                <div class="col-sm-3 text-center mt-5">
                    <div class="card1 text-center" style="width: 15rem">
                    <img src="img/ban/<?= $row["gambar"]; ?>" class="card-img-top" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $row["merek"]; ?></h5>
                        <p class="card-text"><?= $row["size"]; ?></p>
                        <a href="#" class="btn btn-success">Rp. <?= $row["harga"]; ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </section>
    <!-- price -->
    <!-- footer -->
    <div class="footer1 text-white p-5">
      <div class="container">
        <div class="row" data-aos="fade-up-left">
          <div class="col-sm-4">
            <p><strong><a href="#about">ABOUT US</a></strong></p>
            <p><strong><a href="contact.html">CONTACT US</a></strong></p>
            <p><strong><a href="price.php">PRICE LIST</a></strong></p>
          </div>
          <div class="col-sm-4">
            <p><strong>NEED HELP ?</strong></p>
            <p><strong>Customer Service :</strong></p>
            <p>(0271) 7027057</p>
            <p><strong>Sales</strong></p>
            <p>salesomahban@gmail.com</p>
            <p><strong>Address</strong></p>
            <p>Jl. Perum Tiara Ardi, Blok C/6, Mojosongo, Surakarta, Jawa Tengah</p>
          </div>
          <div class="col-sm-4 text-center linkfooter">
            <p><strong>CONNECT WITH US</strong></p>
            <button class="btn btn-outline-light rounded-circle mr-3 mt-3">
              <a href="https://www.facebook.com/">
                <h5><i class="fab fa-facebook text-primary"></i></h5>
              </a>
            </button>
            <button class="btn btn-outline-light rounded-circle mr-3 mt-3">
              <a href="https://www.instagram.com/">
                <h5><i class="fab fa-instagram text-danger"></i></h5>
              </a>
            </button>
            <button class="btn btn-outline-light rounded-circle mr-3 mt-3">
              <a href="https://youtu.be/cxML98SQTJU">
                <h5><i class="fab fa-youtube text-danger"></i></h5>
              </a>
            </button>
            <button class="btn btn-outline-light rounded-circle mr-3 mt-3">
              <a href="https://www.gmail.com">
                <h5><i class="fas fa-envelope-open text-warning"></i></h5>
              </a>
            </button>
            <br /><br />
            <img src="img/logo1.png" class="img-thumbnail imgf" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <!-- footer2 -->
    <div class="footer2 text-white p-3">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">&copy; 2021 OMAH BAN MOTORSPORT. INDONESIA. | HERGITA ENTERPRISE.</div>
        </div>
      </div>
    </div>
    <!-- footer2 -->
    <!-- script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
