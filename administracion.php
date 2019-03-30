<!DOCTYPE html>
<html>
	<head>
		<title>Laboratorio Clinico Emanuel-Administración</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/barra-menu.css">
		<link rel="stylesheet" type="text/css" href="css/pestañas.css">
		<link rel="stylesheet" type="text/css" href="css/styleBarra.css">
		<link rel="stylesheet" type="text/css" href="css/administracion.css">
		<link href="http://allfont.es/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css"/>
	</head>
	<body onload="init()">

		<!--Contenedor-->
		<div class="container-fluid">
			<div class="row">
				<!--Aqui Esta Contenida La Barra De Menu-->
				<div id="barraNav" class="col-lg-2 col-sm-2 lista">
				</div>
				<!--Aqui Esta Finaliza La La Barra De Menu-->
				
				<!--Contenido De La Administracion-->
				<div class="col-lg-10 col-sm-10 well sector-contenido" style="border: black 1px solid;">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<ul class="nav nav-tabs" id="myTab">
								<li class="nav-item pestaña" id="nav-adm-soli-li">
									<a class="nav-item nav-link active" id="nav-adm-soli-tab" data-toggle="tab" href="#nav-adm-soli" role="tab" aria-controls="nav-adm-soli" aria-selected="false">Solicitudes</a>
								</li>
								<li class="nav-item pestaña" id="nav-adm-usr-li">
									<a class="nav-item nav-link" id="nav-adm-usr-tab" data-toggle="tab" href="#nav-adm-usr" role="tab" aria-controls="nav-adm-usr" aria-selected="false">Usuarios</a>
								</li>
								<li class="nav-item pestaña" id="nav-adm-reg-li">
									<a class="nav-item nav-link" id="nav-adm-reg-tab" data-toggle="tab" href="#nav-adm-reg" role="tab" aria-controls="nav-adm-reg" aria-selected="false">Registros</a>
								</li>
							</ul>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<!--Seccion Solicitudes-->
						<div class="tab-pane fade" id="nav-adm-soli" role="tabpanel" aria-labelledby="nav-adm-soli-tab">
							<div class="row">
								<div class="col-lg-12 col-sm-3">
									<ul class="menu">
										<li>
											<a style="color: #5a5a5a;">Solicitudes:</a>
										</li>
										<li>
											<input class="form-control" type="text" placeholder="Buscar" style="width: 150px">
										</li>
									</ul>
								</div>
								<div class="col-lg-12 col-sm-3">
									<table class="table table-striped">
										<thead>
											<tr>
												<th scope="col"><b>Nombre</b></th>
												<th scope="col"><b>Descripcion</b></th>
												<th scope="col"><b>Correo</b></th>
												<th scope="col"><b>Teléfono</b></th>
												<th scope="col"><b>Fecha</b></th>
												<th scope="col"><b>Acciones</b></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">Ramón Rosa</th>
												<td>Acceso al modulo Facturación</td>
												<td>ramon.presi@unah.hn</td>
												<td>9900-0000</td>
												<td>15/12/18</td>
												<td><button class="form-control">Acciones</button></td>
											</tr>
											<tr>
												<th scope="row">Ramón Rosa</th>
												<td>Acceso al modulo Facturación</td>
												<td>ramon.presi@unah.hn</td>
												<td>9900-0000</td>
												<td>15/12/18</td>
												<td><button class="form-control">Acciones</button></td>
											</tr>
											<tr>
												<th scope="row">Ramón Rosa</th>
												<td>Acceso al modulo Facturación</td>
												<td>ramon.presi@unah.hn</td>
												<td>9900-0000</td>
												<td>15/12/18</td>
												<td><button class="form-control">Acciones</button></td>
											</tr>
											<tr>
												<th scope="row">Ramón Rosa</th>
												<td>Acceso al modulo Facturación</td>
												<td>ramon.presi@unah.hn</td>
												<td>9900-0000</td>
												<td>15/12/18</td>
												<td><button class="form-control">Acciones</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--Seccion Usuarios (Empleados)-->
						<div class="tab-pane fade" id="nav-adm-usr" role="tabpanel" aria-labelledby="nav-adm-usr-tab">
							<div class="row">
								<ul class="menu">
									<div class="col-xl-10">
										<li>
											<a style="color: #5a5a5a;">Usuarios:</a>
										</li>
									</div>
									<div class="col-xl-2">
										<li>
											<input class="form-control" type="text" placeholder="Buscar" style="width: 150px;">
										</li>
									</div>
								</ul>
							</div>
							<div class="row">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col"><b>Nombre</b></th>
										<th scope="col"><b>Módulo</b></th>
										<th scope="col"><b>Última Conexión</b></th>
										<th scope="col"><b>Acciones</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Ramón Rosa</th>
										<td>Inventario</td>
										<td>15/12/18</td>
										<td><button class="form-control">Acciones</button></td>
									</tr>
									<tr>
										<th scope="row">Ramón Rosa</th>
										<td>Inventario</td>
										<td>15/12/18</td>
										<td><button class="form-control">Acciones</button></td>
									</tr>
									<tr>
										<th scope="row">Ramón Rosa</th>
										<td>Inventario</td>
										<td>15/12/18</td>
										<td><button class="form-control">Acciones</button></td>
									</tr>
									<tr>
										<th scope="row">Ramón Rosa</th>
										<td>Inventario</td>
										<td>15/12/18</td>
										<td><button class="form-control">Acciones</button></td>
									</tr>
								</tbody>
							</table>
							</div>
						</div>
						<!--Seccion Registros-->
						<div class="tab-pane fade" id="nav-adm-reg" role="tabpanel" aria-labelledby="nav-adm-reg-tab">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem sequi suscipit provident dolorum autem sunt amet hic maxime excepturi, nobis aspernatur earum debitis ad dignissimos, rem alias officiis nulla! Dignissimos.</div>
					</div>
				</div>
			</div>
		</div>
		<!--Fin Del Contenedor-->

	</body>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/pestañas.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/controladores/administracion.js"></script>
</html>
