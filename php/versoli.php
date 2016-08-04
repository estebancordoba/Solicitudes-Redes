<!DOCTYPE html>
<html>
  <head>
    <link href="../css/index.css" rel="stylesheet"> 
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src='../js/jquery.min.js'></script>
    <script src="../js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
    <title>Solicitudes</title>
  </head>
<?php
    session_start();
    if (isset($_SESSION['user']) && ($_SESSION['permiso']=='2')): ?>
    <div class="navbar-fixed">
         <nav>
            <div class="nav-wrapper teal lighten-1">
             <a href="#!" class="brand-logo">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Solicitudes</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?></li>
                  <li><a href="logout.php"><i class="material-icons">power_settings_new</i></a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                  <li><a href="logout.php">Cerrar sesion</a></li>
                </ul>            
                <ul class="right hide-on-med-and-down">
                  <li>Atras</li>                                    
                  <li><a href="solicitudes.php"><i class="material-icons">keyboard_arrow_left</i></a></li>
                </ul>                                
              </ul>
            </div>
        </nav>  
        </div>

    <div class="card-panel">
      <span class="blue-text text-darken-2">Solicitudes de conectividad a la red de datos.</span>
    </div>

    

      <div class="row">
        <table id="solicitudes" class="bordered striped centered responsive-table">
          <script type="text/javascript">
            $('#solicitudes').load("solicitudes_usu.php");
            $.ajax({
              type: "POST",
              url: "solicitudes_usu.php",
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
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/script.js" charset="utf-8"></script>
  </body>
</html>
