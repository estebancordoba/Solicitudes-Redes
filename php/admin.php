<!DOCTYPE html>
<html>
  <head>
    <link href="../css/index.css" rel="stylesheet"> 
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src='../js/jquery.min.js'></script>
    <script src="../js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
    <title>Administracion</title>
  </head>
<?php
    session_start();
    if (isset($_SESSION['user']) && ($_SESSION['permiso']=='1')): ?>
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Administracion</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?></li>
          <li><a href="logout.php"><i class="material-icons">power_settings_new</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>
      </div>
    </nav>
    </div>
    <div class="card-panel">
      <span class="blue-text text-darken-2">Solicitudes de conectividad a la red de datos.</span>
    </div>

    <div class="container" style="width:90%;">
      <div class="row"></div>
      <div class="row"></div>
      <div class="row">
        <div class="col s3">
          <select id="categoria">
            <option value="0">Seleccione categoria</option>
            <option value="1">Navegacion o solicitud IP publica</option>
            <option value="2">Registro nuevo equipo</option>
            <option value="3">Instalacion punto de red</option>
            <option value="4">Solicitud videoconferencia/videollamada</option>
          </select>
        </div>
        <div class="col s3">
          <input type="date" class="datepicker" placeholder="Seleccione fecha" id="fecha">
        </div>
        <div class="col s3">
          <input type="text" id="cedula" placeholder="Numero de cedula">
        </div>
        <div class="col s3">
          <a class="waves-effect waves-light btn red btn-large" onclick="filtrar();"><i class="material-icons right">search</i>Filtrar</a>
        </div>
      </div>

      <div class="row">
        <table id="solicitudes" class="bordered striped centered responsive-table">
          <script type="text/javascript">
            $('#solicitudes').load("solicitudes_todas.php");
            $.ajax({
              type: "POST",
              url: "solicitudes_todas.php",
              success: function(response){
                $('#solicitudes').html(response);
              }
            });
          </script>
        </table>
      </div>
      <div class="row"></div>
    </div>


  <?php else:
      echo "<b>Acceso no permitido</b>";
  ?>
  <?php endif ?>
  <script src="../js/filtros.js" charset="utf-8"></script>
  <script src="../js/script.js" charset="utf-8"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  </body>
</html>
