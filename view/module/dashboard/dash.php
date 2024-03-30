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
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Panel de Control</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="">salir</a>
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
                if(gettype($data)>0){
                  foreach($data -> showInvitados() as $key => $value){
                    print'<tr>
                    <td>'.$value["id"].'</td>
                    <td>'.$value["invitado"].'</td>
                    <td>'.$value["acompanantes"].'</td>
                    <td>'.$value["mesa"].'</td>
                    <td>'.$value["codigo"].'</td>
                    <td>
                  <button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                  <button type="button" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button>
                  </td>';
                  }
                  }else{ echo'<tr>
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
        <!-- MODAL AGREGAR REGISTRO -->
        <div class="modal" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold" id="myModalLabel">Añadir Registro</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <i class="fas fa-user prefix grey-text"></i>
                  <input type="text" id="form34" class="form-control validate">
                  <label data-error="wrong" data-success="right" for="form34" required>Nombre completo</label>
                </div>

                <div class="md-form mb-5">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input type="email" id="form29" class="form-control validate">
                  <label data-error="wrong" data-success="right" for="form29" required>Acompañantes</label>
                </div>

                <div class="md-form mb-5">
                  <i class="fas fa-tag prefix grey-text"></i>
                  <input type="text" id="form32" class="form-control validate">
                  <label data-error="wrong" data-success="right" for="form32" required>numero de mesa</label>
                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </main>

    </div>

  </div>


  </div>

</body>
<?php
  include_once 'view/module/footer.php';
?>

</html>