// JavaScript Document
function validar_unico(validar){
// id del <label> Ej: nombre_l
var l_label = validar + "_l";
// id del <small> Ej: nombre_s
var s_small = validar + "_s";

var texto = document.getElementById(l_label);
var campo = document.getElementById(validar);
var small_error = document.getElementById(s_small);
var titulo = "Campo Obligatorio";

// validaciones para los selects
var sle = "Seleccione...";

if(campo.value=="" || campo.value==sle){
	//var titulo = texto.getAttribute('title');
			
			
			texto.className="has-tip tip-top error";
			campo.className="error";
			small_error.className="error";
			small_error.innerHTML = titulo;
			
			}else {
				texto.className="has-tip tip-top";
				campo.className="";
				small_error.className="";
				small_error.innerHTML="";
				
				
	}
	
}

// JavaScript Document
function formularios(validar){
	var valida = true;
	var sle = "Seleccione...";
	function elemento(nombre){
			var elemento = document.getElementById(nombre);
			return elemento;
			}
		function label(nombre){
			var l_label = nombre + "_l";
			var label = document.getElementById(l_label);
			return label;
			}
		function smaLL(nombre){
			var s_small = nombre + "_s";
			var smaLL = document.getElementById(s_small);
			return smaLL;
			}
	
	switch (validar){
		
		
		/////////////////////////////////////////////////////////////////////////////////
		case 'solicitar_cuenta':
		
		var variables = [
						elemento('nombre'),
						elemento('apellido'),
						elemento('cedula'),
						elemento('nacionalidad'),
						elemento('correo'),
						elemento('telefono')
						];
		var labels = [
						label('nombre'),
						label('apellido'),
						label('cedula'),
						label('nacionalidad'),
						label('correo'),
						label('telefono')
						];
		var smalls = [
						smaLL('nombre'),
						smaLL('apellido'),
						smaLL('cedula'),
						smaLL('nacionalidad'),
						smaLL('correo'),
						smaLL('telefono')
						];
		
		for(i in variables){
			if(variables[i].id!="correo"){
				if((variables[i].value=="") || (variables[i].value==sle)){
				variables[i].className="error";
				labels[i].className="has-tip tip-top error";
				smalls[i].className="error";
				smalls[i].innerHTML="Campo Obligatorio";
				valida = false;
				}else{
					variables[i].className="";
					labels[i].className="has-tip tip-top";
					smalls[i].className="";
					smalls[i].innerHTML="";
					}
			}else{
				var elemento = document.getElementById('correo');
				// id del <label> Ej: nombre_l
				var l_label = "correo" + "_l";
				// id del <small> Ej: nombre_s
				var s_small = "correo" + "_s";
				var texto = document.getElementById(l_label);
				var campo = document.getElementById('correo');
				var small_error = document.getElementById(s_small);
				var titulo = "Campo Obligatorio";
				if (elemento.value!=""){
					var dato = elemento.value;
					var expresion = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;  
					if (!expresion.test(dato)){
					if(elemento.name=='correo'){
						texto.className="has-tip tip-top error";
						campo.className="error";
						small_error.className="error";
						small_error.innerHTML = titulo;
						valida = false;
					}
			}else{
				texto.className="has-tip tip-top";
				campo.className="";
				small_error.className="";
				small_error.innerHTML="";
				}
	
	}else{
		texto.className="has-tip tip-top error";
		campo.className="error";
		small_error.className="error";
		small_error.innerHTML = titulo;
		valida = false;		
		}
	
	
				
}
			
			
			
}
		
		return valida;
		break;
		/////////////////////////////////////////////////////////////////////////////////
		
		/////////////////////////////////////////////////////////////////////////////////
		case 'accesar':
		
		var variables = [
						elemento('usuario'),
						elemento('password')
						];
		var labels = [
						label('usuario'),
						label('password')
						];
		var smalls = [
						smaLL('usuario'),
						smaLL('password')
						];
		
		for(i in variables){
			if(variables[i].value==""){
			variables[i].className="error";
			labels[i].className="has-tip tip-top error";
			smalls[i].className="error";
			smalls[i].innerHTML="Campo Obligatorio";
			valida = false;
			}else{
				variables[i].className="";
				labels[i].className="has-tip tip-top";
				smalls[i].className="";
				smalls[i].innerHTML="";
					
				}
	}
		return valida;
		break;
		
		/////////////////////////////////////////////////////////////////////////////////
		case 'censar_comite':
		
		var variables = [
						elemento('naturaleza'), 			
						elemento('tipo_establecimiento'),	
						elemento('nombre_institucion'),	
						elemento('otro_tipo'),		
						elemento('estado'),					
						elemento('municipio'),				
						elemento('ciudad'),					
						elemento('sector'),					
						elemento('calle'),					
						elemento('telefono'),				
						elemento('fax'),					
						elemento('correo'),					
						elemento('calle'),					
						elemento('pagina_web'),
						elemento('act_1'),
						elemento('act_2'),
						elemento('act_3'),
						elemento('act_4')									
						];
		var labels = [
						label('naturaleza'),
						label('tipo_establecimiento'),
						label('nombre_institucion'),
						label('otro_tipo'),
						label('estado'),
						label('municipio'),
						label('ciudad'),
						label('sector'),
						label('calle'),
						label('telefono'),
						label('fax'),
						label('correo'),
						label('calle'),
						label('pagina_web'),
						label('act_1'),
						label('act_2'),
						label('act_3'),
						label('act_4')
						
					 ];
		var smalls = [
						smaLL('naturaleza'),
						smaLL('tipo_establecimiento'),
						smaLL('nombre_institucion'),
						smaLL('otro_tipo'),
						smaLL('estado'),
						smaLL('municipio'),
						smaLL('ciudad'),
						smaLL('sector'),
						smaLL('calle'),
						smaLL('telefono'),
						smaLL('fax'),
						smaLL('correo'),
						smaLL('calle'),
						smaLL('pagina_web'),
						smaLL('act_1'),
						smaLL('act_2'),
						smaLL('act_3'),
						smaLL('act_4')
					 ];
		function estilo(num,valor){
		
			if(valor==1){// correcto
			variables[num].className="";
			labels[num].className="has-tip tip-top";
			smalls[num].className="";
			smalls[num].innerHTML="";
			}else{// incorrecto
				variables[num].className="error";
				labels[num].className="has-tip tip-top error";
				smalls[num].className="error";
				smalls[num].innerHTML="Campo Obligatorio";
				}
			}
		function estilo2(num,valor){
		
			if(valor==1){// correcto
			variables[num].className="";
			labels[num].className="";
			}else{// incorrecto
				variables[num].className="error";
				labels[num].className="error";
				
				}
			}
		
		// [0]
		if(variables[0].value=="" || variables[0].value=="Seleccione..."){valida = false; estilo(0,0);}else{estilo(0,1);}
		// [1]
		switch(variables[1].value){
			case '':
			valida = false; estilo(1,0);
			break;
			case 'Seleccione...':
			valida = false; estilo(1,0);
			break;
			case 'Otros':
				if(variables[2].value=="" || variables[2].value=="Seleccione..."){valida = false; estilo(2,0);}else{estilo(2,1);}
				if(variables[3].value=="" || variables[3].value=="Seleccione..."){valida = false; estilo(3,0);}else{estilo(3,1);}
			break;
			default:
			if(variables[2].value=="" || variables[2].value=="Seleccione..."){valida = false; estilo(2,0);}else{estilo(2,1);}
			}
		// [4 a la 13]
		for(i=4;i<=13;i++){
			if(variables[i].value=="" || variables[i].value=="Seleccione..."){valida = false; estilo(i,0);}else{estilo(i,1);}
			}
		// [14 a la 17] type = "checked"
		if((!variables[14].checked) && (!variables[15].checked) && (!variables[16].checked) && (!variables[17].checked)){
			for(i=14;i<=17;i++){
				valida = false; estilo2(i,0);
				}
		}else{
			if(variables[14].checked){
				estilo2(14,1);
				
				}
			if(variables[15].checked){
				estilo2(15,1);
				}
			if(variables[16].checked){
				estilo2(16,1);
				}
			if(variables[17].checked){
				estilo2(17,1);
				}
			}
		/*
		for(i=14;i<=17;i++){
			if(!variables[i].checked){valida = false; estilo2(i,0);}else{estilo2(i,1);}				
				
				
			
			}*/
		// []
			
			
		return valida;
		break;
		/////////////////////////////////////////////////////////////////////////////////
		
		/////////////////////////////////////////////////////////////////////////////////
		case 'crear_cuenta':
		var variables = [
						elemento('genera')
						];
		var labels = [
						label('genera')
					 ];
		var smalls = [
						smaLL('genera')
					 ];
		
		for(i in variables){
			if(variables[i].value==""){
				variables[i].className="error";
				labels[i].className="has-tip tip-top error";
				smalls[i].className="error left twelve";
				smalls[i].innerHTML="Campo Obligatorio";
				valida = false;
				}else{
					variables[i].className="";
					labels[i].className="has-tip tip-top";
					smalls[i].className="";
					smalls[i].innerHTML="";
					}
		}
		
		
		return valida;
		break;
		/////////////////////////////////////////////////////////////////////////////////
		}
		

}

