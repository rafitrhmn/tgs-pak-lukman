<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Membuat Template Website Bootstrap</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">
</head>
<!-- footer paling atas -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Rafi taufiqurahman</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">halaman 1</a></li>
        <li><a href="#">halaman 2</a></li>
        <li><a href="#">halaman 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> daftar</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> masuk</a></li>
      </ul>
    </div>
  </div>
</nav>  

        <div class="container-fluid">
            <!-- Bagian Header -->
            <div class="row">
                <div class="col-md-20 header" id="site-header">
                    <header>
                        <h1 class="title-site">Ulangan Tengah Semester</h1>
                        <p class="description">Belajar Membuat Template Website Dengan Bootstrap</p>
                    </header>
            <!-- bagian menu-->
            <nav class="menus">
                <ul>
                    <li><a href="?page=1">Dosen</a></li>
                    <li><a href="?page=2">Mata Kuliah</a></li>
                    <li><a href="?page=3">Fakultas</a></li>
                    <li><a href="?page=4">Prodi</a></li>
                </ul>
            </nav>
                    </div>
                </div>
            <!-- End Bagian Header -->
            <div class="row">
                <div class="col-md-12 articles" id="site-content">
                    <?php
                    error_reporting(0);
                    switch ($_GET['page']) 
                    {
                        case '1':
                        include "dosen.php";
                        break;

                        case '2':
                        include "mk.php";
                        break;

                        case '3':
                        include "fakultas.php";
                        break;

                        case '4':
                        include "prodi.php";
                        break;

                        default:
                        include "home.php";
                        break;
                    }

                    ?>
                </div>
            </div>

            <!--bagian footer-->
            <div class ="row-center">
                <div class="col-md-12 footer" id="site-footer">
                    <footer class="copyright" text-center><p>universitas.com</p></footer>
                </div>
            </div>
            </html>