<?php
// Conectando y seleccionado la base de datos  
      $user = "postgres";
      $password = "frankecp";
      $dbname = "notas";
      $port = "5432";
      $host = "localhost";

      $cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

      $conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
?>
