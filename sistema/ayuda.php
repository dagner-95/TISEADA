<?php 
	session_start();
 ?>


</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <?php include "includes/scripts.php"; ?>
        <title>Ayuda</title>
    </head>

    <body>
    <div class="bg-secondary pt-1 pb-1 pl-3"><a href="<?php
 	echo './';
	?>"><button type="button" class="btn btn-success">SALIR</button></a></div>

	    <section id="containerU">
           
            <div class= "listaUS">
                <h1 class="letraNiño" >Ayuda</h1>
            </div>
            <p>Nos ayudara a enterder la funcionalidad de la pagina para poder usar accesiblemente</p>
            
            <h2 class="h2_ayuda">PAGINA MENSAJERO</h2>
            <h3 class="h3_ayuda">INICIO</h3>
            
            <table class="table1" >
                <tr>
                    <td><strong>Inicio</strong></td>
                    <td>te reenvia a la pagina principal</td>
                </tr>
            </table>
     
            <h4 class="h4_ayuda">Escribir Carta</h4>
            <table class="table1">
                <tr>
                    <td><strong>Nueva carta</strong></td>
                    <td>crearas una nueva carta donde podras escribir todos ese campos vacios  </td>
                </tr>
                <tr>
                    <td><strong>Lista de cartas</strong></td>
                    <td>te mostrara todo lo que se escribio hasta el momento</td>
                </tr>
                <tr>
                    <td><strong>Plantillas</strong></td>
                    <td>tendras una vista de plantillas para que puedas escribir</td>
                </tr>
            </table>
       
        </section>
    </body>
</html>