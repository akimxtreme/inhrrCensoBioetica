<?php
//////////////////////////////////////////////////
/*
Autor: Ilarreta H. Domingo J.
Fecha: 04-02-2013
*/
/////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function consulta_rapida($tabla){
			include "conexion.php";
			
			if($tabla=='nacionalidad'){
			$sql="SELECT * FROM nacionalidad";
			$seleccion=mysql_query($sql,$conexion);
				while ($row = mysql_fetch_array($seleccion)){
					$campo_1=$row["nacionalidad"];
					$campo_2=$row["descripcion"];
					echo '<option value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_1 .'</option>';
				}echo'<option SELECTED>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</option>';
			}
			if($tabla=='nacionalidad_2'){
			echo'<div class="custom dropdown">
            <a href="#" class="current">Seleccione...</a>
            <a href="#" class="selector"></a>
            <ul>';
                
                include('conexion.php');
                $sql="SELECT * FROM nacionalidad";
                $seleccion=mysql_query($sql,$conexion);
                    while ($row = mysql_fetch_array($seleccion)){
                        $campo_1=$row["nacionalidad"];
                        $campo_2=$row["descripcion"];
                        echo '<li title="'. $campo_2 .'">'. $campo_1 .'</li>';
                    }
             echo'</ul>
  		</div>';
			}
			
			//echo "<option>Seleccione...</option>";
			/*// Selecciona de la tabla seccion los items disponibles   
				////////
				if($tabla=="nacionalidad"){
						$sql="SELECT * FROM nacionalidad";
						$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row["nacionalidad"];
						$campo_2=$row["descripcion"];
						echo '<option value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_1 .'</option>';
						}
						//echo '<option SELECTED>'; for ($i=0; $i<="40";$i++) {echo "- ";} echo '</option>';
				*/
						/*echo '<div class="custom dropdown">
    							<a href="#" class="current">Seleccione...</a>
	    						<a href="#" class="selector"></a>
								<ul>';
						$sql="SELECT * FROM $tabla ORDER BY nacionalidad";
						$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
						$campo_1=$row["nacionalidad"];
						$campo_2=$row["descripcion"];
						
						echo '<li>'. $campo_1 .'</li>';
						}echo '</ul></div>';
						
	  						
				}*/
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function doctype(){
	// DOCTYPE
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
	echo '<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->';
	echo '<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->';
	echo '<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->';
	echo '<!--[if gt IE 8]><!--><html class="no-js" lang="en" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->';
	}
