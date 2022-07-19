<?php
include '../config/validation.php'
?>

<!DOCTYPE html>
<html lang="en">

<?php
require_once '../config/conexion.php'; 
$tablesQuery = "SHOW FULL TABLES FROM pw";
$tablesInfo = mysqli_query($conexion,$tablesQuery);
include 'head.php';
?>

<body>
<section>
<!-- Navbar -->
<div class="navbar navbar-expand-lg navbar-dark bg-dark navbar" data-offset="500">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../public/assets/img/logo_small_icon_only_inverted.png" width="30" height="30" class="d-inline-block align-top" alt=""> MarcoTheBigCreator
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
        <span class="ti-menu"></span>
        </button>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="../views/logoutindex.php" class="nav-link" data-animate="scrolling">Home Page</a>
                        </li>
                        <li class="nav-item">
                            <a href="../views/logout.php" class="nav-link" data-animate="scrolling">Exit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Navbar -->


</section>
  <section>
 
    <script src="..\public\assets\js\jquery-3.1.1.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="../public/assets/js/jquery-3.1.1.min.js"><\/script>')
    </script>
    <script src="../public/assets/js/bootbox.min.js"></script>
    <script src="../public/assets/js/bootstrap-select.min.js"></script>
    <script src="../public/assets/js/bootstrap.js"></script>



    <div class="container d-flex justify-content-center">

        <ul class="list-group mt-5 text-white">
            <?php foreach($tablesInfo as $row){ ?>
              <a href="<?php echo $row['Tables_in_pw'];?>form.php">
            <li class="list-group-item d-flex justify-content-between align-content-center">
                <div class="d-flex flex-row">
                    <img src="https://img.icons8.com/color/100/000000/folder-invoices.png" width="40" />
                    <div class="ml-2 mt-2 pt-1">
                        <h6 class="mb-0 text-light"><?php echo $row['Tables_in_pw'];?></h6>
                    </div>
                </div>
            </a>
            </li>
                    <?php } ?>
        </ul>
    </div>

    <!--Fin-Contenido-->

  </section>

  <section>
  <div>
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #383c44">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Links -->
                <section class="mt-5">
                    <!-- Grid row-->
                    <div class="row text-center d-flex justify-content-center pt-5">
                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6>
                                <a class="nav-link text-white" href="../views/logoutindex.php" data-animate="scrolling">Home Page</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6>
                                <a class="nav-link text-white" href="../views/logout.php" data-animate="scrolling">Exit</a>
                            </h6>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-5 bg-light" />

                <!-- Section: Text -->
                <section class="mb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <p>
                                I appriaciate that you have seen my Web Portfolio. I let my social networks down here if you want to follow me and keep in contact.</p>
                        </div>
                    </div>
                </section>
                <!-- Section: Text -->

                <!-- Section: Social -->
                <section class="text-center mb-5">
                    <a href="https://www.facebook.com/marcoantonio.rodriguezarreola/" class="text-white mr-4" target="blank">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/RAMarcoA" class="text-white  mr-4" target="blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/marco_a_r_a/" class="text-white mr-4" target="blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/marco-antonio-rodr%C3%ADguez-arreola-5b0361212/" class="text-white mr-4" target="blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/MarcoTheBigCreator" class="text-white mr-4" target="blank">
                        <i class="fa fa-github"></i>
                    </a>
                </section>
                <!-- Section: Social -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2022 Copyright
                <a class="text-white" href="#">MarcoTheBigCreator</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->
  </section>
</body>

</html>