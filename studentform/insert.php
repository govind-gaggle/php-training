<?php
	
	
		include "dbcon.php";
		$name = $_GET['sname'];
		$class = $_GET['class'];
		$Rollno = $_GET['rollno'];
		$faname = $_GET['fname'];
		$mname = $_GET['mname'];
		$contact = $_GET['contact'];
		$address = $_GET['address'];

		$sql = "INSERT INTO students (name, class, rollno, fname, mname, contact, address) VALUES ('{$name}','{$class}', '{$Rollno}', '{$faname}', '{$mname}','{$contact}', '{$address}')"; 
	//	print_r($sql);die
		if($conn->query($sql)=== TRUE){
			header('location: index.php');
		}else{
			echo "Error: ".$sql.  $conn->error;
		}
		$conn->close();
	
?>