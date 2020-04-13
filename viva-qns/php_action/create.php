<?php 

require_once 'db_connect.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$expNo = $_POST['expNo'];
	$name = $_POST['name'];
	$isActive = 1;


	$sql = "INSERT INTO questions (Experiment, Question, IsActive) VALUES ('$expNo', '$name', '$isActive')";
	$query = $connect->query($sql);


	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Question added Successfully";
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error While Adding the question";
	}

	// close the database connection
	$connect->close();

	echo json_encode($validator);

}
