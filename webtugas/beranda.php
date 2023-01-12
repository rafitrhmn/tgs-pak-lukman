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
                        include "dosen.php";
                        break;
                    }

                    ?>
                </div>
            </div>

            <!--bagian footer-->
            <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Rafitaufiqurahman(21.02.02.0123)</p></div>
        </footer>
            </div>
            </html>