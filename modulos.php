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
head('Módulos de Administrador');

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