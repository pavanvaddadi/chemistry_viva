<?php 

require_once 'db_connect.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$expNo = $_POST['expNo'];
	$name = $_POST['name'];
	$group = $_POST['group'];
	$isActive = 1;


	$sql = "INSERT INTO experiments (ExperimentNumber, ExperimentName, IsActive, GroupType) VALUES ('$expNo', '$name', '$isActive', '$group')";
	$query = $connect->query($sql);


	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Experiment added Successfully";
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Experiment Number cannot be duplicate";
	}

	// close the database connection
	$connect->close();

	echo json_encode($validator);

}
