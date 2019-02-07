<!DOCTYPE html>
<html>
<head>
	<title>Laboratorio Clinico Emanuel-Inventario</title>
    <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/barra-menu.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link href="http://allfont.es/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css" />
	
</head>
<body>

	<!--Contenedor-->
	<div class="container-fluid">
		<div class="row">
			<!--Aqui Esta Contenida La Barra De Menu-->
			<div id="barraNav" class="col-lg-3 lista"></div>
     		<!--Aqui Esta Finaliza La La Barra De Menu-->
            
			<!--Contenido Del Inventario-->

			<div class="col-lg-9 well" style="border: black 1px solid;">
				<!--Barra De Menu-->
				<ul class="menu">
					<li><img src="img/maletin.png" style="height: 40px"></li>
					<li><input type="text" placeholder="Buscar Producto"></li>
					<li ><a href="#">Ordenar Por: <select>
                            <option>Alfabetico</option>
                            <option>Menor Cantidad</option>
                            <option>Mayor Cantidad</option>
                        </select>
                    <li><a>
                    <li><a href="">Añadir Filtro <span class="glyphicon glyphicon-plus-sign"></span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-align-justify"></span></a></li>
                    <li><a href=""><span class="glyphicon glyphicon-th-large"></span></a></li>
				</ul>
				<!--Fin De Barra De Menu-->
                <br>
                <table class="table" >
                    <thead>
                        <tr>
                            <th scope="col" ><b>Cod</b></th>
                            <th scope="col" ><b>Nombre</b></th>
                            <th scope="col" ><b>Cantidad</b></th>
                            <th scope="col" ><b>Cant. Comprar</b></th>
                            <th scope="col" ><b>Precio Aprox</b></th>
                        </tr>
                    </thead>
                    <tbody>
						<tr>
                            <th scope="row" 1</th>
							<td>Algodón</td>
							<td>2 </td>
							<td>10</td>
							<td>Lps10</td>
						</tr>
						<tr>
                            <th scope="row" >2</th>
							<td >Jeringas</td>
							<td>1</td>
							<td>15</td>
							<td>Lps 75</td>
						</tr>
						<tr>
                            <th scope="row" >3</th>
							<td >Tubos de Ensayo</td>
							<td>35</td>
							<td>100</td>
							<td>Lps 1200</td>
                        </tr>
                    </tbody>
				</table>
			</div>
		</div>
	</div>
	<!--Fin Del Contenedor-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/menu.js"></script>

</body>
</html>