<?php 
	session_start();
	if($_SESSION['tipo_usuario'] != 4)
	{
		header("location: ./");
	}
?>







<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php include "includes/scripts.php"; ?>
	<title>Mostrar Plantillas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<?php include "includes/header.php"; ?>
    <br><br><br><br><br><br><br><br>
    <h1><center>ESCOGE UNA PLANTILLA</center></h1>


        <div class="card" style="width: 18rem;">
        <a href="repo_plantillas/Screenshot_1.png" class="card-link"> <img src="repo_plantillas/Screenshot_1.png" class="card-img-top" alt="..."> </a>
        <div class="card-body">
            <h5 class="card-title">COLORES</h5>
            <p class="card-text"></p>
        </div>
        </div>

     <div class="card" style="width: 18rem;">
    <a href="repo_plantillas/Screenshot_1.png" class="card-link"> <img src="repo_plantillas/Screenshot_1.png" class="card-img-top" alt="..."> </a>
    <div class="card-body">
        <h5 class="card-title">COLORES</h5>
        <p class="card-text">Breve descripcion de la plantilla</p>
    </div>
    </div>

        <div class="card" style="width: 18rem;">
        <a href="repo_plantillas/Screenshot_1.png" class="card-link"> <img src="repo_plantillas/Screenshot_1.png" class="card-img-top" alt="..."> </a>
        <div class="card-body">
            <h5 class="card-title">COLORES</h5>
            <p class="card-text">Breve Descripcion d ela plantilla</p>
        </div>
        </div>
       



        <div class="card-deck" style="width: 50rem;" style="height: 50rem;">
  <div class="card">
    <img src="repo_plantillas/Screenshot_1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="repo_plantillas/Screenshot_1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="repo_plantillas/Screenshot_1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>






<div class="card-deck">
  <div class="card">
    <img src="repo_plantillas/Screenshot_1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="repo_plantillas/Screenshot_1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="repo_plantillas/Screenshot_1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

	<?php include "includes/footer.php"; ?>
</body>
</html>
