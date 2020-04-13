<?php 

require_once 'db_connect.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$serial = $_POST['exp_Id'];
	$editExpNo = $_POST['editExpNo'];
    $name = $_POST['editName'];

    $sql = "UPDATE questions SET  Question = '$name', Experiment = '$editExpNo' WHERE Serial = $serial";
	$query = $connect->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Question is updated Successfully ";
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Error While updating the question";
	}

	// close the database connection
	$connect->close();

	echo json_encode($validator);

}
