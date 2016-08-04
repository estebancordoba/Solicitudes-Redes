<html ng-app='angularRoutingApp'>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="expires" content="-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>        
        <script src="../js/angular.min.js"></script><!--Se carga el framework AngularJS-->  
        <script src="../js/angular-route.min.js"></script>
        <script src="../js/jquery.min.js"></script>       
        <script src="../js/validaciones.js"></script>
        <script src="../js/main.js"></script>

        <link rel="stylesheet" href="../css/materialize.min.css">
        <link href="../css/index.css" rel="stylesheet">        
        <script src="../js/materialize.min.js"></script>

        <script src="../js/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/sweetalert.css">

        <title>Solicitudes</title>

        
        

    </head>

<?php
    session_start();

    if (isset($_SESSION['user']) && ($_SESSION['permiso']=='2')): 
      ?>
	  <body ng-controller='mainController' onload="tipoSol();" style="background-image: url(../img/fondo.jpg);background-attachment: fixed;">         

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
                  <li>Ver Solicitudes</li>                  
                  <li><a href="versoli.php"><i class="material-icons">assignment_late</i></a></li>
                </ul>                                
              </ul>
            </div>
        </nav>  
        </div>

        <div class="container row blue-grey lighten-5">
             

           <div class="row">
                <h3 class="col s12 center header">Solicitud servicios de conectividad a la red de datos</h3>
                <h5 class="col s12 light center header">Para solicitar un servicio por favor ingrese los siguientes datos</h5>
            </div>
            
            <form action="procesarSol.php" method="post" name="datos" id="main">
              
                <div class="input-field col s6">
                  <i class="material-icons prefix">perm_identity</i>
                  <input id="cedula" maxlength="15" type="text" name="cedula" value="<?php echo $_SESSION['user']; ?>" class="validate" readonly>
                  <label for="cedula">Cedula</label>
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="nombre" type="text" name="nombre" maxlength="50" class="validate" value="<?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?>" readonly>
                  <label for="nombre">Nombre</label>
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">email</i>
                  <input id="correo" maxlength="30" type="email" name="correo" class="validate" required>
                  <label for="correo">Correo Electronico</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">supervisor_account</i>
                    <select name="selecCargo" id="cargo" required>
                      <option value="" disabled selected>Seleccione el Cargo</option>
                      <option value="Director o Jefe de Dependencia">Director o Jefe de Dependencia</option>
                        <option value="Docente">Docente</option>
                        <option value="Profesional">Profesional</option>
                        <option value="Tecnico">Tecnico</option>
                        <option value="Asistencial">Asistencial</option>
                        <option value="Otro">Otro</option>                    
                    </select>   
                    <label for="cargo">Cargo</label>
                </div>  

                <div class="input-field col s6">
                    <i class="material-icons prefix">card_travel</i>
                    <select name="selecSitio" id="sede" required>                            
                        <option value="" selected="" disabled="">Seleccione la sede de trabajo</option>
                        <option value="Sede Torobajo">Sede Torobajo</option>                        
                        <option value="Sede Panamericada">Sede Panamericada</option>                        
                        <option value="Sede Centro">Sede Centro</option>                    
                    </select>  
                    <label for="sede">Sede</label>
                </div> 

                <div class="input-field col s6">
                  <i class="material-icons prefix">work</i>
                  <input id="depen" type="number" min=10001 max=10105 name="numeroDep" class="validate" onfocus="ayudaDep();" onchange="mostDep(nombDep);" required>
                  <label for="depen">Codigo de Dependencia o Departamento</label>
                </div>

                <div class="input-field col s12">
                  <i class="material-icons prefix">work</i>
                  <input id="nombDep" name="nombreDep" value="" type="text" class="validate" readonly>
                  
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">format_indent_decrease</i>                     
                    <select name="selecSolicitud" id="selecSoli" onchange="mostrarP();" required>                            
                        <option value="" selected="" disabled="">Seleccione el tipo de solicitud</option>
                        <option value="Registro de un nuevo equipo a la red">Registro de un nuevo equipo a la red</option>
                        <option value="Permisos especiales de navegacion  o solicitud de IP publica">Permisos especiales de navegacion  o solicitud de IP publica</option>
                        <option value="Instalacion de un punto de red">Instalacion de un punto de red</option>
                        <option value="Solicitud de una videoconferencia o videollamada">Solicitud de una videoconferencia o videollamada</option>
                    </select>  
                    <label for="selecSoli">Tipo de Solicitud</label>
                </div> 
                <div ng-view></div>
                <div>
                </div>
               
                <div class="input-field col s6">
                    <button class="btn waves-effect waves-light btn-large" style="width:100%" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
                    </button>
                </div>  

                <div class="input-field col s6">
                    <button class="btn waves-effect waves-light btn-large" style="width:100%" type="reset" name="action">Limpiar
                    <i class="material-icons right">clear_all</i>
                    </button>
                </div>  
                                
                <div class="row"></div>
                <div class="row">
                    <h6 class="col s6 light right" style="atext-align: right">Unidad de Informática y Telecomunicaciones (<a href="mailto:redes@udenar.edu.co" target="_top">redes@udenar.edu.co</a>)</h6>
                </div>                
            </form>
         
            </div>
    
	  <?php
    
    else:
      echo "<b>Acceso no permitido</b>";
    
?>
  <?php endif ?>
	</body>
</html>