<?php
  include 'conectar.php';
  if ($_POST['categoria']=='1') {
    $sql= "select * from solicitudes where tipoSol
          like 'Permisos especiales de navegacion  o solicitud de IP publica' and cedula like '".$_POST['cedula']."'";
  }
  else if ($_POST['categoria']=='2') {
    $sql= "select * from solicitudes where tipoSol
          like 'Registro de un nuevo equipo a la red' and cedula like '".$_POST['cedula']."'";
  }
  else if ($_POST['categoria']=='3') {
    $sql= "select * from solicitudes where tipoSol
          like 'Instalacion de un punto de red' and cedula like '".$_POST['cedula']."'";
  }
  else if ($_POST['categoria']=='4') {
    $sql= "select * from solicitudes where tipoSol
          like 'Solicitud de una videoconferencia o videollamada' and cedula like '".$_POST['cedula']."'";
  }

  echo "<thead><th>Fecha</th><th>Hora</th><th>Cedula</th><th>Nombre</th><th width='100px'>Cargo</th><th>Sitio</th><th>Depto</th><th width='200px'>Tipo</th><th>Ver más</th></thead>";
  foreach ($conn->query($sql) as $row) {
    echo "<tr>";
    echo "<td>".$row['fecha']."</td><td>".$row['hora']."</td><td>".$row['cedula']."</td><td>".$row['nombre']."</td>
          <td>".$row['cargo']."</td><td>".$row['sitio']."</td><td>".$row['nombDep']."</td><td>".$row['tipoSol']."</td><td>";
    ?>
    <a onclick="ver_mas('<?php echo $row['idsolicitud']; ?>','<?php echo $_POST['categoria']; ?>');">
    <?php
    echo "<img src='../img/pluss.png' width='25'/></a></td>";
    echo "</tr>";
  }
?>
