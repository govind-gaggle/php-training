<?php 
include'dbcon.php';
$sid=$_GET['sid'];
$name = $_GET['sname'];
$class = $_GET['class'];
$rollno = $_GET['rollno'];
$fname = $_GET['fname'];
$mname = $_GET['mname'];
$contact = $_GET['contact'];
$address = $_GET['address'];

$sql = "UPDATE students SET name ='$name', class='$class' ,rollno ='$rollno' ,fname ='$fname' , mname ='$mname' , contact ='$contact' , address ='$address' WHERE id = $sid";

if(isset($_GET['sid'])){
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