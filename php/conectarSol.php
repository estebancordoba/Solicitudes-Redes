<?php
	//Esta linea es para incluir el archivo con las variables    
    /* CONECTAR CON BASE DE DATOS **************** */  
    $hostname = "localhost";
    $user = "root"; 
    $pass = "";

    $con = mysql_connect($hostname,$user,$pass);
    if (!$con){
        die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());
        exit();
    }
    
    // ********************************************** 
    // CONECTA CON LA BASE DE DATOS  **************** 
    $database = mysql_select_db("redes",$con);
    if (!$database){
        die('ERROR CONEXION CON BD: '.mysql_error());
        exit();
    }
?>
