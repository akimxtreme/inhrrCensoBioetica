<?php
session_start();
?>
<?php
$fullname 	= $_SESSION['fullname'];
$privilegio = $_SESSION['privilegio'];

// PARAMETROS DE ACCESOS
/*
switch($privilegio){
			case 1: 		
	*/		
?>


<?php
include_once("funciones/funciones.php");
doctype();
head('Planilla - Censo Nacional de Bioética');
ajax('tipo_establecimiento','naturaleza');
ajax('nombre_institucion','tipo_establecimiento');
ajax('municipio','estado');
ajax('ciudad','municipio');

?>
	
	<script type="text/javascript">
	
	function borrado(elemento){
		//elemento.parentNode.removeChild;
		//alert(elemento.title + "hola");
		var parrafo = document.getElementById(genera[0]);
		parrafo.parentNode.removeChild(parrafo);
		
		}

	function addElement(){
	var caja = document.getElementById("capa"); // id
	/*
	<table id="capa">
	<tr>
		<td><input name="genera" id="genera" type="text"></td>
		.
		.
		.
		6
	</tr>
	</table>
	*/
	
	var tr = document.createElement('tr'); // <tr></tr>
	//var td = document.createElement('td'); // <td></td>
	var td= [
				document.createElement('td'),
				document.createElement('td'),
				document.createElement('td'),
				document.createElement('td'),
				document.createElement('td'),
				document.createElement('td')
				];
	var input = [
				document.createElement('input'),
				document.createElement('input'),
				document.createElement('input'),
				document.createElement('input'),
				document.createElement('input'),
				document.createElement('input')
				];
	// Attr del <input>
	function attr(variable){
		variable.name="genera[]"; 
		variable.id="genera[]"; 
		variable.type="text"; 
		variable.css="alert columns"; 
		variable.placeholder="Ingrese..."; 
		}
	// Attr del <td>
	
		tr.innerHTML="<small title='eliminar' onclick='borrado(this);' class='tiny button radius alert'>click</small>";
		var koo = 0;
		
		tr.id="tr"+koo++;
	
		
	for(i=0;i<=5;i++){
		attr(input[i]); // Atributos del <input>
	}
	function child_td(variable,child){
			variable.appendChild(child);
		}
		
	for(i=0;i<=5;i++){
		child_td(td[i],input[i]); // app
	}
	//td.appendChild(input[i]);  // <td> input 1 input2 ... input 6</td>
	
	//td.appendChild(input[i])	
	for(i=0;i<=5;i++){
		//child_td(td[i],input[i]); // app
		tr.appendChild(td[i]);
	}
	/*tr.appendChild(td[0]);
	tr.appendChild(td[1]);
	tr.appendChild(td[2]);
	tr.appendChild(td[3]);
	tr.appendChild(td[4]);
	tr.appendChild(td[5]);*/
	caja.appendChild(tr);

	
	/*div.innerHTML = "<tr><td><input type='text' name='nombre[]'></td><td><input type='text' name='apellido[]'></td><td><input type='text' name='cedula[]'></td><td><input type='text' name='profesion[]'></td><td><input type='text' name='telefono_w[]'></td><td><input type='text' name='correo_w[]'></td></tr>";
	capa.appendChild(div);*/

}

