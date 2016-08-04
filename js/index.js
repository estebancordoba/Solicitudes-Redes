$(document).ready(function() {

  var animating = false,
      submitPhase1 = 1100,
      submitPhase2 = 400,
      logoutPhase1 = 800,
      $login = $(".login"),
      $app = $(".app");

  $(document).on("click", ".login__submit", function(e) {//clic login
    if (animating) return;
    animating = true;
    var that = this;
    $(that).addClass("processing");
    setTimeout(function() {
      //$(that).addClass("success");
      setTimeout(function() {
  //      $app.show();
        //$app.css("top");
        //$app.addClass("active");
      }, submitPhase2 - 70);
      setTimeout(function() {
        //$login.hide();
        //$login.addClass("inactive");
        animating = false;
        $(that).removeClass("success processing");
      }, submitPhase2);
    }, submitPhase1);

  });
});
function log_ajax() {//animacion login
    var user = $("#user").val();
    var pass = $("#pass").val();
    $.ajax({
      type: "POST",
      url: "php/procesar.php",
      data: {"usuario":user,"contrasena":pass},
      success: function(response){        
        if(response==1)
          location.href="php/admin.php"
        else if(response==2)
          location.href="php/solicitudes.php"        
        else if(response==0)
          swal({   title: "Datos Incorrectos!",   text: "Nombre de usuario o cotraseña no validos",   type: "error",   confirmButtonText: "Cerrar" });
      }
    });
  };
function env() {
  $('#pass').keydown(function(e) {
    if (e.keyCode == 13) {
        $('#btnE').click();
    }
  });
};
