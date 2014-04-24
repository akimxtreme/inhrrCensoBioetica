<?php
// Variables
$servidor='127.0.0.1';
/*
$user='censo_bioetica';
$pass='censo_bioetica';
*/
$user='root';
$pass='';

//mysql_connect: Abre una conexión a un servidor MySQL
$conexion=mysql_connect($servidor,$user,$pass) or die ("NO SE PUEDE CONECTAR");

//mysql_select_db:Selecciona un base de datos MySQL
mysql_select_db('censo_bioetica',$conexion);
@mysql_query("SET NAMES 'utf8'");
?>
