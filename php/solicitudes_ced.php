<?php
  include 'conectar.php';
  $sql= "select * from solicitudes where cedula
          like '".$_POST['cedula']."'";

  echo "<thead><th>Fecha</th><th>Hora</th><th>Cedula</th><th>Nombre</th><th width='100px'>Cargo</th><th>Sitio</th><th>Depto</th><th width='200px'>Tipo</th><th>Ver más</th></thead>";
  foreach ($conn->query($sql) as $row) {
    echo "<tr>";
    echo "<td>".$row['fecha']."</td><td>".$row['hora']."</td><td>".$row['cedula']."</td><td>".$row['nombre']."</td>
          <td>".$row['cargo']."</td><td>".$row['sitio']."</td><td>".$row['nombDep']."</td><td>".$row['tipoSol']."</td><td>";

          if ($row['tipoSol']=='Permisos especiales de navegacion  o solicitud de IP publica') {
            $categoria='1';
          }
          if ($row['tipoSol']=='Registro de un nuevo equipo a la red') {
            $categoria='2';
          }
          if ($row['tipoSol']=='Instalacion de un punto de red') {
            $categoria='3';
          }
          if ($row['tipoSol']=='Solicitud de una videoconferencia o videollamada') {
            $categoria='4';
          }
          ?>
          <a onclick="ver_mas('<?php echo $row['idsolicitud']; ?>','<?php echo $categoria; ?>');">
          <?php
    echo "<img src='../img/pluss.png' width='25'/></a></td>";
    echo "</tr>";
  }
?>
