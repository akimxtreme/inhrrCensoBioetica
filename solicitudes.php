<?php
session_start();
?>
<?php
$fullname 	= $_SESSION['fullname'];
$privilegio = $_SESSION['privilegio'];

// PARAMETROS DE ACCESOS

	if(($privilegio=="1") || ($privilegio=="2")){
	 echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';
	}else{
			
			
?>
<?php
include("funciones/funciones.php");
doctype();
head('Solicitudes');

?>
<body>
<?php 
cintillo();
banner();

?>
<div class="row">
<div class="twelve columns">
<div class="alert-box success">     
  	Bienvenido(a) al <strong>Sistema del Censo Nacional de Bioética <?php echo 'Usuario(a): ' . $fullname; ?></strong>.
  	<a href="" class="close">&times;</a> 
</div>

<?php
menu('FULL');
?>
<table class="twelve">
    <tr>
   		<th>nº</th>
        <th>Nombre Completo</th>
        <th>Cédula</th>
        <th>Nacionalidad</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Acción</th>
    </tr>
    <?php 
	include("conexion.php");
	$sql="SELECT * FROM solicitud";
	$seleccion=mysql_query($sql,$conexion);
	$cont=mysql_num_rows($seleccion);
	$i = 1;
		while ($row = mysql_fetch_array($seleccion)){
					$campo = array (
								$row[0],
								$row[1],
								$row[2],
								$row[3],
								$row[4],
								$row[5],
								$row[6]
								
					 				);
			echo '<tr>';
			echo '<td>'. $i++ .'</td>';
			echo '<td>'. $campo[1] .', '. $campo[2] .'</td>';
			echo '<td>'. $campo[3] .'</td>';
			echo '<td>'. $campo[4] .'</td>';
			echo '<td>'. $campo[5] .'</td>';
			echo '<td>'. $campo[6] .'</td>';
			echo '<td><a class="button tiny radius twelve centered" href="solicitudes_accion.php?accion='. $campo[0] .'">Acción</a></td>';
			echo '</tr>';
			
		}
		
	?>
    
    
</table>

</div>
</div>



  <!-- End Header and Nav -->
<?php
pie();
js_comments();
?>

</body>
</html>
<?php 
		}// FIN DEL ELSE  
?>