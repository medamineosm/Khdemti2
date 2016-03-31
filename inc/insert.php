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
    $data['message'] = 'الموقع في طور اللانجاز , سنعلمك بكل جديد عن الموقع في اقرب وقت';
    echo json_encode($data);

}else{
    $data['message'] = 'انت مسجل مسبقا';
    echo json_encode($data);
}
?>