function head($title){
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	//<!-- Set the viewport width to device width for mobile -->
	echo '<meta name="viewport" content="width=device-width" />';
	// Icono
	echo '<link rel="icon" href="../images/bioetica.png"/>';
	// Título
		// Si la Variable $tituto es vacia.
		if($title==""){
			$title="Censo Nacional de Comités de Bioética";
			}
	echo '<title>'.$title.'</title>';
	// <!-- Estilos fuera del Framework -->
	echo '<link rel="stylesheet" href="stylesheets/global.css">';
	// <!-- Included CSS Files (Uncompressed) -->
	/*
	<!--
  		<link rel="stylesheet" href="stylesheets/foundation.css">
 	-->
  	*/
	// <!-- Included CSS Files (Compressed) -->
	echo '<link rel="stylesheet" href="stylesheets/foundation.min.css">';
	echo '<link rel="stylesheet" href="stylesheets/app.css">';
	// Javascripts
	echo'<script src="javascripts/modernizr.foundation.js"></script>';
	echo'<script src="javascripts/funciones.js"></script>';
	echo'<script src="javascripts/jquery.foundation.forms.js"></script>';
	echo '</head>';
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function cintillo(){
	echo '
	<div class="row">
		<div class="twelve columns">
			<img class="barra_gris" title="Cintillo del Gobierno Bolivariano" alt="Cintillo del Gobierno Bolivariano" src="images/cintillo_gobierno_bolivariano.png" />
		</div>
	</div>';
	}
	
function banner(){
	echo'
	<div class="row">
		<div class=" twelve columns">
    		<div class="panel">
      			<h2 class="text-center"><a href="#">Censo Nacional de Comités de Bioética</a></h2>
        	</div>
  		</div>
	</div>';
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function menu($tipo){
	switch ($tipo){
		case 'FULL':
		
		
	echo'
	<!-- Header and Nav -->

  <nav class="top-bar">
    <ul>
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="modulos.php" title="Principal">
            Principal
          </a>
        </h1>
      </li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>

    <section>
      <!-- Left Nav Section -->
      <ul class="left">
        <li class="divider"></li>
        <li class="has-dropdown">
          <a class="active" href="#">Cuentas</a>
          <ul class="dropdown">
            <li><label>SOLICITUDES</label></li>
            <li><a href="solicitudes.php" class="">Consultar Solicitudes &raquo;</a></li>
            <li class="divider"></li>
            <li><label>REGISTRADOS</label></li>
            <li><a href="#">Consultar Cuentas &raquo;</a></li>
            <li class="divider"></li>
            
          </ul>
        </li>
        
        <li class="divider"></li>
        <li class="has-dropdown">
          <a class="active" href="#">Cómites de Bioética</a>
          <ul class="dropdown">
            <li><label>CENSO</label></li>
            <li><a href="#" class="">Consultar Comités de Bioética &raquo;</a></li>
            <li class="divider"></li>
          </ul>
        </li>
       
        <li class="divider"></li>
        
        
      </ul>

      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Configuración</a>
          <ul class="dropdown">
          <li><label>USUARIO</label></li>
            <li><a href="destruir.php" title="Cerrar sesión">Cerrar sesión</a></li>
            <li class="divider"></li>        
          </ul>
        </li>
      </ul>
    </section>
</nav>
	
	';
	break;
	case 'BASIC':
		
	echo'
	<!-- Header and Nav -->

  <nav class="top-bar">
    <ul>
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="censo.php" title="Principal">
            Principal
          </a>
        </h1>
      </li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>

    <section>
      <!-- Left Nav Section -->
      
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Configuración</a>
          <ul class="dropdown">
          <li><label>USUARIO</label></li>
            <li><a href="destruir.php" title="Cerrar sesión">Cerrar sesión</a></li>
            <li class="divider"></li>        
          </ul>
        </li>
      </ul>
    </section>
</nav>
	
	';
	break;
	}
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function pie(){
	echo'
	<div class="row">
		<div class="twelve columns">
    		<div class="panel callout radius">
      		
        	</div>
  		</div>
	</div>';

	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// <><><><>  Funtcion Global Para el Formulario de INICIO <><><><><><><><><><><><><><><><><><><><><><>
function formulario_inicio($titulo,$css,$name_id,$action,$method,$onsubmit,$enctype,$css_legend){
	/* formulario 7 variables:
			1)  $titulo = Titulo del Formulario   --- Ej: Ingreso al Sistema ---
			2)  $css = Clase de los Estilos CSS para las etiquetas <form>, --- Ej: formularios ---
			3)  $name_id = nombre y id para la etiqueta <form> 	--- Ej: formulario_de_ingreso ---
			4)  $action = Acción que se le da al Formulario  --- Ej: acciones.php
			5)  $method = Indica el Tipo de metodo que tendra el formulario  --- Ej: GET  ó  POST ---
			6)  $onsubmit = Para asignar la función de Validación en el Lenguaje de Eventos "Javascript"  --- Ej: validacion(this); no Hace falta color return ya que está agregado en la función. ---
			7)  $enctype = Se llena siempre y cuando el formulario cuenta con etiquetas de tipo <file> "Adjuntar Archivos"  --- Ej: multipart/form-data ---
			8)  $css_legend = Clase de los Estilos CSS para las etiquetas <legend>, --- Ej: formularios ---
			
	*/
	$js_name_id="'".$name_id."'"; // para los eventos javascript ej: oblur('name_id');
	$valida = 'formularios('. $js_name_id .');';
	echo '<form';
	if($css!=""){echo ' class="'. $css .'"'; }
	if($name_id!=""){echo ' id="'. $name_id .'" name="'. $name_id .'"'; }
	if($action!=""){echo ' action="'. $action .'"'; }
	if($method!=""){echo ' method="'. $method .'"'; }
	if($valida!=""){echo ' onsubmit="return '. $valida .'"'; }
	if($enctype!=""){echo ' onsubmit="'. $valida .'"'; }
	echo '>';
	echo '<fieldset>';
	echo '<legend class="'. $css_legend .'" title="'. $titulo .'">'. $titulo .'</legend>';
}// <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>

// <><><><>  Function Global Para el Formulario de CIERRE <><><><><><><><><><><><><><><><><><><><><><><><><><><><>
function formulario_cierre ($titulo,$name_id){
	//echo'<h3 class="campo_obligatorio"><strong class="campo_obligatorio">*</strong>Campo Obligatorio</h3>';
	echo '<button name="accion" id="'. $name_id .'" class="button right" value="'. $name_id .'">'. $titulo .'</button>';
	echo '</fieldset>';
	echo '</form>';
	}// <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>
// <><><><>  Function Global Para las Etiquetas Type TEXT <><><><><><><><><><><><><><><><><><><><><><><><><><><><>
function text($titulo,$class,$name_id,$onblur,$ayuda,$caracteres,$type){
	$l_label = $name_id . "_l"; // id del <label>
	$s_small = $name_id . "_s"; // id del <small>
	$js_name_id="'".$name_id."'"; // para los eventos javascript ej: oblur('name_id');
	$valida = 'validar_unico('. $js_name_id .');';
	$correo = "return correo_electronico(this);";
		/* Etiqueta input type="TEXT" 11 variables:
				1)  $titulo = Titulo del campo en la Etiqueta <label>   --- Ej: Nombre ---
				2)  $class = Clase de los Estilos CSS para las etiquetas <label> --- Ej: formularios ---
				3)  $name_id = nombre y id para la etiqueta <input> 	--- Ej: nombre_completo ---
				4)  $onblur = Atributo que trabaja en conjunto con la validación de ayuda que proporciona "Javascript", se coloca la función + el name ó id del campo  --- Ej: solo_numeros('nombre_completo');
				6)  $maxlength = Para asignar la cantidad de caracteres que puede ingresar en el campo  --- Ejemplos: "" ó "5" (Cinco "5" = Cantidad de Caracteres)---
				7)  $disabled = Atributo para desactivar el campo  --- Ej: disabled ---
				8)  $readonly = Atributo para mostrar los valores del atributo value en forma de consulta  --- Ej: readonly ---
				9)  $numero_letra = Variable que indica si el campo acepta:
														a) Todos los caracteres --- Ej: ($numero_letra ="") ---
														b) Letras --- Ej: ($numero_letra ="1") ---
														c) Números --- Ej: ($numero_letra ="2") ---
				10) $id_div = Para asignar propiedades CSS únicas a la etiqueta <div>  --- Ej: div_estilos ---
				11) $id_label = Para asignar propiedades CSS únicas a la etiqueta <label>  --- Ej: label_estilos ---
				
		*/
		// Atributos para <label>
		$label_inicio = '<label';
			$class_l 		= ' class="'. $class. '"';
			$id_l 			= ' id="'. $l_label. '"';
			$data_width 	= ' data-width="200"';
			$title_l	 	= ' title="'. $ayuda. '"';
		$label_fin	 	= ' >' . $titulo. '</label>';
		////////////////////////////////////////////////////////////////////
		$label = $label_inicio . $class_l . $id_l . $data_width . $title_l . $nombre_l . $label_fin; 
		////////////////////////////////////////////////////////////////////
		// Atributos para <input>
		$input_inicio = '<input';
			$placeholder_inp 	= ' placeholder="Ingrese..."';
			$alt_inp 			= ' alt="'. $ayuda. '"';
			$id_inp 			= ' id="'. $name_id. '"';
			$name_inp 			= ' name="'. $name_id. '"';
			$type_inp 			= ' type="'. $type. '"';
			$onblur_inp 		= ' onblur="'. $valida. '"';
			switch($onblur){
				case '(*)':
				$onblur_inp 		= ' onblur="'. $valida. '"';
				break;
				case 'correo(*)';
				$onblur_inp 		= ' onblur="'. $valida. ' ' .$correo .'"';
				break;
				case 'correo()':
				$onblur_inp 		= ' onblur="'. $correo .'"';
				break;
				case '':
				$onblur_inp 		= ' ';
				break;
				default:
								
				}
						
			switch($caracteres){
				case 0 : 
				// 0 = Solo números
				$onkeypress_inp 	= ' onkeypress="return solonumeros(event);"';
				break;
				
				case 1 : 
				// 1 = Solo letras y espacios
				$onkeypress_inp 	= ' onkeypress="return sololetras(event);"';
				break;
				
				case 2 : 
				// 2 = Solo letras y espacios
				$onkeypress_inp 	= ' ';
				break;
				
				default:
				echo '';
							
			}
			
		$input_fin = '>';
		////////////////////////////////////////////////////////////////////
		$input = $input_inicio . $placeholder_inp . $alt_inp . $id_inp . $name_inp . $type_inp . $onblur_inp . $onkeypress_inp . $input_fin;
		////////////////////////////////////////////////////////////////////
		
		// Atributos para <small>
		$small_inicio = '<small';
			$id_sml 	= ' id="'. $s_small. '"';
		$small_fin = '></small>';
		////////////////////////////////////////////////////////////////////
		$small = $small_inicio . $id_sml . $small_fin;
		////////////////////////////////////////////////////////////////////
		echo $label . $input . $small;
		
		
}
function textarea($titulo,$class,$name_id,$onblur,$ayuda,$caracteres){
	$l_label = $name_id . "_l"; // id del <label>
	$s_small = $name_id . "_s"; // id del <small>
	$js_name_id="'".$name_id."'"; // para los eventos javascript ej: oblur('name_id');
	$valida = 'validar_unico('. $js_name_id .');';
	$correo = "return correo_electronico(this);";
		/* Etiqueta input type="TEXT" 11 variables:
				1)  $titulo = Titulo del campo en la Etiqueta <label>   --- Ej: Nombre ---
				2)  $class = Clase de los Estilos CSS para las etiquetas <label> --- Ej: formularios ---
				3)  $name_id = nombre y id para la etiqueta <input> 	--- Ej: nombre_completo ---
				4)  $onblur = Atributo que trabaja en conjunto con la validación de ayuda que proporciona "Javascript", se coloca la función + el name ó id del campo  --- Ej: solo_numeros('nombre_completo');
				6)  $maxlength = Para asignar la cantidad de caracteres que puede ingresar en el campo  --- Ejemplos: "" ó "5" (Cinco "5" = Cantidad de Caracteres)---
				7)  $disabled = Atributo para desactivar el campo  --- Ej: disabled ---
				8)  $readonly = Atributo para mostrar los valores del atributo value en forma de consulta  --- Ej: readonly ---
				9)  $numero_letra = Variable que indica si el campo acepta:
														a) Todos los caracteres --- Ej: ($numero_letra ="") ---
														b) Letras --- Ej: ($numero_letra ="1") ---
														c) Números --- Ej: ($numero_letra ="2") ---
				10) $id_div = Para asignar propiedades CSS únicas a la etiqueta <div>  --- Ej: div_estilos ---
				11) $id_label = Para asignar propiedades CSS únicas a la etiqueta <label>  --- Ej: label_estilos ---
				
		*/
		// Atributos para <label>
		$label_inicio = '<label';
			$class_l 		= ' class="'. $class. '"';
			$id_l 			= ' id="'. $l_label. '"';
			$data_width 	= ' data-width="200"';
			$title_l	 	= ' title="'. $ayuda. '"';
		$label_fin	 	= ' >' . $titulo. '</label>';
		////////////////////////////////////////////////////////////////////
		$label = $label_inicio . $class_l . $id_l . $data_width . $title_l . $nombre_l . $label_fin; 
		////////////////////////////////////////////////////////////////////
		// Atributos para <input>
		$input_inicio = '<textarea';
			$placeholder_inp 	= ' placeholder="Ingrese..."';
			$alt_inp 			= ' alt="'. $ayuda. '"';
			$id_inp 			= ' id="'. $name_id. '"';
			$name_inp 			= ' name="'. $name_id. '"';
			//$type_inp 			= ' type="'. $type. '"';
			$onblur_inp 		= ' onblur="'. $valida. '"';
			switch($onblur){
				case '(*)':
				$onblur_inp 		= ' onblur="'. $valida. '"';
				break;
				case 'correo(*)';
				$onblur_inp 		= ' onblur="'. $valida. ' ' .$correo .'"';
				break;
				case 'correo()':
				$onblur_inp 		= ' onblur="'. $correo .'"';
				break;
				case '':
				$onblur_inp 		= ' ';
				break;
				default:
								
				}
						
			switch($caracteres){
				case 0 : 
				// 0 = Solo números
				$onkeypress_inp 	= ' onkeypress="return solonumeros(event);"';
				break;
				
				case 1 : 
				// 1 = Solo letras y espacios
				$onkeypress_inp 	= ' onkeypress="return sololetras(event);"';
				break;
				
				case 2 : 
				// 2 = Solo letras y espacios
				$onkeypress_inp 	= ' ';
				break;
				
				default:
				echo '';
							
			}
			
		$input_fin = '>';
		$input_fin_2 = '</textarea>';
		////////////////////////////////////////////////////////////////////
		$input = $input_inicio . $placeholder_inp . $alt_inp . $id_inp . $name_inp . $onblur_inp . $onkeypress_inp . $input_fin . $input_fin_2;
		////////////////////////////////////////////////////////////////////
		
		// Atributos para <small>
		$small_inicio = '<small';
			$id_sml 	= ' id="'. $s_small. '"';
		$small_fin = '></small>';
		////////////////////////////////////////////////////////////////////
		$small = $small_inicio . $id_sml . $small_fin;
		////////////////////////////////////////////////////////////////////
		echo $label . $input . $small;
		
		
}// <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function div($div){echo '<div id="'. $div .'">';}
function div_fin(){echo '</div>';}

function select($nombre,$class,$name_id,$title,$tabla,$ajax,$tamanio){
		// (id del <label>) Ej: nombre_l
		$label = $name_id . "_l"; 
		// (id del <small>) Ej: nombre_s
		$small = $name_id . "_s";
		// (id del <div>) Ej: name_d
		$div = $name_id . "_d";
		// (adaptado para el evento Javascript) Ej: 'nombre'
		$js_name_id="'".$name_id."'";
		// (Tamaños del <select>)
		
		if($name_id=="posee"){
			$js_p = "'". $name_id ."'";
			$posee = "posee_bioetica(". $js_p .");";
			}
		$large= array(
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
		$large_class= array(
						'one',
						'two',
						'three',
						'four',
						'five',
						'six',
						'seven',
						'eight',
						'nine',
						'ten',
						'eleven',
						'twelve'
						);	
		// Comprobando que la Variable ($tamanio) sea ==""
		if($tamanio==""){$tamanio=0;}
		if($ajax!=""){
		$ajax = 'select'. $name_id .'(this.value);';
		}
		$valida = 'validar_unico('. $js_name_id .');';
		echo '<div class="'. $large_class[$tamanio] .' columns" id="'. $div .'">';
		echo '<label for="'. $name_id .'" class="'. $class .'" id="'. $label .'" data-width="200" title="'. $title .'">'. $nombre .'</label>';
		
		
			if($tabla!=''){
			if($name_id=="posee"){
				echo '<select style="display:none;" name="'. $name_id .'" title="'. $title .'" id="'. $name_id .'" onchange="'. $posee . $valida . $ajax . '">';	
				}else{
			echo '<select style="display:none;" name="'. $name_id .'" title="'. $title .'" id="'. $name_id .'" onchange="'. $valida . $ajax . '">';	
				}
			include('conexion.php');
			$sql='SELECT * FROM '. $tabla .' ';
			
			$seleccion=mysql_query($sql,$conexion);
				while ($row = mysql_fetch_array($seleccion)){
					$campo_1=$row[0];
					$campo_2=$row[$tabla];
					echo '<option value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</option>';
					
				}	echo '<option SELECTED value="Seleccione...">';
				for($i=1;$i<=$large[$tamanio];$i++){
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
						$campo_2=$row[$tabla];
						echo '<li value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_2 .'</li>';
						echo '<li value="Seleccione...">';
					}for($i=0;$i<=$large[$tamanio];$i++){
					echo '-';
						echo '</li>';
					}
			
			echo '</ul>';
			echo '</div>';
			
			}else{
			echo '<select style="display:none;" name="'. $name_id .'" title="'. $title .'" id="'. $name_id .'" onchange="'. $valida . $ajax . '">';	
				echo '<option SELECTED value="Seleccione...">';
				for($i=0;$i<=$large[$tamanio];$i++){
					echo '-';
					}
				echo '</option>';
				
				echo '<div class="custom dropdown">';
				echo '<a href="#" class="current"></a>';
				echo '<a href="#" class="selector"></a>';
				echo '<ul>';
				echo'<li value="Seleccione...">';
				for($i=0;$i<=$large[$tamanio];$i++){
					echo '-';
					}
				echo '</li>';
				echo '</ul>';
				echo '</div>';
				echo '</select>';
				}
		
		echo '<small id="'. $small .'"></small>';
		echo '</div>';
}

function ajax($asociado,$nombre_funcion){
	$asoc = $asociado . '_d';
	$funcion = 'select' . $nombre_funcion;
	echo '<script type="text/javascript">';
	echo '
		function '. $funcion .'(str){
				var xmlhttp; 
				var asociado = "'. $asociado .'";
				var dependiente = "'. $nombre_funcion .'";
				if (str=="")
				  {
				  document.getElementById("txtHint").innerHTML="";
				  return;
				  }
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					 {
					 document.getElementById("'. $asoc .'").innerHTML=xmlhttp.responseText;
					 }
				  }
				  xmlhttp.open("GET","ajax.php?value="+ str + "&asoc="+ asociado + "&depen="+ dependiente);
			  	
				xmlhttp.send();
			}
		';
	echo '</script>';
	}

function js_comments(){
echo '
<!-- End Footer -->

  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.event.move.js"></script>
  
  <script src="javascripts/jquery.event.swipe.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.foundation.forms.js"></script>
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
  ';
}

function titulo_form($titulo){
	echo '<label class="has-tip tip-top" title="'. $titulo .'" style="text-transform:uppercase;"><a href="#">'. $titulo .'</a></label><br>';
	}
function checkbox(){
		
		include("conexion.php");
		$sql="SELECT * FROM actividades";
			$seleccion=mysql_query($sql,$conexion);
				while ($row = mysql_fetch_array($seleccion)){
					$campo_1=$row["0"];
					$campo_2=$row["1"];
					$box = "'asoc_". $campo_1 ."_d'";
					$ppal = "'act_". $campo_1 ."'";
					echo '<label class="" id="act_'. $campo_1 .'_l" for="act_'. $campo_1 .'" title="'. $campo_2 .'" onclick="box_asoc('.$box.','. $ppal .');"><input name="act_'. $campo_1 .'" value="1" type="checkbox" id="act_'. $campo_1 .'"> '. $campo_2 .'</label>';
				}
			}

function act_box($titulo,$name_id,$actividad){
		echo'<div class="panel box" id="'. $name_id .'_d" title="'. $name_id .'_d">';
		if($actividad!=4){
				titulo_form($titulo);
				include("conexion.php");
				$sql="SELECT * FROM asoc_actividades WHERE cod_actividades='". $actividad ."'";
					$seleccion=mysql_query($sql,$conexion);
						while ($row = mysql_fetch_array($seleccion)){
							$campo_1=$row["0"];
							$campo_2=$row["2"];
							echo '<label for="'. $name_id .'" title="'. $campo_2 .'"><input name="'. $name_id .'[]"  value="'. $campo_1 .'" type="checkbox" id="'. $name_id .'[]"> '. $campo_2 .'</label>';
				}
		}else{
				text($titulo,"has-tip tip-top",$name_id,$name_id,$titulo,1,'text');
			 }
		
		echo'</div>';
	}
?>
