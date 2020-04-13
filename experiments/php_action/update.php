<?php 

require_once 'db_connect.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$expNo = $_POST['exp_Id'];
    $name = $_POST['editName'];
    $group = $_POST['editGroup'];

    $sql = "UPDATE experiments SET  ExperimentName = '$name', GroupType = '$group' WHERE ExperimentNumber = $expNo";
	$query = $connect->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Experiment is updated Successfully ";
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Experiment Record Updation field";
	}

	// close the database connection
	$connect->close();

	echo json_encode($validator);

}
