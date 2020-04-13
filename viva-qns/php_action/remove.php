<?php 

require_once 'db_connect.php';

$output = array('success' => false, 'messages' => array());

$exp_Id = $_POST['exp_id'];

$sql = "UPDATE questions SET  IsActive = 0 WHERE Serial = $exp_Id";
$query = $connect->query($sql);
if($query === TRUE) {
	$output['success'] = true;
	$output['messages'] = 'Successfully removed';
} else {
	$output['success'] = false;
	$output['messages'] = 'Error while removing the Question information';
}

// close database connection
$connect->close();

echo json_encode($output);
