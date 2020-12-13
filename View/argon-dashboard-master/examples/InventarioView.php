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
      <div class="row">
        <div class="col-md-11" style="margin: auto;">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Inventario</h3>
              <br>




              <!-- Button trigger modal -->

              <button style="margin-left: 670px, margin-top:20px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal2">Entrada</button>

              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Entrada</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <form>
                        <div class="row">
                          <div class="form-group col-6">
                            <label for="example-text-input" class="form-control-label">Cantidad (+)</label>
                            <input type="number" class="form-control form-control-muted " placeholder="Cantidad">

                          </div>
                          <div class="form-group col-6">
                            <label for="example-text-input-input" class="form-control-label">Fecha</label>
                            <input class="form-control" type="date">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                  </div>

                </div>
              </div>


              <button style="margin-left: 670px, margin-top:20px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal3">Salida</button>

              <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Salida</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <form>
                        <div class="row">
                          <div class="form-group col-6">
                            <label for="example-text-input" class="form-control-label">Cantidad (-)</label>
                            <input type="number" class="form-control form-control-muted " placeholder="Cantidad">

                          </div>
                          <div class="form-group col-6">
                            <label for="example-text-input-input" class="form-control-label">Fecha</label>
                            <input class="form-control" type="date">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>


            <br>
            <br>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th>Item</th>
                    <th>Producto</th>
                    <th>Cantidad</th>


                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td class="budget">
                      1
                    </td>
                    <td class="budget">
                      McDonals Super
                    </td>
                    <td class="budget">
                      20
                    </td>

                  </tr>
                </tbody>
              </table>
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