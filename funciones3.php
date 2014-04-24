<?php

function titulo($class,$id,$style,$title,$titulo){
/*<h2>
	atributos (attr)
        attr: class
        attr: id
        attr: style
        attr: title
*/

$c= '"';
$class = $c . $class .$c; // Ej: "example"
$id    = $c . $id 	 .$c;
$style = $c . $style .$c;
$title = $c . $title .$c;	

$nombre = 'h2';
$izq	= '<';
$der	= '>';
$esp	= ' ';
$inicio = $izq . $nombre . $esp; 		// Ej: <h2
$cierre = $izq . '/' . $nombre . $der;	// Ej: </h2>
	
$attr = array( 
	"css" 	=> array ($class),
	"id" 	=> array ($id),
	"style" => array ($style),
	"title" => array ($title)
	);
	
echo $inicio;

	foreach ($attr as $indice => $valor){
		echo ($indice); // attr
		echo "="; // Ej: css =
		echo $attr[$indice] [0]; // (" ") Ej: css=""
		echo " "; // espacio entre attr Ej: css="" title="" .... 
	}
echo $der . "Titulo" . $cierre;



}


?>