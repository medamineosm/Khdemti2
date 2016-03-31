<?php


require_once('connection.php');
$db =  Database::getInstance();
//$mysqli = $db->getConnection();

$errors = array();
$data = array();

// Getting posted data and decodeing json
$_POST = json_decode(file_get_contents('php://input'), true);
// checking for blank values.


if($db->insertPerson(
	$_POST['nom']['$modelValue'], 
	$_POST['email']['$modelValue'], 
	$_POST['tel']['$modelValue'], 
	$_POST['age']['$modelValue'], 
	$_POST['ville']['$modelValue'], 
	$_POST['emploi']['$modelValue'],
	$_POST['prenom']['$modelValue']))
{
    $data['message'] = 'We will notified you soon as possible !';
    echo json_encode($data);

}else{
    $data['message'] = 'You are already registed !';
    echo json_encode($data);
}
?>
