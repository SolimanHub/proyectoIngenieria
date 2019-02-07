jQuery(document).ready(function() {
    var dir_menu = "menu.txt"; //direccion donde se encuentra el menu
	$.ajax({
		url : dir_menu,
		dataType: "text",
		success : function (data) 
		{
			$("#barraNav").html(data);
		}
	});
});