<?php 
	session_start();
	if($_SESSION['tipo_usuario'] != 1)
	{
		header("location: ./");
	}

	include "../conexion.php";	

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Lista de usuarios</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	
	<section id="container">
		<?php 

			$busqueda = strtolower($_REQUEST['busqueda']);
			if(empty($busqueda))
			{
				header("location: lista_usuarios.php");
				mysqli_close($conection);
			}


		 ?>

		<h1>Lista de usuarios</h1>
		<a href="registro_usuario.php" class="btn_new">Crear usuario</a>
		
		<form action="buscar_usuario.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
			<input type="submit" value="Buscar" class="btn_search">
		</form>

		<table>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Usuario</th>
				<th>Rol</th>
				<th>Acciones</th>
			</tr>
		<?php 
			//Paginador
			$tipo_usuario = '';
			if($busqueda == 'Administrador')
			{
				$rol = " OR tipo_usuario LIKE '%1%' ";

			}else if($busqueda == 'Editor'){

				$rol = " OR tipo_usuario LIKE '%2%' ";

			}else if($busqueda == 'Especialista'){

				$rol = " OR tipo_usuario LIKE '%3%' ";
			}
			else if($busqueda == 'Niño'){

				$rol = " OR tipo_usuario LIKE '%4%' ";
			}


			$sql_registe = mysqli_query($conection,"SELECT COUNT(*) as total_registro FROM usuario 
																WHERE ( idusuario LIKE '%$busqueda%' OR 
																		nombre LIKE '%$busqueda%' OR 
																		correo LIKE '%$busqueda%' OR 
																		usuario LIKE '%$busqueda%' 
																		$tipo_usuario  ) 
																AND estatus = 1  ");

			$result_register = mysqli_fetch_array($sql_registe);
			$total_registro = $result_register['total_registro'];

			$por_pagina = 5;

			if(empty($_GET['pagina']))
			{
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
			$total_paginas = ceil($total_registro / $por_pagina);

			$query = mysqli_query($conection,"SELECT u.idusuario, u.nombre, u.correo, u.usuario, r.tipo_usuario FROM usuario u INNER JOIN tipo_usuario r ON u.tipo_usuario = r.id_tipousuario 
										WHERE 
										( u.idusuario LIKE '%$busqueda%' OR 
											u.nombre LIKE '%$busqueda%' OR 
											u.correo LIKE '%$busqueda%' OR 
											u.usuario LIKE '%$busqueda%' OR 
											r.tipo_usuario    LIKE  '%$busqueda%' ) 
										AND
										estatus = 1 ORDER BY u.idusuario ASC LIMIT $desde,$por_pagina 
				");
			mysqli_close($conection);
			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)) {
					
			?>
				<tr>
					<td><?php echo $data["idusuario"]; ?></td>
					<td><?php echo $data["nombre"]; ?></td>
					<td><?php echo $data["correo"]; ?></td>
					<td><?php echo $data["usuario"]; ?></td>
					<td><?php echo $data['tipo_usuario'] ?></td>
					<td>
						<a class="link_edit" href="editar_usuario.php?id=<?php echo $data["idusuario"]; ?>">Editar</a>

					<?php if($data["idusuario"] != 1){ ?>
						|
						<a class="link_delete" href="eliminar_confirmar_usuario.php?id=<?php echo $data["idusuario"]; ?>">Eliminar</a>
					<?php } ?>
						
					</td>
				</tr>
			
		<?php 
				}

			}
		 ?>


		</table>
<?php 
	
	if($total_registro != 0)
	{
 ?>
		<div class="paginador">
			<ul>
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>&busqueda=<?php echo $busqueda; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>&busqueda=<?php echo $busqueda; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'&busqueda='.$busqueda.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>&busqueda=<?php echo $busqueda; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?>&busqueda=<?php echo $busqueda; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
<?php } ?>


	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>