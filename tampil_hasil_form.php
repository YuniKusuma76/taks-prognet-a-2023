<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tugas JavaScript</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-home-page.png" rel="icon">
  <link href="assets/img/logo-home-page.png" rel="logo-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-image" style="background-image: url(assets/img/home-bg.jpg)">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Younnie</a></h1>
  <!-- ======= Start Navbar ======= -->
  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto" href="index.html">Home</a></li>
      <li><a class="nav-link scrollto active" href="index.html#taks">Taks</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- ======= End navbar ======= -->
    </div>
  </header>
  <!-- ======= End Header ======= -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Hasil Form ======= -->
  <section id="form" class="form-mf sect-pt4 route">
    <div class="container mt-5">
      <h1 class="text-center">Hasil Form Biodata</h1>
        <table class="table" border="2">
          <thead>
            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // kolom nama lengkap
                echo "<tr>";
                echo "<td>"."Nama Lengkap"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$fullname = $_POST['fullname']."</td>";
                echo "</tr>";
                // kolom nim
                echo "<tr>";
                echo "<td>"."NIM"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$nim = $_POST['nim']."</td>";
                echo "</tr>";
                // kolom e-mail
                echo "<tr>";
                echo "<td>"."E-mail"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$email = $_POST['email']."</td>";
                echo "</tr>";
                // kolom username
                echo "<tr>";
                echo "<td>"."Username"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$username = $_POST['username']."</td>";
                echo "</tr>";
                // kolom program studi
                echo "<tr>";
                echo "<td>"."Program Studi"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$prodi = $_POST['prodi']."</td>";
                echo "</tr>";
                // kolom jenis kelamin
                echo "<tr>";
                echo "<td>"."Jenis Kelamin"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$jeniskelamin = $_POST['jeniskelamin']."</td>";
                echo "</tr>";
                // kolom mata kuliah
                if (isset($_POST['matakuliah'])) {
                    $matakuliah = $_POST['matakuliah'];
                    echo "<tr>";
                    echo "<td>"."Jenis Kelamin"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>"."List Mata Kuliah Hari Ini :"."</td>";
                    echo "</tr>";
                    for ($i=0; $i < count($matakuliah) ; $i++){
                        echo "<tr>";
                        echo "<td>".""."</td>";
                        echo "<td>".""."</td>";
                        echo "<td>"."- ".$matakuliah[$i]."</td>";
                        echo "</tr>";
                    }
                }
              }
            ?>
          </thead>
        </table>
      <a href="tugas_javascript.html" class="previous">&laquo; Previous</a>
    </div>
  </section>
  <!-- ======= End Hasil Form ======= -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="mt-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Portofolio</strong>. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ======= End  Footer ======= -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>