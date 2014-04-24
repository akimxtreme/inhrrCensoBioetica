<?php 
session_start();
session_destroy();
?>

<?php 
include('funciones/funciones.php');

doctype();
head('Cerrar Sesión');
echo '<div class="row">';
echo' <div class="alert-box success">Se ha Cerrado la Sesión<a href="" class="close">&times;</a></div> ';
echo '<a class="button" href="index.php#simple3" title="Volver a la Página Principal">Volver a la Página Principal</a>';
echo '</div>';
?>
