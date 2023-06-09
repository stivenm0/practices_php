<?php
    session_start();

    if(!isset($_SESSION["usuario"])){
        header("Location:/login.php");
    }
?>

<!doctype html>
<html lang="es">
<head>
  <title>Sistema</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/4370/4370748.png">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body class="bg-dark ">

  <nav class="navbar navbar-expand navbar-light bg-light">
      <ul class="nav navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" href="/" aria-current="page">Sistema <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/sections/empleados/index.php">Empleado</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/sections/puestos/index.php">Puestos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/sections/usuarios/index.php">Usuarios</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/logout.php">Cerrar Sesión</a>
          </li>
      </ul>
  </nav>

  <br>

  <main class="container">