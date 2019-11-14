<?php 
include'dbcon.php';
$sid=$_GET['sid'];
$success = $_GET['success'];
$sql = "DELETE FROM students WHERE id = $sid";

if(isset($_GET['sid']) && $_GET['success']=='success'){
	if ($conn->query($sql) === TRUE) {
		$data=["success"=>1];
		$data= json_encode($data);
    echo $data;
} else {
	$data=["success"=>0];
     $data= json_encode($data);
    echo $data;
}
}


?>