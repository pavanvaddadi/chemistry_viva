<?php

require_once 'db_connect.php';

$data = array('data' => array());

$sql = "SELECT * FROM questions where IsActive = 1";
$query = $connect->query($sql);


while ($row = $query->fetch_assoc()) {
    $actionButton = '
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" data-target="#editMemberModal" onclick="editMember('.$row['Serial'].')"> <i class="fa fa-pencil fa-stack text-dark"></i> Edit</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removeMemberModal" onclick="removeMember('.$row['Serial'].')"> <i class="fa fa-trash-o fa-stack text-danger"></i> Remove</a></li>	    
	  </ul>
	</div>
		';

	$data['data'][] = array(
		$row['Question'],
		$row['Experiment'],
        $actionButton
	);

}

// database connection close
$connect->close();


echo json_encode($data);
