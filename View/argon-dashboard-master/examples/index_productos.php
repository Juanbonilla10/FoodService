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
                            <h6 class="h2 text-white d-inline-block mb-0">¡¡Atreve a soñar con nuestrso productos!!</h6>
                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row" style="background: white; border-radius: 10px;     padding: 10px;">
                        <div class="col-md-3">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS3wtwUCsLAK-3z3oMHbGFuGqglr3Ig2Dd3Qw&usqp=CAU" alt="Card image cap" style="padding: 6px;">
                        </div>
                        <div class="col-md-5" style="height: 150px;">
                            <p style="color: black; font-size: 15px;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos </p>
                        </div>
                        <div class="col-md-3" style="    margin: auto;">
                            <div class="table-responsive">
                                <table class="table align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name" style="    text-align: center;">Combo</th>
                                            <th scope="col" class="sort" data-sort="budget" style="    text-align: center;">Solo</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td style="    text-align: center;">
                                                $2500 USD
                                            </td>
                                            <td style="    text-align: center;">
                                                $1500 USD
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <center>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Comprar</button>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                <div class="modal-content col-lg-12">

                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modal-title-default">Comprar Producto</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="example-time-input" class="form-control-label">Medio de pago</label>
                                            <select class="form-control">
                                                <option>Electronico</option>
                                                <option>Datafono</option>
                                                <option>Efectivo</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-time-input" class="form-control-label">Cantidad</label>
                                            <input class="form-control" type="number" value="10:30:00" id="example-time-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input" class="form-control-label">Precio Unitario</label>
                                            <input class="form-control" type="text" value="15000" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input" class="form-control-label">Total</label>
                                            <input class="form-control" type="text" value="John Snow" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input" class="form-control-label">Iva</label>
                                            <input class="form-control" type="text" value="0" id="example-text-input" disabled>
                                        </div>




                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                        <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cerrar</button>
                                    </div>

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