<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- logo -->
    <link rel="shortcut icon" href="view/img/logo.jpg">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio De Sesión</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="view/css/ohsnap.css">
    <link rel="stylesheet" href="view/css/sweetalert2.min.css">
    <link rel="shortcut icon" href="view/img/logo.png">
    <link rel="stylesheet" href="view/css/styleSL.css">
    <link rel="stylesheet" href="view/css/styleMain.css">
    <link rel="stylesheet" href="view/css/stylePago.css">
    <link rel="stylesheet" href="view/css/stylePagoComp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/css/carousel.css" >
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">    <style>
        h1 {text-align: center;}
    </style>
<meta name="theme-color" content="#7952b3">
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

    <!-- Custom styles for this template -->
    <link href="view/css/app.css" rel="stylesheet">
</head>
<body class="text-center">

    <main class="form-signin">
      <!-- Formulario de ingreso -->
    <form method="post"  class="container-sm mx-auto">
 <div class="form-group">
<img class="mb-4" src="view/image/Sample_User_Icon.png" alt="" width="72" height="57">

<h1 class="h3 mb-3 fw-normal">Login</h1>


<div class="form-group form-floating mb-3">
    <input type="text" class="form-control" name="user" placeholder="Username" required="required" autofocus>
    <label for="floatingName">Email or Username</label>
    
</div>

<div class="form-group form-floating mb-3">
    <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
    <label for="floatingPassword">Password</label>
    
</div>

<button class="w-100 btn btn-lg btn-primary" type="submit" value="Login">Login</button>
</div>
</form>
<?php
//Funcion para permitir el ingreso

  if (isset($_POST['user'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $hash = password_hash($pass,PASSWORD_DEFAULT);
    try {
      $objCtl = new UserController();
      $objCtl -> getVerifyPass($user,$pass);

    } catch (Exception $e) {

    }

  }
?>

</main>
<?php
  include_once 'view/module/footer.php';
?>

</body>
</html>
