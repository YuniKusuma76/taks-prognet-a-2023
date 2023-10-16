<?php
    $servername = "prognet.localnet";
    $username = "2205551033";
    $password = "2205551033";
    $dbname = "db_2205551033";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tugas Database MYSQL - CRUD Form Biodata</title>
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
      <li><a class="nav-link scrollto" href="dbsql_select.php">List Biodata</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- ======= End navbar ======= -->
    </div>
  </header>
  <!-- ======= End Header ======= -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Form ======= -->
  <section id="form" class="form-mf sect-pt4 route">
    <div class="container mt-4">
      <h1 class="text-center mb-2">Form Biodata Mahasiswa</h1>
        <form name="formBiodata" action="dbsql_insert.php" method="post" onsubmit="return validateForm()">
        <div class="form-group mb-3">
            <label><strong>NIM :</strong></label>
            <input type="text" name="nim" id="nim" placeholder="NIM" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label><strong>Nama lengkap :</strong></label>
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control">
          </div>
          <div>
            <label"><strong>Jenis Kelamin :</strong></label>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki'>Male</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan'>Female</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Tidak ingin Memberi Tahu'>Other</p>
          </div>
          <div class="form-group mb-3">
            <label><strong>Fakultas :</strong></label>
            <input type="text" name="fakultas" id="fakultas" placeholder="Fakultas" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label><strong>Program Studi :</strong></label>
            <select name="prodi" id="prodi" class="form-control">
              <option selected>Pilih Program Studi</option>
              <option value="S1 Arsitektur">S1 Arsitektur</option>
              <option value="S1 Teknik Sipil">S1 Teknik Sipil</option>
              <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
              <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
              <option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
              <option value="S1 Teknik Industri">S1 Teknik Industri</option>
              <option value="S1 Teknik Lingkungan">S1 Teknik Lingkungan</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <label><strong>Tanggal Lahir :</strong></label>
            <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Tanggal Lahir">
          </div>
          <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label><strong>Hobi :</strong></label>
            <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Hobi">
          </div>
          <div>
            <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
          </div>
        </form>
      </div>
    <script>
      function validateForm() {
        // Validasi NIM
        if (document.forms["formBiodata"]["nim"].value == "") {
            alert("Masukkan NIM Anda");
            document.forms["formBiodata"]["nim"].focus();
            return false;
        }
        // Validasi Nama Lengkap
        if (document.forms["formBiodata"]["fullname"].value == "") {
            alert("Masukkan Nama Lengkap Anda");
            document.forms["formBiodata"]["fullname"].focus();
            return false;
        }
        // Validasi Jenis Kelamin
        var jeniskelamin = document.getElementsByName('jeniskelamin');
        var genValue = false;
          for(var i=0; i<jeniskelamin.length;i++){
            if(jeniskelamin[i].checked == true){
                genValue = true;    
            }
          }
          if(!genValue){
            alert("Pilih Jenis Kelamin Anda");
            return false;
          }
        // Validasi Fakultas
        if (document.forms["formBiodata"]["fakultas"].value == "") {
            alert("Masukkan Fakultas Anda");
            document.forms["formBiodata"]["fakultas"].focus();
            return false;
        }
        // Validasi Program Studi
        if (document.forms["formBiodata"]["prodi"].selectedIndex < 1) {
            alert("Pilih Jurusan Anda");
            document.forms["formBiodata"]["prodi"].focus();
            return false;
        }
        // Validasi Tanggal Lahir
        if (document.forms["formBiodata"]["tgllahir"].value == "") {
            alert("Masukkan Tanggal Lahir Anda");
            document.forms["formBiodata"]["tgllahir"].focus();
            return false;
        }
        // Validasi E-mail
        if (document.forms["formBiodata"]["email"].value == "") {
            alert("Masukkan E-mail Aktif Anda");
            document.forms["formBiodata"]["email"].focus();
            return false;
        }
        // Validasi Hobi
        if (document.forms["formBiodata"]["hobi"].value == "") {
            alert("Masukkan Hobi Anda");
            document.forms["formBiodata"]["hobi"].focus();
            return false;
        }
      }
    </script>
  </section>
  <!-- ======= End Form ======= -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Portofolio</strong>. All Rights Reserved</p>
            </div>
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