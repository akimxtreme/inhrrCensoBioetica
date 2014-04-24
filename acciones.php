<?php
session_start();
?>
<?php
include("funciones/funciones.php");
doctype();
head('');
echo '<div class="row">';
//Acciones
$accion = $_POST['accion'];

switch($accion){
	
	case 'solicitar_cuenta':
	include_once('conexion.php');
	$var = array(
				$_POST['nombre'],
				$_POST['apellido'],
				$_POST['cedula'],
				$_POST['nacionalidad'],
				$_POST['correo'],
				$_POST['telefono'],
				date("Y-m-d"),
				date("h:i:s")			
				);
	$campo = array(
				 'nombre',
				 'apellido',
				 'cedula',
				 'nacionalidad',
				 'correo',
				 'telefono',
				 'fecha',
				 'hora'			
				);
				
				$sql = 'SELECT * FROM solicitud WHERE cedula="'.$var[2].'"';
				$action= mysql_query($sql,$conexion);
				$cont=mysql_num_rows($action);
				
				if($cont>=1){
					echo' <div class="alert-box success">     
  	La Solicitud de Cuenta para el Sistema del Censo Nacional de Bioética se ha Enviado Exitosamente
  						  <a href="" class="close">&times;</a>   
  						  </div> ';
					echo '<a class="button" href="index.php" title="Volver a la Página Principal">Volver a la Página Principal</a>';
					}else{
						$sql = 'SELECT * FROM usuarios WHERE cedula="'.$var[2].'"';
						$action= mysql_query($sql,$conexion);
						$cont=mysql_num_rows($action);
						
						if($cont>=1){
							echo' <div class="alert-box success">     
  	La Solicitud de Cuenta para el Sistema del Censo Nacional de Bioética se ha Enviado Exitosamente
  						  <a href="" class="close">&times;</a>   
  						  </div> ';
					echo '<a class="button" href="index.php" title="Volver a la Página Principal">Volver a la Página Principal</a>';
							}else{
								$sql = 'INSERT INTO solicitud (nombre,apellido,cedula,nacionalidad,correo,telefono,fecha,hora) VALUE ("'. $var[0].'","'.$var[1].'","'.$var[2].'","'.$var[3].'","'.$var[4].'","'.$var[5].'","'.$var[6].'","'.$var[7].'")';
								$action= mysql_query($sql,$conexion);
								echo' <div class="alert-box success">     
					La Solicitud de Cuenta para el Sistema del Censo Nacional de Bioética se ha Enviado Exitosamente
										  <a href="" class="close">&times;</a>   
										  </div> ';
					
									echo '<table class="custom six columns centered">';
									//echo '<caption>DATOS INGRESADOS</caption>';
									for($i=0;$i<count($var);$i++){
										echo '<tr>';
										echo '<th>' .$campo[$i] . ': </th>';
										echo '<td>'.$var[$i] . '</td>';
										echo '</tr>';
									}
									echo '<a class="button" href="index.php" title="Volver a la Página Principal">Volver a la Página Principal</a>';
									echo '</table>';
								}
				
				
					}
				break;
	case 'acceso':
	include_once('conexion.php');
	$var = array(
				$_POST['usuario'],
				$_POST['password']				
				);
				$var[1] = md5 ($var[1]); 
				$sql = 'SELECT * FROM usuarios WHERE cedula="'.$var[0].'" AND contrasenia="'.$var[1].'"';
				$action= mysql_query($sql,$conexion);
				$cont=mysql_num_rows($action);
				if($cont>=1){
						while ($row = mysql_fetch_array($action)){
								$nombre 	= $row[1];
								$apellido 	= $row[2];
								$privilegio = $row[8];
								$estatus = $row[9];
						}
						mysql_close();									
								$fullname = $nombre . ", " . $apellido;
								
								$_SESSION['fullname'] = $fullname;
								$_SESSION['privilegio'] = $privilegio;
															
						
						if($estatus!=1){
							echo' <div class="alert-box alert ">Sr(a) '. $fullname .' su Cuenta se encuentra temporalmente suspendida<br><br>Disculpe las molestias ocasionadas<a href="" class="close">&times;</a></div> ';
							echo '<a class="button" href="index.php#simple3" title="Volver a la Página Principal">Volver a la Página Principal</a>';
							}else {
								
								echo '<html><head><meta http-equiv="REFRESH" content="0; url=censo.php"></head></html>';
								 }
					
					
					}else{ 
					$sql = 'SELECT * FROM administradores WHERE cedula="'.$var[0].'" AND contrasenia="'.$var[1].'"';
					$action= mysql_query($sql,$conexion);
					$cont=mysql_num_rows($action);
						if($cont>=1){
							while ($row = mysql_fetch_array($action)){
									$nombre 	= $row[1];
									$apellido 	= $row[2];
									$privilegio = $row[8];
									
							}
							mysql_close();									
									$fullname = $nombre . ", " . $apellido;
									
									$_SESSION['fullname'] = $fullname;
									$_SESSION['privilegio'] = $privilegio;
								echo '<html><head><meta http-equiv="REFRESH" content="0; url=modulos.php"></head></html>';
						}else{
							echo' <div class="alert-box alert centered">Cédula y/o Clave incorrecta <a href="" class="close">&times;</a></div> ';
							echo '<a class="button" href="index.php#simple3" title="Volver a la Página Principal">Volver a la Página Principal</a>';
							}
						
					
					}
	break;
	case 'censar_comite':
	echo '<h1>Comités de Bioética</h1>';
	function datos($variable){
		$_POST[$variable];
	}
		
	function act($variable,$nombre){
		$_POST[$variable];
	}
	function imprimir($variable){echo 'Campo <strong>' . $variable  . '</strong>: ' . $_POST[$variable] . '<br>';}
	function imprimir2($variable,$numero){echo 'Campo <strong>' . $variable  . $numero . '</strong>: ' . $_POST[$variable][$numero]. '<br>';}
	function imprimir3($variable,$nombre){echo 'Campo <strong>' . $nombre . '</strong>: ' . $_POST[$variable]. '<br>';}
	// VARIABLES
	$naturaleza 			= datos('naturaleza'); 							imprimir('naturaleza');
	$tipo_establecimiento   = $_POST['tipo_establecimiento'];
		if($tipo_establecimiento=="Otros"){
			$tipo_establecimiento = datos('otros');							imprimir3('otros','tipo_establecimiento');}
			else{
				$tipo_establecimiento = datos('tipo_establecimiento');		imprimir('tipo_establecimiento');
				}
	
	$nombre_institucion 	= datos('nombre_institucion'); 					imprimir('nombre_institucion');
	$estado 				= datos('estado');								imprimir('estado');
	$municipio 				= datos('municipio');							imprimir('municipio');
	$ciudad 				= datos('ciudad');								imprimir('ciudad');
	$sector 				= datos('sector');								imprimir('sector');
	$calle 					= datos('calle');								imprimir('calle');
	$telefono 				= datos('telefono');							imprimir('telefono');
	$fax	 				= datos('fax');									imprimir('fax');
	$correo	 				= datos('correo');								imprimir('correo');
	$pagina_web				= datos('pagina_web');							imprimir('pagina_web');
		$docencia			= act('act_1','docencia');						imprimir3('act_1','docencia');
		$investigacion		= act('act_2','investigacion');					imprimir3('act_2','investigacion');
		$asistencial		= act('act_3','asistencial');					imprimir3('act_3','asistencial');
		$otra				= act('act_4','otra');							imprimir3('act_4','otra');
		//echo 'Campo <strong>' . $_POST['asoc_3'][0]  . '</strong>: ' . $_POST['asoc_3'][0];
echo "<pre>";
print_r($_POST);
echo "</pre>"; 
echo count($_POST);
echo '<br>';

$array = count($_POST['nombre_m']);
/*
for($i=0;$i<$array;$i++){
	$j = $i + 1;
	echo $j . " ) - ";
	echo $_POST['nombre_m'][$i] . " - ";
	echo $_POST['apellido_m'][$i] . " - ";
	echo $_POST['cedula_m'][$i] . " - ";
	echo $_POST['profesion_m'][$i] . " - ";
	echo $_POST['telefono_m'][$i] . " - ";
	echo $_POST['correo_m'][$i] . " <br><br> ";
	}
*/
/*
for($i=0;$i<$array;$i++){
	$j = $i + 1;
	echo $j . " ) - ";
	echo $_POST['prueba'][$i] . " <br><br> ";
	}
*/

	break;
	case 'crear_cuenta':
	$campos_g = array (
					$_POST['genera'],
					$_POST['new_user'],
					date("Y-m-d"),
					date("h:i:s")	
						 );
	include_once('conexion.php');
	$sql = "SELECT cedula FROM usuarios WHERE cedula =". $_POST['new'][2];
	$action= mysql_query($sql,$conexion);
	$cont=mysql_num_rows($action);
	if($cont>=1){
		// USUARIO YA REGISTRADO EN EL SISTEMA
		echo' <div class="alert-box alert">El Usuario ya se encuentra registrado en el Sistema<a href="" class="close">&times;</a></div> ';
		echo '<a class="button" href="solicitudes.php" title="Volver a la Página Principal">Volver a Solicitudes</a>';	
		}else{
		// CREACION DE USUARIO 
		$sql = "INSERT INTO usuarios (nombre, apellido , cedula , nacionalidad, correo, telefono, contrasenia, privilegio, estatus, fecha, hora) VALUE ('". $_POST['new'][0] ."', '". $_POST['new'][1] ."', '". $_POST['new'][2] ."', '". $_POST['new'][3] ."', '". $_POST['new'][4]."', '". $_POST['new'][5] ."', '". md5($campos_g[0]) ."',  ". '1' .",  ". '1' .",  '". $campos_g[2] ."', '". $campos_g[3] . "')";
		$action= mysql_query($sql,$conexion);
		
		// ELIMINA LA SOLICITUD
		$sql = "DELETE FROM solicitud WHERE id=". $campos_g[1];
		$action= mysql_query($sql,$conexion);
		mysql_close();
  		echo' <div class="alert-box success">Creación de Cuenta Exitosa<a href="" class="close">&times;</a></div> ';
		echo '<a class="button" href="solicitudes.php" title="Volver a la Página Principal">Volver a Solicitudes</a>';
		
		// ENVIA AL MAIL
		
			//$para = "akimxtreme.dj@gmail.com";
			$para = "msenadora@gmail.com";
			$subject = "Contraseña Sistema Censo Nacional de Bioética";
			$headers = 'From: ' . "dilarreta@inhrr.gob.ve" . " \r\n";
				$headers .= "X-Mailer: PHP/" . phpversion() . " \r\n";
				$headers .= "Mime-Version: 1.0 \r\n";
				$headers .= "Content-Type: text/html\r\n";
				$message ='
				 			<div style=" padding: 10px; width: 400px; margin:auto;  border-radius: 4px; border: #CCC solid 2px; background:#FFFFFF; box-shadow: 0px 0px 3px #333333; color: #FFFFFF;">
       			  <div>
				  		<div align="center">----------------------------------------------------------------------</div>
            		<div><h1 style=" font-size:18px; color:#333333; " align="center" > DATOS DEL SOLICITANTE</h1></div>
						<div align="center">----------------------------------------------------------------------</div>
           			<div style="color:#333333;">Nombre(s): <span style="color:#999999;">'	. $_POST['new'][0] .'</span></div>
            		<div style="color:#333333;">Apellido(s): <span s style="color:#999999;">'. $_POST['new'][1] .'</span></div>
					<div style="color:#333333;">Cedula de Identidad: <span  style="color:#999999;">'. $_POST['new'][2] .'</span></div>
					<div style="color:#333333;">Nacionalidad: <span  style="color:#999999;">'. $_POST['new'][3] .'</span></div>
					<div style="color:#333333;">Correo: <span  style="color:#999999;">'. $_POST['new'][4] .'</span></div>
					<div style="color:#333333;">Telefono: <span  style="color:#999999;">'. $_POST['new'][5] .'</span></div>
                   </div>
				
				   <div class=\"contentPasos\">
				   	<div align="center">----------------------------------------------------------------------</div>
					<div><h1 style=" font-size:18px; color:#333333; " align="center" >DATOS PARA EL ACCESO AL SISTEMA</h1></div>
            		<div align="center">----------------------------------------------------------------------</div>
           			<div style="color:#333333;">Cedula: <span  style="color:#999999;">'	. $_POST['new'][2] .'</span></div>
            		<div style="color:#333333;">Contraseña: <span  style="color:blue;">'. $campos_g[0] .'</span></div>
				   </div>
				 </div>
	   			</body>
			</html>';
			
			$de = "Censo Nacional de Comités de Bioética - Acceso al Sistema";
			mail($para,$de,$message,$headers);
			echo $message;
		
	}
	break;
	default:
	echo 'Sin Acciones';
	
	}
echo '</div>';
js_comments();
?>

</body>
</html>