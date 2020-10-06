
<?php 

	require_once "clases/conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();

	$sql="SELECT id_videojuego,nombre,tipo,fechaLanzamiento,descripcion from t_videojuegos";
	$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #2A4CE3;color: white; font-weight: bold;">
			<tr align="center">
				<td>CÓDIGO</td>
				<td>NOMBRE</td>
				<td>TIPO</td>
				<td>FECHA DE LANZAMIENTO</td>
				<td>DESCRIPCIÓN</td>
				<td>EDITAR</td>
				<td>ELIMINAR</td>
			</tr>
		</thead>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td style="text-align: center;">
						<span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fas fa-pencil-alt" aling="center"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-danger" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
							<span class="fas fa-trash"></span>
						</span>
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>