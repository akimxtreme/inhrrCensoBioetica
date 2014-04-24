<?php
include("funciones/funciones.php");
doctype();
head('Funciones');
cintillo();
banner();
/*
Ing. Ilarreta Domingo
Marzo 2013
correo: akimxtreme.dj@gmail.com	
*/
class Attr {
  private $titulo_a=array();
//Atributos de la Etiqueta	
  private $alt_a=array();
  private $class_a=array();
  private $disabled_a=array();
  private $checked_a=array();
  private $id_a=array();
  private $maxlength_a=array();
  private $name_a=array();
  private $onblur_a=array();
  private $onkeypress_a=array();
  private $placeholder_a=array();
  private $title_a=array();
  private $type_a=array();
  private $value_a=array();
  public function cargarOpcion($titulo,$alt,$class,$disabled,$checked,$id,$maxlength,$name,$onblur,$placeholder,$title,$type,$value,$onkeypress)
  {
	//$this->titulo_a[]=$titulo;  
	// Atributos de la Etiqueta
	$this->titulo_a[]=$titulo;
    $this->alt_a[]=$alt;
    $this->class_a[]=$class;
	$this->disabled_a[]=$disabled;
    $this->checked_A[]=$checked;
	$this->id_a[]=$id;
    $this->maxlength_a[]=$maxlength;
	$this->name_a[]=$name;
    $this->onblur_a[]=$onblur;
	$this->onkeypress_a[]=$onkeypress;
	$this->placeholder_a[]=$placeholder;
    $this->title_a[]=$title;
	$this->type_a[]=$type;
    $this->value_a[]=$value;
	
  }
  public function mostrar()
   {
    for($f=0;$f<count($this->name_a);$f++)
    {
	echo '<label>'. $this->titulo_a[$f] .'</label>';
	echo '<br>';
 	echo '<input';
	  	if($this->alt_a[$f]!=""){echo ' alt="'.$this->alt_a[$f].'"';}
		if($this->class_a[$f]!=""){echo ' class="'.$this->class_a[$f].'"';}
		if($this->disabled_a[$f]!=""){echo ' disabled="'.$this->disabled_a[$f].'"';}
		if($this->checked_a[$f]!=""){echo ' checked="'.$this->checked_a[$f].'"';}
		if($this->id_a[$f]!=""){echo ' id="'.$this->id_a[$f].'"';}
		if($this->maxlength_a[$f]!=""){echo ' maxlength="'.$this->maxlength_a[$f].'"';}
		if($this->name_a[$f]!=""){echo ' name="'.$this->name_a[$f].'"';}
		if($this->onblur_a[$f]!=""){echo ' onblur="'.$this->onblur_a[$f].'"';}
		if($this->onkeypress_a[$f]!=""){
			
			switch($this->onkeypress_a[$f]){
				case 1:
				echo ' onkeypress="return sololetras(event);"';
				break;
				
				case 2:
				echo ' onkeypress="return solonumeros(event);"';
				break;
				}
			}
		if($this->placeholder_a[$f]!=""){echo ' placeholder="'.$this->placeholder_a[$f].'"';}
		if($this->title_a[$f]!=""){echo ' title="'.$this->title_a[$f].'"';}
		if($this->type_a[$f]!=""){echo ' type="'.$this->type_a[$f].'"';}
		if($this->value_a[$f]!=""){echo ' value="'.$this->value_a[$f].'"';}
	echo '/>';
	echo '<br><br>';
						
     
    }
  }
}
formulario_inicio('PRUEBAS','custom two columns centered','prueba','','post','','','');
$menu1=new Attr();
/* Total: 12;
cargarOpcion($titulo,$alt,$class,$disabled,$checked,$id,$maxlength,$name,$onblur,$placeholder,$title,$type,$value)
*/
$menu1->cargarOpcion('Primer Nombre','','opcion1','','','prueba','10','nombre','dddd','Ingrese...','Ingresa texto','Text','',1);
$menu1->cargarOpcion('Segundo Nombre','','opcion1','','','prueba','10','nombre2','dddd','Ingrese...','Ingrese el Nombre','Text','',1);
$menu1->cargarOpcion('Cédula de Identidad','','opcion1','','','prueba','10','nombre2','dddd','Ingrese...','Ingrese el Nombre','Text','',2);
$menu1->cargarOpcion('Teléfono','','opcion1','','','prueba','10','nombre2','dddd','Ingrese...','Ingrese el Nombre','Text','',"");
$menu1->cargarOpcion('Venezolana','','opcion1','','','prueba','5','tipo','dddd','Ingrese...','Ingrese el Nombre','radio','',"");
$menu1->cargarOpcion('Extranjera','','opcion1','','','prueba','5','tipo','dddd','Ingrese...','Ingrese el Nombre','radio','',"");

$menu1->mostrar();
formulario_cierre ('boton_prueba','boton_prueba');
?>
</body>
</html>