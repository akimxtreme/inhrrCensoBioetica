<?php
include("funciones/funciones.php");
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
  <div class="alert-box success">
  	La Solicitud de Cuenta se ha enviado exitosamente...!
  	<a href="" class="close">&times;</a>
  </div>
  <?php
	formulario_inicio
	(
  		/*Titulo del Formulario*/"FORMULARIO PARA SOLICITAR UNA CUENTA",
		/*attr: (css) del <form>*/"custom six columns centered",
		/*attr: (name)*/"formulario",
		/*attr: (action)*/"template2.php",
		/*attr: (method)*/"post",
		/*attr: (onsubmit)*/"",
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
	text("Nombre(s)","has-tip tip-top","nombre","nombre",$titulo_nombre);
	text("Apellido(s)","has-tip tip-top","apellido","apellido",$titulo_apellido);
	text("Cédula de Identidad","has-tip tip-top","cedula","cedula",$titulo_cedula);
	
	
	
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
				}echo'<option SELECTED>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</option>';
		?>
   		    
            
       </select>
       
 		
        <small class="" id="nacionalidad_s"></small>
  <?php
	text("Correo Electrónico","has-tip tip-top","correo","correo",$titulo_correo);
	text("Teléfono","has-tip tip-top","telefono","telefono",$titulo_telefono);
	?>
    
      <!--<option>.................................................................................................</option>-->
   
    <?php
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
		/*attr: (action)*/"",
		/*attr: (method)*/"post",
		/*attr: (onsubmit)*/"",
		/*attr: (enctype)*/"",
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
	text("Cédula de Identidad","has-tip tip-top","usuario","usuario",$titulo_usuario);
	text("Contraseña","has-tip tip-top","password","password",$titulo_contrasenia);
	formulario_cierre ("Accesar","acceso");
	?>
  </li>
</ul>
<?php
//select($class,$id,$disabled,$name,$onchange,$multiple,$readonly,$tabindex,$title);

pie();
?>
</div>


<!--<input>
	atributos (attr)
        attr: alt
        attr: id
        attr: class
        attr: disabled
        attr: name
        attr: maxlength
        attr: onblur
        attr: placeholder
        attr: readonly
        attr: tabindex
        attr: title
        attr: type
        		* button
                * checkbox
                * file
                * hidden
                * image
                * password
                * submit
                * text   
        attr: value
-->

<!--<select>
	atributos (attr)
        attr: class
        attr: id
        attr: disabled
        attr: name
        attr: onchange
        attr: multiple
        attr: readonly
        attr: tabindex
        attr: title 
-->

<!--<option>
	atributos (attr)
        attr: class
        attr: id
        attr: selected
        attr: title
        attr: value 
-->

<!--<form>
	atributos (attr)
        attr: action
        attr: class
        attr: enctype
        attr: id
        attr: name
        attr: method
        attr: onsubmit
-->

<!--<label>
	atributos (attr)
        attr: class
        attr: for
        attr: id
        attr: style
        attr: title
-->

<!--<small>
	atributos (attr)
        attr: class
        attr: id
        attr: title
-->


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
  
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

</body>
</html>