</script>
	
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
menu('BASIC');
?>
<?php
echo'<div class="row">';
	formulario_inicio
	(
  		/*Titulo del Formulario*/"CENSO NACIONAL DE COMITES DE BIOÉTICA",
		/*attr: (css) del <form>*/"custom twelve columns centered",
		/*attr: (name)*/"censar_comite",
		/*attr: (action)*/"acciones.php",
		/*attr: (method)*/"post",
		/*attr: (onsubmit)*/"censar_comite",
		/*attr: (enctype)*/"",
		/*attr: (css) del <legend>*/"radius label"
	);
	/////////////////////////////////////////////////////////////////////////////////////////////
	// Ayuda para llenar campos	
	$ayuda = array(
				'Seleccione la opción correspondiente al sector administrativo al que pertenece la institución',
				'Seleccione una opción de acuerdo con la razón social institucional',
				'Nombre Completo de la Institución que censa',
				'Seleccione en caso de que las opciones anteriores que se presentan no se corresponden con la institución que censa',
				'Seleccione el Estado',
				'Seleccione el Municipio',
				'Seleccione el Ciudad',
				'Indique el Sector',
				'Indique la Calle',
				'Indique el Número Telefónico',
				'Indique el Número de Fax',
				'Ingrese su dirección de Correo Electrónico',
				'Indique su dirección url de su portal web',
				'Indique si la Institución posee algún comité de Bioética formalmente constituido',
				'Ingrese datos de tres (3) personas designadas como interlocutores ante la Comisión Nacional de Bioética y Bioseguridad en Salud'
				);															   //	
	
	/////////////////////////////////////////////////////////////////////////////////////////////
	
	/////////////////////////////////////////////////////////////////////////////////////////////
	// Campos del Formulario
	titulo_form('Datos Institucionales');
	
		echo '<div class="row">';
		select('Naturaleza','has-tip tip-top','naturaleza',$ayuda[0],'naturaleza','1',5);
		select('Tipo de Establecimiento','has-tip tip-top','tipo_establecimiento',$ayuda[1],'','1',5);	
		echo '</div>';
		div('nombre_institucion_d');
		
		div_fin();
		
	
	titulo_form('Ubicación');
	echo '<div class="row">';
	echo '<div class="row">';
	select('Estado','has-tip tip-top','estado',$ayuda[4],'estado','1',3);
		
	select('Municipio','has-tip tip-top','municipio',$ayuda[5],'municipio','1',3);
		
	select('Ciudad','has-tip tip-top','ciudad',$ayuda[6],'ciudad','1',3);
	echo '</div>';	
	echo '<div class="row">';	
	echo '<div class="four columns">';	
	text("Sector","has-tip tip-top","sector","sector",$ayuda[7],2,'text');
	echo '</div>';	
	echo '<div class="four columns">';	
	text("Calle","has-tip tip-top","calle","calle",$ayuda[8],2,'text');
	echo '</div>';	
	echo '<div class="four columns">';	
	text("Teléfono","has-tip tip-top","telefono","telefono",$ayuda[9],0,'text');
	echo '</div>';
	echo '</div>';	
	echo '<div class="row">';	
	echo '<div class="four columns">';		
	text("Fax","has-tip tip-top","fax","fax",$ayuda[10],0,'text');
	echo '</div>';
	echo '<div class="four columns">';	
	text("Correo Electrónico","has-tip tip-top","correo","correo(*)",$ayuda[11],2,'text');
	echo '</div>';
	echo '<div class="four columns">';	
	text("Página Web","has-tip tip-top","pagina_web","pagina_web",$ayuda[12],2,'text');
	echo '</div>';
	echo '</div>';
	echo '</div>';	
	titulo_form('Actividades');
	
	checkbox();
	
	// act_box(titulo  , name y id  ,  correlativo en la bd)
	act_box('Docencia','asoc_1',1);
	act_box('Investigación','asoc_2',2);
	act_box('Asistencial','asoc_3',3); 
	act_box('Otra (Especifique la Actividad)','asoc_4',4);
	
		
	titulo_form('Datos de los Comités');
	
	select($ayuda[13],'has-tip tip-top','posee',$ayuda[13],'posee','1',11);
		
	echo '<div id="no">';
		titulo_form('No');
		echo '
		<label class="has-tip tip-top" title="'. $ayuda[14] .'">Ingrese datos de tres (3) personas designadas como interlocutores ante la Comisión Nacional de Bioética y Bioseguridad en Salud:</label>
		';
		echo '
		<table>
		<tr>
		<th>Nombre(s)</th>
		<th>Apellido(s)</th>
		<th>Cédula</th>
		<th>Profesión/Oficio</th>
		<th>Teléfono</th>
		<th>Correo</th>
		</tr>
		';
		for($i=0;$i<=2;$i++){
		echo '<tr>';
			
			echo '<td>';
			text("","has-tip tip-top","nombre_m[". $i ."]","nombre_m[". $i ."]",'',1,'text');	
			echo '</td>';
			echo '<td>';
			text("","has-tip tip-top","apellido_m[". $i ."]","apellido_m[". $i ."]",'',1,'text');	
			echo '</td>';
			echo '<td>';
			text("","has-tip tip-top","cedula_m[". $i ."]","cedula_m[". $i ."]",'',0,'text');	
			echo '</td>';
			echo '<td>';
			text("","has-tip tip-top","profesion_m[". $i ."]","profesion_m[". $i ."]",'',2,'text');	
			echo '</td>';
			echo '<td>';
			text("","has-tip tip-top","telefono_m[". $i ."]" ,"telefono_m[". $i ."]",'',0,'text');	
			echo '</td>';
			echo '<td>';
			text("","has-tip tip-top","correo_m[". $i ."]","correo(*)",'',2,'text');	
			echo '</td>';
			
		echo '</tr>';
		}
		echo'</table>';
		
		textarea("Observaciones","has-tip tip-top","observaciones_no","observaciones_no",'Observaciones',2);	
	echo '</div>';
	
	echo '<div id="si">';
	titulo_form('Si');
		
	echo '
	<label class="has-tip tip-top" title="Tipo de Comités">Tipo de Comité</label>
	<label for="checkbox3"><input type="checkbox" id="checkbox3"> Comité de Bioética Asistencial</label>
	<label for="checkbox3"><input type="checkbox" id="checkbox3"> Comité de Bioética de la Investigación</label>
	<label for="checkbox3"><input type="checkbox" id="checkbox3"> Comité de Bioética Mixto</label><br>
	';
	
	titulo_form('Comité de Bioética Asistencial');
	text("Fecha de Constitución","has-tip tip-top","fecha_constitucion","fecha_constitucion	",'',0,'text');
	echo '
	<label class="has-tip tip-top" title="Datos de los Miembros">Datos de los Miembros</label>
	';
	echo '
	<div class="row">
	<table>
		<div class="twelve columns">
		<tr> 
		<td class="center centered">Nombre(s)</td>
		<td>Apellido(s)</td>
		<td>Cédula</td>
		<td>Profesión/Oficio</td>
		<td>Teléfono</td>
		<td>Correo</td>
		</tr>
		</div>
	';
	for($i=0;$i<=2;$i++){
		echo '
		<div class="twelve columns">
		<tr>
			<td><input type="text" name="dsdsd"></td>
			<td><input type="text" name="dsdsd"></td>
			<td><input type="text" name="dsdsd"></td>
			<td><input type="text" name="dsdsd"></td>
			<td><input type="text" name="dsdsd"></td>
			<td><input type="text" name="dsdsd"></td>
			
		</tr>
		</div>
			
		';
		
		
		}
	echo'</table>';
	echo '</div>';
	
	echo '<div class="row">
			<table>
				<tr id="capa">
				</tr>	
			</table>
			
		</div>';
	
	
	echo '<a name="agregar_mas" id="" class="tiny button radius success left" value="" onclick="addElement();">AGREGAR MAS MIEMBROS +</a><br><br>';
	echo'<div class="panel">';
	text("Normas de Funcionamiento Interno","has-tip tip-top","norma_interna","norma_interna",'Adjuntar Archivo',2,'file');
	echo'</div>';
	echo '
	<label class="has-tip tip-top" title="Datos de los Miembros">Documentos de otra institución</label>
	';
	echo '
	<table class="twelve">
	<tr>
	<th>Nombre del Documento</th>
	<th>Institución</th>
	<th>Origen</th>
	<th>Adjuntar</th>
	</tr>
	';
	for($i=0;$i<1;$i++){
		echo '
		<tr>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><select><option>Nacional</option><option>Internacional</option></select></td>
			<td><input type="file"></td>
		</tr>		
		';
		
		}
	echo'</table>';
	echo '<a name="agregar_mas" id="" class="tiny button radius success left" value="">AGREGAR DOCUMENTOS EXTERNOS +</a><br><br>';
	echo '<label class="has-tip tip-top" title="Datos de los Miembros">Observaciones</label>';
	echo '<textarea></textarea>';
	echo '</div>';
	formulario_cierre ("Censar Comité","censar_comite");
echo '</div>';
	 ?>
     <div class="four columns">
      
    </div>
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
/*
	break;
	default:
	echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head></html>';


}
*/
// FIN DEL SWITCH  
?>