<?php 
//	session_start();
	if($_SESSION['tipo_usuario'] == 4)
	{
		//header("location: ./");
	//}
	/*
	include "../conexion.php";
				
			
	if(!empty($_POST))
	{	
		$alert='';
		if(empty($_POST['titulo']) || empty($_POST['asunto']) || empty($_POST['contenido']) )
		{
			$alert='<p class="msg_error">Escribe tu carta, No dejes los campos vacios</p>';
		}else{
			$user=$_SESSION['idUser'];
			//echo $user;				
			$titulo = $_POST['titulo'];
			$asunto  = $_POST['asunto'];
      $contenido   = $_POST['contenido'];	
      		$nombre_imagen = $_REQUEST['nombre_imagen'];
			$imagen = $_FILES['imagen']['name'];
			$ruta   = $_FILES['imagen']['tmp_name']; //ruta 
			$destino = "repo_imagenes/".$imagen;  //destino donde se almacenara y le adjuntamos el nombre de la imagen
			copy($ruta, $destino);   //para copiar el archivo al repositorio
	$query = mysqli_query($conection,"SELECT * FROM carta WHERE titulo = '$titulo' OR contenido = '$contenido' ");
		$result = mysqli_fetch_array($query);
			
			include "CategoriaCarta.php";
				
      $categoria=Categoria($contenido);
      
			function prioridad($categoria){
				if($categoria==1){
					return 1;
				}
				elseif ($categoria==0) {
					return 3;
				}
				else{
					return 2;
				}
			}
			$prioridad=prioridad($categoria);
				
			if($result > 0){
				$alert='<p class="msg_error">El titulo o contenido ya existen, prueba escribiendo otro</p>';
			}else{
				if($prioridad==2 || $prioridad==1){
				$query_insert = mysqli_query($conection,"INSERT INTO carta(TITULO, ASUNTO, CONTENIDO, NOMBRE_IMAGEN, IMAGEN,ID_CATEGORIA,ID_PRIORIDAD,ID_TIPO_CARTA)
							                        VALUES('$titulo','$asunto','$contenido', '$nombre_imagen','$destino','$categoria','$prioridad','1')");
			$query = mysqli_query($conection,"SELECT ID_CARTA FROM carta WHERE titulo = '$titulo' And contenido = '$contenido' ");
			$result = mysqli_fetch_array($query);
    */
      /* Variables para distribuir carta  */
    /*  $carta=$result['ID_CARTA'];
      $tipoUsuario=3;
     
      //echo $carta;
			$query_insert1 = mysqli_query($conection,"INSERT INTO usuario_carta(ID_CARTA,IDUSUARIO) VALUES('$carta','$user')"); 
     */ /*-------------------------------------------DISTRIBUIR---------------------------- */
     
       /*    
           include "EnviarCartaParaRedactor.php";
			$solucion=	Distruibuir($carta,$tipoUsuario,$conection);
				if($query_insert){
					$alert="<p class='msg_save'>$solucion</p>";
					
				}
				else{
						$alert='<p class="msg_error">Error al mandar la carta</p>';
					
				}
			}
				else{
					$alert='<p class="msg_save">Tu carta see mandó correctamente</p>';
				}
				}
			
			
			
			
			
			}
			
		}

	


*/
 ?>
<!--<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<title>Crear carta</title>
	
</head>-->
<div style="height:0px">

		
        
     <center > <div class="responsivo" style="height:0px">
     <?php 
if(isset($_GET['sol'])){
$alert=$_GET['sol'];
}

?>
          <div class="alerta"><?php echo isset($alert) ? $alert : ''; ?></div>
                <img src="img/portada_escribir_carta.jpg" alt="">
        
                <form action="" method="POST" enctype="multipart/form-data" id="comment_form" >
                
                <h1><center>Escribe tu carta</center></h1>

                <div id="from">
                    <label for="titulo">Titulo</label>
                    <input required type="text" id="titulo" name="titulo" placeholder="Titulo de la carta">
                </div>

                <div id="reply">
                    <label for="categoria">Asunto</label>
                    <input required type="text" id="categoria" name="asunto" placeholder="Categoria de la carta">
                </div>
                <div id="reply2">
                    <label for="nombre_imagen">Titulo para tu foto</label>
                    <input required type="text" id="nombre_imagen" name="nombre_imagen" placeholder="Nombre para tu foto">
                </div>
                <div id="reply3">
                    <label for="imagen">Selecciona una foto</label>
                    <input required type="file" id="imagen" name="imagen">
                </div>
                <div id="message">
                    <label for="msg"><strong>Contenido de tu carta</strong></label>
                    <textarea required id="msg" name="contenido"></textarea>
                </div>
                
                <div class="button">
                    <button type="submit">Envia tu carta</button>
                </div>
                </form>

	
      </div> </center>
	
</div>
<?php }?>
<!--</html>-->
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#titulo').val() != '' && $('#asunto').val() != '')
  {
    event.preventDefault();
   var form_data = $(this).serialize();
   console.log(form_data);
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
      console.log(data);
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
    alert('Campos Obligatorios');
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 //setInterval(function(){ 
 // load_unseen_notification();; 
 //}, 10000);
 
});
</script>
<style>
@font-face {
    font-family: 'handwriting';
    src: url('img/fuentes/journal-webfont.woff2') format('woff2'),
         url('img/fuentes/journal-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'typewriter';
    src: url('img/fuentes/veteran_typewriter-webfont.woff2') format('woff2'),
         url('img/fuentes/veteran_typewriter-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

body {
  font  : 21px sans-serif;
  background:rgb(33, 177, 175);
  width:auto;
  height:auto;

}

form {
  position: relative;
  width  : 770px;
  height : 550px;
  margin : 0 ;
  border-radius:3px;
  margin-top:-30px;
  padding-top:-90px;
  background: #FFF url(img/fondodecrearcarta2.jpg);
}

h1 {
  position : absolute;
  left : 415px;
  top  : 1px;
  font : 3em "typewriter", sans-serif;

}

#from {
  position: absolute;
  left : 398px;
  top  : 195px;
}

#reply {
  position: absolute;
  left : 390px;
  top  : 245px;
}
#reply2 {
  position: absolute;
  left : 380px;
  top  : 305px;
}
#reply3 {
  position: absolute;
  left : 390px;
  top  : 385px;
  right: 200px;

}