//Funcion Javascript para Validar solo Números en un campo Input...
 function solonumeros(evt)
      {
		var keyPressed = (evt.which) ? evt.which : event.keyCode
        return !(keyPressed > 31 && (keyPressed < 48 || keyPressed > 57));
      }

//Funcion Javascript para Validar solo Letras y Espacios en un campo Input...
function sololetras(evt) {
tecla = (document.all) ? evt.keyCode : evt.which;
if (tecla==8) return true;
patron =/[A-Za-z\s]/;
te = String.fromCharCode(tecla);
return patron.test(te);
} 

// Validación del campo Email
// Validación del campo Email
function correo_electronico(evt){
var elemento = evt;
var id = elemento.id;
// id del <label> Ej: nombre_l
var l_label = id + "_l";
// id del <small> Ej: nombre_s
var s_small = id + "_s";

var texto = document.getElementById(l_label);
var campo = document.getElementById(id);
var small_error = document.getElementById(s_small);
var titulo = "Campo Obligatorio";


	
	if (elemento.value!=""){
		var dato = elemento.value;
		var expresion = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;  
			if (!expresion.test(dato)){
					if(elemento.name==id){
						
						texto.className="has-tip tip-top error";
						campo.className="error";
						small_error.className="error";
						small_error.innerHTML = titulo;
					}
			}else{
				texto.className="has-tip tip-top";
				campo.className="";
				small_error.className="";
				small_error.innerHTML="";
				}
	
	}else{
		texto.className="has-tip tip-top error";
		campo.className="error";
		small_error.className="error";
		small_error.innerHTML = titulo;
		
		}
}

