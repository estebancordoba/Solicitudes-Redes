function filtrar(){
  if($("#categoria").val()=='0' && $("#fecha").val()=="" && $("#cedula").val()==""){
    swal({   title: "Error!",   text: "Para filtrar debe ingresar al menos debe ingresar un parámetro de búsqueda!",   type: "error",   confirmButtonText: "Cerrar" });
  }

  if($("#categoria").val()!='0' && $("#fecha").val()=="" && $("#cedula").val()==""){
    $('#solicitudes').load("solicitudes_cat.php", {"categoria":$("#categoria").val()});
  }

  else if($("#categoria").val()=='0' && $("#fecha").val()!="" && $("#cedula").val()==""){
    $('#solicitudes').load("solicitudes_fecha.php", {"fecha":$("#fecha").val()});
  }

  else if($("#categoria").val()=='0' && $("#fecha").val()=="" && $("#cedula").val()!=""){
    $('#solicitudes').load("solicitudes_ced.php", {"cedula":$("#cedula").val()});
  }

  else if($("#categoria").val()!='0' && $("#fecha").val()!="" && $("#cedula").val()==""){
    $('#solicitudes').load("solicitudes_cat_fecha.php", {"categoria":$("#categoria").val(), "fecha":$("#fecha").val()});
  }

  else if($("#categoria").val()!='0' && $("#fecha").val()=="" && $("#cedula").val()!=""){
    $('#solicitudes').load("solicitudes_cat_ced.php", {"categoria":$("#categoria").val(), "cedula":$("#cedula").val()});
  }

  else if($("#categoria").val()=='0' && $("#fecha").val()!="" && $("#cedula").val()!=""){
    $('#solicitudes').load("solicitudes_fecha_ced.php", {"fecha":$("#fecha").val(), "cedula":$("#cedula").val()});
  }
  else if($("#categoria").val()!='0' && $("#fecha").val()!="" && $("#cedula").val()!=""){
    $('#solicitudes').load("solicitudes_fecha_ced_cat.php", {"fecha":$("#fecha").val(), "cedula":$("#cedula").val(), "categoria":$("#categoria").val()});
  }
}

function ver_mas(idsolicitud, categoria){
    $.ajax({
      type: "POST",
      url: "ver_mas.php",
      data: {"idsolicitud":idsolicitud,"categoria":categoria},
      success: function(response){
        swal({   title: "Más detalles!",
           text: "<table>" + response + "<table>",
           html: true });
      }
    });
}