#message {
  position: absolute;
  left : 20px;
  top  : 28px;
}


label {
  font : .8em "typewriter", sans-serif;
}


input, textarea {
  font    : 1em "handwriting", sans-serif;
  border  : none;
  padding : 0 10px;
  margin  : 0;
  width   : 240px;
  background: none;
}

input, textarea {
  background   : rgba(0,0,0,.1);
  border-radius: 5px;
  outline      : none;
}


input {
    height: 2em; /* for IE */
    vertical-align: middle; /* This is optional but it makes legacy IEs look better */
    font : 0.9em "typewriter", sans-serif;
  }

textarea {
  display : block;
  font:1.9em/1.5em "handwriting", sans-serif;
  padding : 10px;
  margin  : 10px 0 0 -10px;
  width   : 340px;
  height  : 445px;

  resize  : none;
  overflow: auto;
}

button {
  position     : absolute;
  left         : 440px;
  top          : 480px;
  padding      : 5px;
  font : 1.3em "typewriter", sans-serif;
  border       : 2px solid #333;
  border-radius: 5px;
  background   : none;
  cursor       : pointer;
  transform    : rotate(-1.5deg);
  height:      40px;
}

button:after {
  content      : " >>>";
}

button:hover,
button:focus {
  outline     : none;
  background  : #001;
  color       : #FFF;
}

.alerta{
  background   : rgba(0,0,0,.1);
  border-radius: 5px;
  width  : 770px;
  height:35px;
  
}
img{
  width:770px;
  height:220px;
}
.responsivo{
  width: auto;
  height:auto;
}
</style>