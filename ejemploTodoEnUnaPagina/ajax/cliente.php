<?php
		echo '	<!--Barra De Menu 2-->
		<div class="col-lg-9 well" style="border: black 1px solid;">
			
			<!--Barra De Menu-->
			<ul class="menu">
				<li style="font-size: 23px" ><label>Acciones: </label>
					<span class="glyphicon glyphicon-trash forte"></span>
					<span class="glyphicon glyphicon-print forte"></span>
					<span class="glyphicon glyphicon-file forte"></span>
					<span class="glyphicon glyphicon-envelope forte"></span>
					<span class="glyphicon glyphicon-floppy-disk forte"></span>
				</li>
				<li style="padding-left: 300px;"><input type="text" placeholder="Buscar"></li>
				<br><br><br>
				<li><label style="font-size: 20px"><span class="glyphicon glyphicon-plus-sign"></span>Filtro/Tag</label></li>
				<li><a href="">Tipo Cliente x: Regular x, Nuevo x, Perdido x, Aprox:"2 Meses"x</a></li>
			</ul>
			<!--Fin De Barra De Menu 2-->
		</div>
		<!-- Contenido Modulo Clientes-->
			<div>
				<table class="table table-striped table-hover" style="width: 1000px;">
				    <tr>
				    	<td></td>
				        <th>Cliente</th>
				        <th>Fecha ultimo examen</th>
				        <th>Tipo de Cliente</th>
				        <th>Medico encargado</th>
				        <th>Hospital</th>
				        <th></th>
				    </tr>
				    <tr>
				    	<td><input type="checkbox" name="" style="width: 15px;"></td>
				        <td>Juan Rosa</td>
				        <td>10/01/2019</td>
				        <td>Regular</td>
				        <td>Dr. Diaz</td>
				        <td>Hospital Escuela</td>
				        <td><a class="btn btn-secondary" href="#"><span class="glyphicon glyphicon-share"></span></a></td>
				        <!--td><button class="btn btn-secondary"><span class="glyphicon glyphicon-share"></span></button></td-->
				    </tr>
				    <tr>
				    	<td><input type="checkbox" name="" style="width: 15px;"></td>
				        <td>Pablo Cruz</td>
				        <td>18/11/2018</td>
				        <td>Nuevo</td>
				        <td><button class="btn btn-secondary"><span class="glyphicon glyphicon-plus"></span></button>Médico</td>
				        <td><button class="btn btn-secondary"><span class="glyphicon glyphicon-plus"></span></button>Hospital</td>
				        <td><a class="btn btn-secondary" href="#"><span class="glyphicon glyphicon-share"></span></a></td>
				    </tr>
				    <tr>
				    	<td><input type="checkbox" name="" style="width: 15px;"></td>
				        <td>Ana Vasquez</td>
				        <td>20/12/2018</td>
				        <td>Regular</td>
				        <td>Dra. Espinoza</td>
				        <td>Hospital San Felipe</td>
				        <td><a class="btn btn-secondary" href="#"><span class="glyphicon glyphicon-share"></span></a></td>
				    </tr>
				    <tr>
				    	<td><input type="checkbox" name="" style="width: 15px;"></td>
				        <td>Juana Chavez</td>
				        <td>05/02/2019</td>
				        <td>Nuevo</td>
				        <td><button class="btn btn-secondary"><span class="glyphicon glyphicon-plus"></span></button>Médico</td>
				        <td><button class="btn btn-secondary"><span class="glyphicon glyphicon-plus"></span></button>Hospital</td>
				        <td><a class="btn btn-secondary" href="#"><span class="glyphicon glyphicon-share"></span></a></td>
				    </tr>
				    <tr>
				    	<td><input type="checkbox" name="" style="width: 15px;"></td>
				        <td>Marcos Perez</td>
				        <td>20/01/2019</td>
				        <td>Regular</td>
				        <td><button class="btn btn-secondary"><span class="glyphicon glyphicon-plus"></span></button>Médico</td>
				        <td>Clínica San José</td>
				        <td><a class="btn btn-secondary" href="#"><span class="glyphicon glyphicon-share"></span></a></td>
				    </tr>
			    </table>
			</div>
			<!-- Fin del contenido del modulo CLientes-->
			';
?>