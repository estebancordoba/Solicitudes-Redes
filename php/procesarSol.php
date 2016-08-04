<html>
<head>
    <title>Datos</title>
    <script src="../js/sweetalert.min.js"></script>
    <title>Solicitudes</title>
    <link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
</head>
<?php
    if (!isset($_POST['cedula'])){
        echo "<b>Acceso no permitido</b>";
        exit();
    }
?>
<body style="background-image: url(../img/fondo.jpg);background-attachment: fixed;">
<?php

    include 'conectarSol.php';
    // ********************************************** 
    //REALIZAR CONSULTA   

    $hora =intval(date("H")); 
    $hoy = date("ymd-".$hora."is");
    $fechaAct = date("Y-m-d");    
    $horaAct = date("".$hora.":i:s");

    $sql = "INSERT INTO solicitudes (idsolicitud, fecha, hora, cedula, nombre, correo, cargo, sitio, numDep, nombDep, tipoSol) VALUES ('".$hoy."','".$fechaAct."','".$horaAct."','".$_POST['cedula']."','".$_POST['nombre']."','".$_POST['correo']."','".$_POST['selecCargo']."','".$_POST['selecSitio']."','".$_POST['numeroDep']."','".$_POST['nombreDep']."','".$_POST['selecSolicitud']."')";
    $result = mysql_query($sql);
    if (!$result){
        echo "La consulta SQL solicitudes contiene errores.".mysql_error();
        exit();
    }

    $soli = $_POST['selecSolicitud'];                    
    if($soli=='Registro de un nuevo equipo a la red'){   
        $mac="".$_POST['mac1'].":".$_POST['mac2'].":".$_POST['mac3'].":".$_POST['mac4'].":".$_POST['mac5'].":".$_POST['mac6']."";
        $mac=strtoupper($mac);
        $sql = "INSERT INTO registros(idregistro, tipoDisp, nui, descripcion, tipoCon, mac, obser) VALUES ('".$hoy."','".$_POST['tipoDisp']."','".$_POST['nui']."','".$_POST['descEqu']."','".$_POST['tipoCon']."','".$mac."','".$_POST['observ']."')";
        $result = mysql_query($sql);
        if (!$result){
            echo "La consulta SQL registros contiene errores.".mysql_error();
            exit();
        }
        else{
            ?>
                <script>
                    swal({title: "Datos Ingresados!",   text: "Los datos han sido ingresados correctamente",type: "success",   confirmButtonColor: "#DD6B55",   confirmButtonText: "Cerrar", closeOnConfirm: false,   closeOnCancel: false }, 
                            function(isConfirm){   
                                if (isConfirm) {
									location.href="solicitudes.php";
                                }                             
                            }
                        );
                </script>
            <?php
        }  
        $sql = "UPDATE solicitudes SET idregistro='".$hoy."' WHERE idsolicitud='".$hoy."';";
        $result = mysql_query($sql);
    }
    else if($soli=='Permisos especiales de navegacion  o solicitud de IP publica'){        
        $mac="".$_POST['mac1'].":".$_POST['mac2'].":".$_POST['mac3'].":".$_POST['mac4'].":".$_POST['mac5'].":".$_POST['mac6']."";
        $mac=strtoupper($mac);
        $ip="".$_POST['ip1'].".".$_POST['ip2'].".".$_POST['ip3'].".".$_POST['ip4']."";
        $sql = "INSERT INTO permisos(idpermiso, nombFunc, cedulaFunc, tipoDisp, nui, descrip, tipoCon, mac, ip, justi, observ) VALUES ('".$hoy."','".$_POST['nombFuncS']."','".$_POST['cedFuncS']."','".$_POST['tipoDisp']."','".$_POST['nui']."','".$_POST['descEqu']."','".$_POST['tipoCon']."','".$mac."','".$ip."','".$_POST['justifi']."','".$_POST['observ']."')";

        $result = mysql_query($sql);
        if (!$result){
            echo "La consulta SQL permisos contiene errores.".mysql_error();
            exit();
        }
        else{
            ?>
                <script>
                    swal({title: "Datos Ingresados!",   text: "Los datos han sido ingresados correctamente",type: "success",   confirmButtonColor: "#DD6B55",   confirmButtonText: "Cerrar", closeOnConfirm: false,   closeOnCancel: false }, 
                            function(isConfirm){   
                                if (isConfirm) {
                                    location.href="solicitudes.php";
                                }                             
                            }
                        );
                </script>
            <?php
        }   
        $sql = "UPDATE solicitudes SET idpermiso='".$hoy."' WHERE idsolicitud='".$hoy."';";
        $result = mysql_query($sql);
    }
    else if($soli=='Instalacion de un punto de red'){    
        $sql = "INSERT INTO puntosred(idpuntoRed, lugar, numeroPuntos, observ) VALUES ('".$hoy."','".$_POST['lugarPunto']."','".$_POST['numePunto']."','".$_POST['observ']."')";
        $result = mysql_query($sql);
        if (!$result){
            echo "La consulta SQL punto red contiene errores.".mysql_error();
            exit();
        }
        else{
            ?>
                <script>
                    swal({title: "Datos Ingresados!",   text: "Los datos han sido ingresados correctamente",type: "success",   confirmButtonColor: "#DD6B55",   confirmButtonText: "Cerrar", closeOnConfirm: false,   closeOnCancel: false }, 
                            function(isConfirm){   
                                if (isConfirm) {
                                    location.href="solicitudes.php";
                                }                             
                            }
                        );
                </script>
            <?php
        }  
        $sql = "UPDATE solicitudes SET idpuntoRed='".$hoy."' WHERE idsolicitud='".$hoy."';";
        $result = mysql_query($sql);
    }
	else if($soli=='Solicitud de una videoconferencia o videollamada'){           
        $sql = "INSERT INTO videoconferencias(idvideoConferencia, servicio, lugarEvento, entidadDestino, correoDestino, fechaPrueba, horaPrueba, fechaEvento, horaEvento, observ) VALUES ('".$hoy."','".$_POST['servicio']."','".$_POST['lugarEv']."','".$_POST['entidadDes']."','".$_POST['correoDes']."','".$_POST['fechaPr']."','".$_POST['horaPr']."','".$_POST['fechaEv']."','".$_POST['horaEv']."','".$_POST['observ']."')";
        $result = mysql_query($sql);
        if (!$result){
            echo "La consulta SQL videoconferencia contiene errores.".mysql_error();
            exit();
        }
        else{
            ?>
                <script>
                    swal({title: "Datos Ingresados!",   text: "Los datos han sido ingresados correctamente",type: "success",   confirmButtonColor: "#DD6B55",   confirmButtonText: "Cerrar", closeOnConfirm: false,   closeOnCancel: false }, 
                            function(isConfirm){   
                                if (isConfirm) {
                                    location.href="solicitudes.php";
                                }                             
                            }
                        );
                </script>
            <?php
        }    
        $sql = "UPDATE solicitudes SET idvideoConferencia='".$hoy."' WHERE idsolicitud='".$hoy."';";
        $result = mysql_query($sql);
    }    
    ?>        
</body>
    
</html>