<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
    <link rel="stylesheet" href="../assets/css/styles.css" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <?php
    include('../Menu.php');
    ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <?php
        include('../MenuSuperior.php');
        ?>
        <!-- Header -->
        <!-- Header -->
        <div class="header color_fondo pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Selecciona Una Opción</h6>
                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row col-md-5" style="float: left;">
                        <a href="ProveedorView.php">
                            <div class="col-md-12">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Proveedores</h5>
                                                <span class="h2 font-weight-bold mb-0">50</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                    <i class="ni ni-single-02"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 1.2%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="CrearProductoView.php">
                            <div class="col-md-12">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Productos</h5>
                                                <span class="h2 font-weight-bold mb-0">54</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                    <i class="ni ni-bullet-list-67"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 0.6%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="InventarioView.php">
                            <div class="col-md-12">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Inventario</h5>
                                                <span class="h2 font-weight-bold mb-0">125</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                                    <i class="ni ni-single-copy-04"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row col-md-6">
                        <div class="card bg-default col-md-12">
                            <div class="card-body">
                                <div class="chart">
                                    <!-- Chart wrapper -->
                                    <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Page content -->


    </div>

    </div>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>