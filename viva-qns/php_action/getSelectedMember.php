<?php 

require_once 'db_connect.php';

$expNo = $_POST['exp_Id'];

$sql = "SELECT * FROM questions WHERE Serial = $expNo";
$query = $connect->query($sql);
$result = $query->fetch_assoc();

$connect->close();

echo json_encode($result);
