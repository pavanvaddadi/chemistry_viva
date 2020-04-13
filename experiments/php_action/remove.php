<?php 

require_once 'db_connect.php';

$output = array('success' => false, 'messages' => array());

$exp_Id = $_POST['exp_id'];

$sql = "UPDATE experiments SET  IsActive = 0 WHERE ExperimentNumber = $exp_Id";
$query = $connect->query($sql);
if($query === TRUE) {

    $newSql = "UPDATE questions SET IsActive = 0 WHERE Experiment = $exp_Id";
    $newquery = $connect->query($newSql);
    if($newquery === TRUE) {
        $output['success'] = true;
        $output['messages'] = 'Successfully removed';
    } else {
        $output['success'] = false;
        $output['messages'] = "Error While removing the viva question";
    }

} else {
	$output['success'] = false;
	$output['messages'] = 'Error while removing the member information';
}



// close database connection
$connect->close();

echo json_encode($output);
