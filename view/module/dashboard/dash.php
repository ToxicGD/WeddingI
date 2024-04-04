<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="view/css/dashboard.css" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php?route=home">Panel de Control</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form method="post">
          <input type="hidden" class="nav-item" name="close">
          <button type="submit" class="btn btn-outline-light px-3 fs-6">salir</button>
        </form>
        <?php
        if (isset($_POST['close'])) {
          $_SESSION['login'] = false;
          unset($_SESSION['login']);
          header('location: index.php');
        }

        if (isset($_GET['route'])) {
          switch ($_GET['route']) {
            case 'home':
                include_once 'dash.php';
              break;
            case 'invitado':
              include_once 'dash.php';
              break;
            case 'erase':
              include_once 'eraseInvitado.php';
              break;
            case 'invite':
              //include_once 'view/module/invitacion.php';
              $_SESSION["invitacion"] = true;
              header("Location: index.php");
              break;
            default:
              include_once 'dash.php';
              break;
          }
        } else {
          include_once 'dash.php';
        }
        ?>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span class="badge text-bg-primary p-2">agregar registro</span>
                <button type="button" class="btn btn-outline-success rounded-circle m-1 mx-auto" data-bs-toggle="modal" data-bs-target="#modal1"><i class="bi bi-plus-lg"></i></button>
              </a>
            </li>
          </ul>
          <hr class="my-3">
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-file-earmark-pdf"></i></button>
            </div>
          </div>
        </div>
        <h2>Lista de invitados</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">invitado</th>
                <th scope="col">acompañantes</th>
                <th scope="col">mesa</th>
                <th scope="col">invitacion</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php

              
              
              $data = new invitadoController();
              if (gettype($data) > 0) {
                foreach ($data->showInvitados() as $key => $value) {
                  $link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'?route=invite=&code='.$value["codigo"].'';
                  print '<tr>
                    <td>' . $value["id"] . '</td>
                    <td>' . $value["invitado"] . '</td>
                    <td>' . $value["acompanantes"] . '</td>
                    <td>' . $value["mesa"] . '</td>
                    <td> <a href="index.php?route=invite&code='.$value["codigo"].'">' . $value["codigo"] . '</a></td>
                    <td>
                  <button type="button" class="btn btn-danger" onclick="erase(this.parentElement.parentElement)"><i class="bi bi-trash3-fill"></i></button>
                  <button type="button" class="btn btn-warning" onclick="edit(this.parentElement.parentElement)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bi bi-pencil-fill"></i></button>
                  </td>';
                }
              } else {
                echo '<tr>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                    <td>Vacío</td>
                </tr>';
              }
              ?>
              </tr>
            </tbody>
          </table>
        </div>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- MODAL AGREGAR REGISTRO -->

        <div class="modal" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold" id="myModalLabel">Añadir Registro</h4>
                <button type="button" class="close btn btn-light" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <form method="POSt" id="frmInvitados" class="container-xl">
                  <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="txtNombre" name="txtNombre" class="form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form34">Nombre completo</label>
                  </div>

                  <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="number" id="intAcompanantes" name="intAcompanantes" class="form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form29">Acompañantes</label>
                  </div>

                  <div class="md-form mb-5">
                    <i class="fas fa-tag prefix grey-text"></i>
                    <input type="number" id="intMesa" name="intMesa" class="form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form32">numero de mesa</label>
                  </div>
                </form>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> cancelar</button>
                <button class="btn btn-success" onclick="validateRe(event)">Enviar <i class="bi bi-send"></i></button>
              </div>
            </div>
          </div>
        </div>

        <?php

        $hash = bin2hex(random_bytes(5));;
        //ENVÍAR LA INFORMACIÓN DE REGISTRO A LA DB
        if (isset($_POST['txtNombre'])) {
          $objCtrInvitado = new invitadoController();
          $objCtrInvitado->createInvitados(
            $_POST['txtNombre'],
            (int)$_POST['intAcompanantes'],
            (int)$_POST['intMesa'],
            $hash
          );
        }
        ?>

        <!-- Modal EDITAR -->
        <div id="ohsnap"></div>
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header bg bg-info">
                <h4 class="modal-title">Modificar Invitado</h4>
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form method="post" class="form-floating" id="frmUserModify">
                  <input type="hidden" name="txtIdM" id="txtIdM">
                  <div class="box-body">
                    <div class="row">
                      <div class=" col-md">
                        <!-- texto box -->
                        <div class="form-floating">
                          <label for="floatingInput">Nombre</label>
                          <input type="text" class="form-control col-form-label" id="txtNombreM" name="txtNombreM">
                        </div>
                      </div>
                      <div class="col-md">
                        <!-- texto box -->
                        <div class="form-floating">
                          <label for="floatingInput">Acompañante</label>
                          <input type="number" class="form-control col-form-label" id="intAcomM" name="intAcomM">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row g-3">
                      <div class=" col-md-6 ">
                        <!-- texto box -->
                        <div class="form-floating">
                          <label for="floatingInput">Mesa</label>
                          <input type="text" class="form-control col-form-label" id="intMesaM" name="intMesaM">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <!-- texto box -->
                        <div class="form-floating">
                          <label for="floatingInput">Invitacion</label>
                          <input type="text" class="form-control col-form-label" id="txtInvitM" name="txtInvitM">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </form>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <div>
                  <button class="btn btn-success" onclick="validateMI(event)"> Guardar</button>
                  <?php
                  if (isset($_POST['txtNombreM'])) {
                    $objCtrInvitado = new InvitadoController();
                    $objCtrInvitado->updateInvitado(
                      $_POST['txtIdM'],
                      $_POST['txtNombreM'],
                      (int)$_POST['intAcomM'],
                      (int)$_POST['intMesaM'],
                      $_POST['txtInvitM']
                    );
                    include_once 'view/module/dashboard/dash.php';
                  }
                  ?>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
              </div>

            </div>
          </div>
      </main>
    </div>
  </div>
  <?php
  if(isset($_POST['txtNombreM'])){
    $objCtrInvitado = new InvitadoController();
    $objCtrInvitado->updateInvitado(
      $_POST['txtIdM'],
      $_POST['txtNombreM'],
      (int)$_POST['intAcomM'],
      (int)$_POST['intMesaM'],
      $_POST['txtInvitM']
    );
    // include_once 'view/module/user.php';
  }
  ?>

  </main>
  </div>

  </div>


  </div>

</body>
<?php
include_once 'view/module/footer.php';
?>

</html>