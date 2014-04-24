<?php
include_once("funciones/funciones.php");
$codigo = $_GET['value'];
$asociado = $_GET['asoc'];
$dependiente = $_GET['depen'];
$ajax = $_GET['depen'];
$dependiente = 'cod_' . $dependiente . '=';
$titulo_tipo_establecimiento="Seleccione una opción de acuerdo con la razón social institucional";//
	
function large($tamanio){
	$large2= array(
					0,
					14,
					28,
					42,
					57,
					71,
					85,
					100,
					114,
					128,
					142,
					157		
					);
	for($i=0;$i<=$large2[$tamanio];$i++){
					echo '-';
	}
}
switch($ajax){
	case  "naturaleza" :
	$js= "'".$asociado."'";
	$js_ajax= "select" . $asociado ."(this.value);";
	if($codigo!="Seleccione..."){

		echo '<label for="'. $asociado .'_l" class="has-tip tip-top" id="'. $asociado .'_l" data-width="200" title="Tipo de Establecimiento">Tipo de Establecimiento</label>';
		echo '<select style="display:none;" name="'. $asociado .'" title="Tipo de Establecimiento" id="'. $asociado .'" onchange="validar_unico('. $js .');'. $js_ajax .'">';
				
			include('conexion.php');
			
			$sql='SELECT * FROM '. $asociado .' WHERE ' . $dependiente . $codigo;
			
			$seleccion=mysql_query($sql,$conexion);
				while ($row = mysql_fetch_array($seleccion)){
					$campo_1=$row[0];
					$campo_2=$row[2];
					echo '<option value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</option>';
					
					
				}	echo '<option value="Otros">Otros</option>';
					echo '<option SELECTED value="Seleccione...">';
				for($i=1;$i<=71;$i++){
					echo '-';
					}
					echo '</option>';
				
			echo '</select>';
			echo '<div class="custom dropdown">';
			echo '<a href="#" class="current"></a>';
			echo '<a href="#" class="selector"></a>';
			echo '<ul>';
			$seleccion=mysql_query($sql,$conexion);
					while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row[0];
						$campo_2=$row[2];
						echo '<li value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</li>';
						
					}	echo '<li value="Otros">Otros</li>';
						echo '<li value="Seleccione...">';
						for($i=0;$i<=71;$i++){
						echo '-';
						}
					echo '</li>';
			
			echo '</ul>';
			echo '</div>';
			echo '<small id="'. $asociado .'_s"></small>';
			
		}else{
			echo '<label for="'. $asociado .'_l" class="has-tip tip-top" id="'. $asociado .'_l" data-width="200" title="Tipo de Establecimiento">Tipo de Establecimiento</label>';
		echo '<select style="display:none;" name="'. $asociado .'" title="Tipo de Establecimiento" id="'. $asociado .'" onchange="validar_unico('. $js .');">';
			//echo '<option value="Otros">Otros</option>';
			echo '<option SELECTED value="Seleccione...">';
				for($i=1;$i<=71;$i++){
					echo '-';
					}
			echo '</option>';
				
			echo '</select>';
			echo '<div class="custom dropdown">';
			echo '<a href="#" class="current"></a>';
			echo '<a href="#" class="selector"></a>';
			echo '<ul>';
				//echo '<li value="Otros">Otros</li>';
				echo '<li value="Seleccione...">';
					for($i=0;$i<=71;$i++){
					echo '-';
					}
				echo '</li>';
			
			echo '</ul>';
			echo '</div>';
			echo '<small id="'. $asociado .'_s"></small>';
			}
	
	break;
		
	case "tipo_establecimiento" :
	switch ($codigo){
		case 'Seleccione...':
		
		break;
		case 'Otros':
		text("Otros especifique","has-tip tip-top","otro_tipo","otro_tipo",'Seleccione en caso de que las opciones anteriores que se presentan no se corresponden con la institución que censa',1,'text');
		text("Nombre de la Institución","has-tip tip-top","nombre_institucion",'nombre_institucion','Nombre Completo de la Institución que censa',1,'text');
		break;
		default:
		$js1 = "'nombre_institucion'";
		echo '<div class="twelve" id="nombre_institucion_d">';
		echo '<label for="nombre_institucion_l" class="has-tip tip-top" id="nombre_institucion_l" data-width="200" title="Tipo de Establecimiento">Nombre de la Institución</label>';
		echo '<select style="display:none;" name="nombre_institucion" title="Tipo de Establecimiento" id="nombre_institucion" onchange="validar_unico('. $js1 .');">';
				
			include('conexion.php');
			
			$sql='SELECT * FROM nombre_institucion';
			
			$seleccion=mysql_query($sql,$conexion);
				while ($row = mysql_fetch_array($seleccion)){
					$campo_1=$row[0];
					$campo_2=$row[2];
					echo '<option value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</option>';
					
					
				}	//echo '<option value="Otros">Otros</option>';
					echo '<option SELECTED value="Seleccione...">';
				for($i=1;$i<=157;$i++){
					echo '-';
					}
					echo '</option>';
				
			echo '</select>';
			echo '<div class="custom dropdown">';
			echo '<a href="#" class="current"></a>';
			echo '<a href="#" class="selector"></a>';
			echo '<ul>';
			$seleccion=mysql_query($sql,$conexion);
					while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row[0];
						$campo_2=$row[2];
						echo '<li value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</li>';
						
					}	//echo '<li value="Otros">Otros</li>';
						echo '<li value="Seleccione...">';
						for($i=0;$i<=157;$i++){
						echo '-';
						}
					echo '</li>';
			
			echo '</ul>';
			echo '</div>';
			echo '<small id="nombre_institucion_s"></small>';
		echo '</div>';
		
		}
	
	break;
	case  "estado" :
		
	$js= "'".$asociado."'";
	$js_ajax= "select" . $asociado ."(this.value);";
	if($codigo!="Seleccione..."){

		echo '<label for="'. $asociado .'_l" class="has-tip tip-top" id="'. $asociado .'_l" data-width="200" title="Seleccione el Municipio">Municipio</label>';
		echo '<select style="display:none;" name="'. $asociado .'" title="Municipio" id="'. $asociado .'" onchange="validar_unico('. $js .');'. $js_ajax .'">';
				
			include('conexion.php');
			
			$sql='SELECT * FROM '. $asociado .' WHERE ' . $dependiente . $codigo;
			
			$seleccion=mysql_query($sql,$conexion);
				while ($row = mysql_fetch_array($seleccion)){
					$campo_1=$row[0];
					$campo_2=$row[4];
					echo '<option value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</option>';
					
					
				}	//echo '<option value="Otros">Otros</option>';
					echo '<option SELECTED value="Seleccione...">';
				for($i=1;$i<=42;$i++){
					echo '-';
					}
					echo '</option>';
				
			echo '</select>';
			echo '<div class="custom dropdown">';
			echo '<a href="#" class="current"></a>';
			echo '<a href="#" class="selector"></a>';
			echo '<ul>';
			$seleccion=mysql_query($sql,$conexion);
					while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row[0];
						$campo_2=$row[4];
						echo '<li value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</li>';
						
					}	//echo '<li value="Otros">Otros</li>';
						echo '<li value="Seleccione...">';
						for($i=0;$i<=42;$i++){
						echo '-';
						}
					echo '</li>';
			
			echo '</ul>';
			echo '</div>';
			echo '<small id="'. $asociado .'_s"></small>';
			
		}else{
			echo '<label for="'. $asociado .'_l" class="has-tip tip-top" id="'. $asociado .'_l" data-width="200" title="Seleccione el Municipio">Municipio</label>';
		echo '<select style="display:none;" name="'. $asociado .'" title="Municipio" id="'. $asociado .'" onchange="validar_unico('. $js .');">';
			//echo '<option value="Otros">Otros</option>';
			echo '<option SELECTED value="Seleccione...">';
				for($i=1;$i<=42;$i++){
					echo '-';
					}
			echo '</option>';
				
			echo '</select>';
			echo '<div class="custom dropdown">';
			echo '<a href="#" class="current"></a>';
			echo '<a href="#" class="selector"></a>';
			echo '<ul>';
				//echo '<li value="Otros">Otros</li>';
				echo '<li value="Seleccione...">';
					for($i=0;$i<=42;$i++){
					echo '-';
					}
				echo '</li>';
			
			echo '</ul>';
			echo '</div>';
			echo '<small id="'. $asociado .'_s"></small>';
			}
	
	
		
	break;
	case "municipio":
	$js= "'".$asociado."'";
	$js_ajax= "select" . $asociado ."(this.value);";
	if($codigo!="Seleccione..."){

		echo '<label for="'. $asociado .'_l" class="has-tip tip-top" id="'. $asociado .'_l" data-width="200" title="Seleccione la Ciudad o Parroquia">Ciudad</label>';
		echo '<select style="display:none;" name="'. $asociado .'" title="Ciudad" id="'. $asociado .'" onchange="validar_unico('. $js .');'. $js_ajax .'">';
				
			include('conexion.php');
			
			$sql='SELECT * FROM '. $asociado .' WHERE ' . $dependiente . $codigo;
			
			$seleccion=mysql_query($sql,$conexion);
				while ($row = mysql_fetch_array($seleccion)){
					$campo_1=$row[0];
					$campo_2=$row[4];
					echo '<option value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</option>';
					
					
				}	//echo '<option value="Otros">Otros</option>';
					echo '<option SELECTED value="Seleccione...">';
				for($i=1;$i<=42;$i++){
					echo '-';
					}
					echo '</option>';
				
			echo '</select>';
			echo '<div class="custom dropdown">';
			echo '<a href="#" class="current"></a>';
			echo '<a href="#" class="selector"></a>';
			echo '<ul>';
			$seleccion=mysql_query($sql,$conexion);
					while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row[0];
						$campo_2=$row[4];
						echo '<li value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</li>';
						
					}	//echo '<li value="Otros">Otros</li>';
						echo '<li value="Seleccione...">';
						for($i=0;$i<=42;$i++){
						echo '-';
						}
					echo '</li>';
			
			echo '</ul>';
			echo '</div>';
			echo '<small id="'. $asociado .'_s"></small>';
			
		}else{
			echo '<label for="'. $asociado .'_l" class="has-tip tip-top" id="'. $asociado .'_l" data-width="200" title="Seleccione la Ciudad o Parroquia">Ciudad</label>';
		echo '<select style="display:none;" name="'. $asociado .'" title="Ciudad" id="'. $asociado .'" onchange="validar_unico('. $js .');">';
			//echo '<option value="Otros">Otros</option>';
			echo '<option SELECTED value="Seleccione...">';
				for($i=1;$i<=42;$i++){
					echo '-';
					}
			echo '</option>';
				
			echo '</select>';
			echo '<div class="custom dropdown">';
			echo '<a href="#" class="current"></a>';
			echo '<a href="#" class="selector"></a>';
			echo '<ul>';
				//echo '<li value="Otros">Otros</li>';
				echo '<li value="Seleccione...">';
					for($i=0;$i<=42;$i++){
					echo '-';
					}
				echo '</li>';
			
			echo '</ul>';
			echo '</div>';
			echo '<small id="'. $asociado .'_s"></small>';
			}
	
	
		
	break;
		
		/*
	echo $codigo;
	echo $asociado;
	echo $dependiente;
	echo $ajax;
		*/
}
?>