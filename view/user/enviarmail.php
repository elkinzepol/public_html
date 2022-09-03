<?php

	/* Accesos
	$port = "localhost";
	$user= "elklop_bdzepol";
	$pass= "zepolel1019";
	$cnx = mysql_connect($port, $user, $pass);
	mysql_select_db(elklop_bdzepol,$cnx);
	$ins = "INSERT INTO mensajes (nomb,email,asunt,mess) VALUES ('$nom', '$email', '$asun', '$messg');"
	mysql_query($ins);
	include 'send.html';
	*/

//Enviar email BD MYSQL
$nom = $_POST['name'];
	$email = $_POST['email'];
	$asun = $_POST['subject'];
	$messg = $_POST['message'];
	
  // Se conecta al SGBD 
  if(!($iden = mysql_connect("localhost", "elklop_bdzepol", "zepolel1019"))) 
    die("Error: No se pudo conectar");
	
  // Selecciona la base de datos 
  if(!mysql_select_db("elklop_bdzepol", $iden)) 
    die("Error: No existe la base de datos");
	
  // Sentencia SQL: guarda todo el contenido de el formulario 
  $sentencia = "INSERT INTO mensajes (nomb,email,asunt,mess) VALUES ('$nom', '$email', '$asun', '$messg')"; 
  // Ejecuta la sentencia SQL 
  $resultado = mysql_query($sentencia, $iden); 
  if(!$resultado){
  	include 'error.html'; 
  	die("Error: No se pudo enviar");

  } 
    
  include 'enviado.html';  
  // Libera la memoria del resultado
  mysql_free_result($resultado);
  
  // Cierra la conexion con la base de datos 
  mysql_close($iden); 

/*  Enviar email por SMTP 
$EmailFrom="noreply@mydomain.com";
$EmailTo="myemail@mydomain.com";
//$Subject="Email from the Contact Form";
$Name=Trim(stripslashes($_POST['name']));
$Email=Trim(stripslashes($_POST['email']));
$Subject=Trim(stripslashes($_POST['subject']));
$Message=Trim(stripslashes($_POST['message']));

// simple way to validate the form
$ValidationOk=true;
if ($Name == "") $ValidationOk=false;
	if (!$ValidationOk) {
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
		exit;
	}
		
	// preparing the body of the email 
	$Body="";
	$Body.="Name: ";
	$Body.=$Name;
	$Body.="\n";

	$Body.="Email: ";
	$Body.=$Email;
	$Body.="\n";

	$Body.="Message: ";
	$Body.=$Message;
	$Body.="\n";

	//sending the email now
	$success=mail($EmailTo, $Subject, $Body,"From: <$EmailFrom>");

	//redirect after mail send 
	if ($success) {
 
       print "<meta http-equiv=\"refresh\" content=\"0;URL=send.html\">";

	}
	else {

		print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";

	}
*/
?>