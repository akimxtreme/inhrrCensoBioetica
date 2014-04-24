<?php
class Superior {
	private $titulo;
	public function titulo($titulo = 'Titulo de Prueba'){
		$this->titulo = $titulo;
	}
	function getTitulo(){
		return $this->titulo;
		}
		
		
	function cabecera(){
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		echo '<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
			  <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
			  <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
			  <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
			  <!--[if gt IE 8]><!--> ';
		echo '<html xmlns="http://www.w3.org/1999/xhtml">';
		echo '<head>';
		echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		echo '<!-- Set the viewport width to device width for mobile -->
  			  <meta name="viewport" content="width=device-width" />';
		echo '<title>'. $this->titulo .'</title>';
		}
	
	public function css($css){
		echo '<link rel="stylesheet" href="stylesheets/'. $css .'">';
		}

	function pie(){
		echo '</body>';
		echo '</html>';
	}
}
class Formulario{
/*	
Attr
	attr: alt 
	attr: checked
			* checked
	attr: class
	attr: disabled
			* disabled
	attr: enctype
			* application/x-www-form-urlencoded
			* multipart/form-data
			* text/plain
	attr: id
	attr: maxlength
	attr: method
			* delete
			* get
			* post
			* put
	attr: multiple
			* multiple
	attr: name
	attr: onblur
	attr: onchange
	attr: onsubmit
	attr: placeholder
	attr: readonly
			* readonly
	attr: selected
			* selected
	attr: title
	attr: type
			* button
			* checkbox
			* date
			* email
			* file
			* hidden
			* image
			* password
			* radio
			* reset
			* submit
	attr: value
	
		
*/

	// Attr
	private $alt_a=array();
  	private $checked_a=array();
  	private $class_a=array();
  	private $disabled_a=array();
	private $enctype_a=array();
  	private $id_a=array();
	private $maxlength_a=array();
	private $method_a=array();
	private $multiple_a=array();
	private $name_a=array();
	private $onblur_a=array();
	private $onchange_a=array();
	private $onsubmit_a=array();
	private $placeholder_a=array();
	private $readonly_a=array();
	private $selected_a=array();
	private $title_a=array();
	private $type_a=array();
	private $value_a=array();
	// Titulo
	private $titulo_a=array();
	
	public function attr($name,$id,$titulo,$title,$type){
		$this->alt_a[]=$alt;
		$this->checked_a[]=$checked;
		$this->class_a[]=$class;
		$this->disabled_a[]=$disabled;
		$this->enctype_a[]=$enctype;
		$this->id_a[]=$id;
		$this->maxlength_a[]=$maxlength;
		$this->method_a[]=$method;
		$this->multiple_a[]=$multiple;
		$this->name_a[]=$name;
		$this->onblur_a[]=$onblur;
		$this->onchange_a[]=$onchange;
		$this->onsubmit_a[]=$onsubmit;
		$this->placeholder_a[]=$placeholder;
		$this->readonly_a[]=$readonly;
		$this->selected_a[]=$selected;
		$this->title_a[]=$title;
		$this->type_a[]=$type;
		$this->value_a[]=$value;
		$this->titulo_a[]=$titulo;
		}
	
	public function input_text(){
		for ($i=0;$i<count($this->name_a);$i++){
			echo '<label>' . $this->titulo_a[$i] . '</label>';
			echo '<input';
			if($this->name_a[$i]!=''){echo ' name="'. $this->name_a[$i] . '" ';}
			if($this->id_a[$i]!=''){echo ' id="'. $this->id_a[$i] . '" ';}
			if($this->title_a[$i]!=''){echo ' title="'. $this->title_a[$i] . '" ';}
			if($this->type_a[$i]!=''){echo ' type="'. $this->type_a[$i] . '" ';}
			echo '/>';
			}
		}

	}
?>

