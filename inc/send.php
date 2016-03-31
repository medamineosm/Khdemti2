<?php
require_once('connection.php');
$db =  Database::getInstance(); // psk c une methode static  //db singleton


$nom = $_POST["nom"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$age = $_POST["age"];
$emploi = $_POST["emploi"];
$ville = $_POST["ville"];

$resultat = $db->insertPerson($nom,$email,$tel,$age,$ville,$emploi);
switch($resultat)
{
	case 'success':
		echo "SUCCESS";
		break;
	case 'error':
		echo "ERROR";
		break;
	case 'exists':
		echo "EXISTS";
		break;
}

?>
