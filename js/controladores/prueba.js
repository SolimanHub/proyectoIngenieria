$(document).ready(function() {
  $.ajax({
    type: "POST",
    url: "http://laboratorio-emanuel/ajax/acciones-administracion.php",
    data: "accion=leer-empleados",
    dataType: "json",
    success: function (response) {
      alert(response.data.mensaje);
    }
  });
});