function box_asoc(asociado,elemento){
	var asoc = document.getElementById(asociado);
	var ppal = document.getElementById(elemento);
	
	
	if(!ppal.checked){
	asoc.style.visibility="visible";
	asoc.style.position="static";
	}else{
	asoc.style.visibility="hidden";
	asoc.style.position="fixed";
		}
}

function posee_bioetica(elemento){
	var posee = document.getElementById(elemento).value;
	var si = document.getElementById('si').style;
	var no = document.getElementById('no').style;
	
	switch(posee){
		case '1':
			si.visibility="visible";
			si.position="static";
			
			no.visibility="hidden";
			no.position="fixed";
		break;
		case '2':
			no.visibility="visible";
			no.position="static";
			
			si.visibility="hidden";
			si.position="fixed";
		break;
		default:
			si.visibility="hidden";
			si.position="fixed";
			no.visibility="hidden";
			no.position="fixed";
		
		
		}
	
	
	}

function tipo_comite(elemento){
	var posee = document.getElementById(elemento).value;
	var si = document.getElementById('si').style;
	var no = document.getElementById('no').style;
	
	switch(posee){
		case '1':
			si.visibility="visible";
			si.position="static";
			
			no.visibility="hidden";
			no.position="fixed";
		break;
		case '2':
			no.visibility="visible";
			no.position="static";
			
			si.visibility="hidden";
			si.position="fixed";
		break;
		default:
			si.visibility="hidden";
			si.position="fixed";
			no.visibility="hidden";
			no.position="fixed";
		
		
		}
	
	
	}

function generarPassword(form) {
	var strCaracteresPermitidos = 'a,b,c,d,e,f,g,h,i,j,k,m,n,p,q,r,s,t,u,v,w,x,y,z,1,2,3,4,5,6,7,8,9';
	var strArrayCaracteres = new Array(34);
	strArrayCaracteres = strCaracteresPermitidos.split(',');
	var length = 8, i = 0, j, tmpstr = "";
	do {
		var randscript = -1
		while (randscript < 1 || randscript > strArrayCaracteres.length || isNaN(randscript)) {
			randscript = parseInt(Math.random() * strArrayCaracteres.length)
		}
		j = randscript;
		tmpstr = tmpstr + strArrayCaracteres[j];
		i = i + 1;
	} while (i < length)
	form.genera.value = tmpstr;
	}
