<?php
  include 'conectar.php';
  if ($_POST['categoria']=='1') {
    $sql= "SELECT * FROM permisos natural join solicitudes where tipoSol
          like 'Permisos especiales de navegacion  o solicitud de IP publica' and idsolicitud like '".$_POST['idsolicitud']."'";
    foreach ($conn->query($sql) as $row) {
      echo "<tr><td>Funcionario<td><td>".$row[1]."<td></tr>";
      echo "<tr><td>Cedula<td><td>".$row[2]."<td></tr>";
      echo "<tr><td>Dispositivo<td><td>".$row[3]."<td></tr>";
      echo "<tr><td>NUI<td><td>".$row[4]."<td></tr>";
      echo "<tr><td>Descripcion<td><td>".$row[5]."<td></tr>";
      echo "<tr><td>Conexión<td><td>".$row[6]."<td></tr>";
      echo "<tr><td>MAC<td><td>".$row[7]."<td></tr>";
      echo "<tr><td>IP<td><td>".$row[8]."<td></tr>";
      echo "<tr><td>Justificacion<td><td>".$row[9]."<td></tr>";
      echo "<tr><td>Observacion<td><td>".$row[10]."<td></tr>";
    }
  }
  else if ($_POST['categoria']=='2') {
    $sql= "SELECT * FROM registros natural join solicitudes where tipoSol
          like 'Registro de un nuevo equipo a la red' and idsolicitud like '".$_POST['idsolicitud']."'";
    foreach ($conn->query($sql) as $row) {
      echo "<tr><td>Dispositivo<td><td>".$row[1]."<td></tr>";
      echo "<tr><td>NUI<td><td>".$row[2]."<td></tr>";
      echo "<tr><td>Descripcion<td><td>".$row[3]."<td></tr>";
      echo "<tr><td>Conexión<td><td>".$row[4]."<td></tr>";
      echo "<tr><td>MAC<td><td>".$row[5]."<td></tr>";
      echo "<tr><td>Observacion<td><td>".$row[6]."<td></tr>";
    }
  }
  else if ($_POST['categoria']=='3') {
    $sql= "SELECT * FROM puntosred natural join solicitudes where tipoSol
          like 'Instalacion de un punto de red' and idsolicitud like '".$_POST['idsolicitud']."'";
    foreach ($conn->query($sql) as $row) {
      echo "<tr><td>Lugar<td><td>".$row[1]."<td></tr>";
      echo "<tr><td>Numero de puntos<td><td>".$row[2]."<td></tr>";
      echo "<tr><td>Observacion<td><td>".$row[3]."<td></tr>";
    }
  }
  else if ($_POST['categoria']=='4') {
    $sql= "SELECT * FROM videoconferencias natural join solicitudes where tipoSol
          like 'Solicitud de una videoconferencia o videollamada' and idsolicitud like '".$_POST['idsolicitud']."'";
    foreach ($conn->query($sql) as $row) {
      echo "<tr><td>Servicio<td><td>".$row[1]."<td></tr>";
      echo "<tr><td>Lugar evento<td><td>".$row[2]."<td></tr>";
      echo "<tr><td>Entidad destino<td><td>".$row[3]."<td></tr>";
      echo "<tr><td>Correo destino<td><td>".$row[4]."<td></tr>";
      echo "<tr><td>Fecha prueba<td><td>".$row[5]."<td></tr>";
      echo "<tr><td>Hora prueba<td><td>".$row[6]."<td></tr>";
      echo "<tr><td>Fecha evento<td><td>".$row[7]."<td></tr>";
      echo "<tr><td>Hora evento<td><td>".$row[8]."<td></tr>";
      echo "<tr><td>Observacion<td><td>".$row[9]."<td></tr>";
    }
  }
?>
