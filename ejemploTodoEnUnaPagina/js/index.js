//Cuando la pagina se ha cargado lo primero que se muestra es la pantalla del index
$(document).ready(function() {
	pagePrincipal();
});

function pagePrincipal(){   //Se utiliza ajax para hacer una consulta de servidor
	$.ajax({
	url: "ajax/principal.php", //Se solicita la pagina "principal.php"
	success: function(datos){   //Una vez se ha ejecutado todo en "principal.php" lo retornado se guarda en "datos"
		$("#div-contenido").html(datos);    //Se agregan los datos como html en la pagina en un div previamente posicionado
        }
	});
}

function pageCatalogo() {
	$.ajax({
        url: "ajax/catalogo.php",
        success(datos){
		$("#div-contenido").html(datos);
        }
	});
}

function pageCliente() {
	$.ajax({
        url: "ajax/cliente.php",
        success(datos){
		$("#div-contenido").html(datos);
        }
	});
}