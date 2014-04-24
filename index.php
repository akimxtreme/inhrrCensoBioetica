<?php
include_once("funciones/funciones.php");
doctype();
head('');

?>
<body>
<?php 
cintillo();
banner();
?>

<div class="row">
<hr />

<dl class="tabs twelve columns">
  <dd class="active"><a href="#simple1">Información</a></dd>
  <dd><a href="#simple2">Solicitar Cuenta</a></dd>
  <dd class="hide-for-small"><a href="#simple3">Censarse</a></dd>
</dl>
<ul class="tabs-content">
  <li class="active" id="simple1Tab">
  	<hr />
  	<h4 class="subheader">Censo Nacional de Comités de Bioética</h4>
	<p>Tiene por objetivo <strong>actualizar la información sobre el universo de Comités de Bioética u organizaciones afines</strong>, que hacen la vida en los servicios prestadores de salud y centros de investigación existentes a nivel nacional.</p>
  	<p>En esta <strong>primera etapa</strong> el proceso de recolección de información estará dirigido a:</p>
        <!-- Ordered Lists -->
    <ol>
      <li>Servicios prestados de salud públicos a partir del tercer nivel de atención.</li>
      <li>Servicios privados de atención en salud.</li>
      <li>Centros de investigación adscritos al Ministerio del Poder Popular para la Salud</li>
    </ol>
    <hr />
  
  </li>
  <li id="simple2Tab">
  <hr />
  
  <?php
	formulario_inicio
	(
  		/*Titulo del Formulario*/"FORMULARIO PARA SOLICITAR UNA CUENTA",
		/*attr: (css) del <form>*/"custom six columns centered",
		/*attr: (name)*/"solicitar_cuenta",
		/*attr: (action)*/"acciones.php",
		/*attr: (method)*/"post",
		/*attr: (onsubmit)*/"solicitar_cuenta",
		/*attr: (enctype)*/"",
		/*attr: (css) del <legend>*/"radius label"
	);
	/////////////////////////////////////////////////////////////////////////////////////////////
	// Ayuda para llenar campos																   //	
	$titulo_nombre="Ingrese el ó los Nombres Ej: Domingo José (solo letras)";				   //	
	$titulo_apellido="Ingrese el ó los Apellidos Ej: Ilarreta Heydras (solo letras)";		   //
	$titulo_cedula="Ingrese la Cédula de Identidad Ej: 17588630 (solo números)";			   //
	$titulo_nacionalidad="Seleccione su Nacionalidad Ej: Venezolana";					       //
	$titulo_correo="Ingrese su dirección de Correo Electrónico Ej: dilarreta@inhrr.gob.ve";    //
	$titulo_telefono="Ingrese el número telefónico de contacto Ej: 02122191615 (solo números)";//
	/////////////////////////////////////////////////////////////////////////////////////////////
	
	/////////////////////////////////////////////////////////////////////////////////////////////
	// Campos del Formulario																   //
	text("Nombre(s)","has-tip tip-top","nombre","nombre",$titulo_nombre,1,'text');
	text("Apellido(s)","has-tip tip-top","apellido","apellido",$titulo_apellido,1,'text');
	text("Cédula de Identidad","has-tip tip-top","cedula","cedula",$titulo_cedula,0,'text');
	 ?>
    		<label class="has-tip tip-top" id="nacionalidad_l" data-width="200" title="Seleccione su Nacionalidad Ej: Venezolana" for="">Nacionalidad</label>
  			<select name="nacionalidad" title="Seleccione su Nacionalidad Ej: Venezolana" id="nacionalidad" onChange="validar_unico('nacionalidad');">
        <?php 
			include('conexion.php');
			$sql="SELECT * FROM nacionalidad";
			$seleccion=mysql_query($sql,$conexion);
				while ($row = mysql_fetch_array($seleccion)){
					$campo_1=$row["nacionalidad"];
					$campo_2=$row["descripcion"];
					echo '<option value="'. $campo_1 .'" title="'. $campo_2 .'">'. $campo_1 .'</option>';
				}echo'<option value="Seleccione...">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</option>';
		?>
   		    
            
       </select>
       
 		
        <small class="" id="nacionalidad_s"></small>
  	<?php
	text("Correo Electrónico","has-tip tip-top","correo","correo()",$titulo_correo,2,'text');
	text("Teléfono","has-tip tip-top","telefono","telefono",$titulo_telefono,0,'text');
	formulario_cierre ("Solicitar","solicitar_cuenta");
	?>
    
             
        
   


  </li>
  <li id="simple3Tab">
  	<hr />
  <div class="alert-box secondary">
  	Introduzca su Cédula y Contraseña
  	<a href="" class="close">&times;</a>
  </div>
  <?php
  formulario_inicio
	(
		/*Titulo del Formulario*/"ACCESO AL SISTEMA",
		/*attr: (css) del <form>*/"custom six columns centered",
		/*attr: (name)*/"accesar",
		/*attr: (action)*/"acciones.php",
		/*attr: (method)*/"post",
		/*attr: (onsubmit)*/"accesar",
		/*attr: (enctype)*/"",
		/*attr: (css) del <legend>*/"radius label"
		  		
	);
	/////////////////////////////////////////////////////////////////////////////////////////////
	// Ayuda para llenar campos																   //	
	$titulo_usuario="Ingrese la Cédula de Identidad Ej: 17588630 (solo números)";			   //	
	$titulo_contrasenia="Ingrese la contraseña generada por el sistema";					   //
	/////////////////////////////////////////////////////////////////////////////////////////////
	
	/////////////////////////////////////////////////////////////////////////////////////////////
	// Campos del Formulario																   //
	text("Cédula de Identidad","has-tip tip-top","usuario","usuario",$titulo_usuario,0,"text");
	text("Contraseña","has-tip tip-top","password","password",$titulo_contrasenia,2,"password");
	formulario_cierre ("Accesar","acceso");
	?>
  </li>
</ul>
<?php
//select($class,$id,$disabled,$name,$onchange,$multiple,$readonly,$tabindex,$title);

pie();
js_comments();
?>
</div>

</body>
</html>