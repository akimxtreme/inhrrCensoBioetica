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
    <?php 
	include("conexion.php");
	$sql="SELECT * FROM solicitud WHERE id=".$_GET['accion'];
	$seleccion=mysql_query($sql,$conexion);
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
			echo '<form name="crear_cuenta" class="seven columns centered" action="acciones.php" method="post" onsubmit="return formularios(\'crear_cuenta\')";>';
			echo '<fieldset>';
			echo '<legend>Crear Cuenta</legend>';
			echo '<label>Nombre(s)</label>';
			echo '<input type="text" name="new[]" readonly value="'. $campo[1] .'"/>';
			echo '<label>Apellido(s)</label>';
			echo '<input type="text" name="new[]" readonly value="'. $campo[2] .'"/>';
			echo '<label>Cédula</label>';
			echo '<input type="text" name="new[]" readonly value="'. $campo[3] .'"/>';
			echo '<label>Nacionalidad</label>';
			echo '<input type="text" name="new[]" readonly value="'. $campo[4] .'"/>';
			echo '<label>Correo Electrónico</label>';
			echo '<input type="text" name="new[]" readonly value="'. $campo[5] .'"/>';
			echo '<label>Teléfono</label>';
			echo '<input type="text" name="new[]" readonly value="'. $campo[6] .'"/>';
			echo '<label class="has-tip tip-top " id="genera_l" title="Presione el botón para generar una contraseña aleatoria">Generar Contraseña</label>';
			echo '
			
			<!-- Postfix action -->
			<div class="row collapse">
  			<div class="ten mobile-three columns">
			<input type="password" readonly name="genera" id="genera"/>
  			</div>
  			<div class="two mobile-one columns">
			<input class="button expand postfix" type="button" value="Generar" onclick="generarPassword(this.form);">
    		</div>
			<input type="hidden" name="new_user" value="'. $_GET['accion'] .'"/>
			
			</div>
			<small class="left" id="genera_s"></small>
			';
			
			
			echo '<button class="button right success" name="accion" id="accion" value="crear_cuenta">Crear Cuenta</button>';
			echo '</fieldset>';
			echo '</form>';
			
		}
		
	?>

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