<?php
  include 'conectar.php';
  $usuario = $_POST['usuario'];
  $contrasena = md5($_POST['contrasena']);
  $sql = "select * from usuarios where user like :usuario and password like :password";
  $resultado = $conn->prepare($sql);
  $resultado->bindParam(':usuario', $usuario);
  $resultado->bindParam(':password', $contrasena);
  $resultado->execute();
  //$resultado = $conn->query($sql);//prepare // 10' or '1=1
  $contador=0;
  while( $datos = $resultado->fetch() ){
    session_start();
    $contador++;
    $_SESSION['user'] = $datos['user'];
    $_SESSION['nombre'] = $datos['nombre'];
    $_SESSION['apellido'] = $datos['apellido'];
    $_SESSION['permiso'] = 1;
  }
  if ($contador > 0) {
      echo 1;
  }
  else {
      include 'conectarPG.php';
      // Realizando una consulta SQL
      $cedula = $_POST['usuario'];
      $clave = crypt($_POST['contrasena'],"md");      

      $query = "SELECT * FROM datos_ge1 WHERE vigente LIKE 'S' and cedula LIKE '".$cedula."';";
      $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

      if(pg_num_rows($result)>0){
        $query = "SELECT cedula,nombres,apellidos FROM empleados_udenar WHERE cedula LIKE '".$cedula."' and clave LIKE '".$clave."';";
        $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error()); 
      }
      // Imprimiendo los resultados en HTML
      if(pg_num_rows($result)>0){
        $line = pg_fetch_array($result, null, PGSQL_ASSOC);

        session_start();
        $_SESSION['user'] = $line['cedula'];
        $_SESSION['nombre'] = $line['nombres'];
        $_SESSION['apellido'] = $line['apellidos'];        
        $_SESSION['permiso'] = 2;
        $contador=2;        
      }
      if ($contador == 2) {
            echo 2;
      }
      else echo 0;
  }
?>