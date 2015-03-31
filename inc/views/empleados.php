<h2>Listado de Empleados</h2>

<table cellpadding="10">
	<thead>
		<tr>
			<th align="left">#</th>
			<th align="left">Nombre</th>
			<th align="left">Apellido</th>
			<th align="left">Cedula</th>
			<th align="left">Direcci&oacute;n</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($data["empleados"] as $k => $v)
			{
				?>
					<tr>
						<td><?=$v["ID_EMPLEADO"];?></td>
						<td><?=$v["NOMBRE"];?></td>
						<td><?=$v["APELLIDO"];?></td>
						<td><?=$v["CEDULA"];?></td>
						<td><?=$v["DIRECCION"];?></td>
					</tr>
				<?php
			}
		?>
	</tbody>
<table>