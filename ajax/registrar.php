<?php
require_once("../admin/_lib/config.php");
require_once("../admin/_lib/MysqliDb.php");
date_default_timezone_set('America/Santiago');

$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

  $nombre 		= $_POST["nombre"];
  $rut		 	= $_POST["rut"];
  $email 		= $_POST["email"];
  $fono			= $_POST["fono"];
  $fecha		= $_POST["fecha"];
/*
  if(isset($_POST["check_info"])){
  $check_info = $_POST["check_info"];
  }else{
  	$check_info = "";
  }
*/

  
$err = 0;

if($nombre == ""){
	$err++;
}
if($rut == ""){
	$err++;
}
if($email == ""){
	$err++;
}
if($fono == ""){
	$err++;
}
if($fecha == ""){
	$err++;
}

/*
if($check_info == 'on'){
	$info = 1;
}else{
	$info = 0;
}
*/
	
$data = array(
	'ccNom' 	=> $nombre, 
	'ccRut' 	=> $rut, 
	'ccMail' 	=> $email, 
	'ccFono' 	=> $fono, 
	'ccFecha' 	=> $fecha, 
	'ccTS' 		=> date("Y-m-d H:i:s")
);

//print_r( $data );

if($err == 0) {
	//ver que no está ya registrado con ese email
	$db->where ("ccRut", $rut);
	$db->where ("ccFecha", $fecha);
	$inscrito = $db->getOne ("casacorona");
	if ($db->count == 0){

			$id = $db->insert ('casacorona', $data);
			if($id){
				//devolver OK
				echo "ok";
			}

	}else{
		echo "existe";
	}
}else{
	echo 'error';
}