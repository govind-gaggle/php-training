<?php
include_once 'dbMySql.php';
$con = new DB_con();
$table = "users";

if(isset($_GET['edit_id']))
{
 $sql=mysql_query("SELECT * FROM users WHERE user_id=".$_GET['edit_id']);
 $result=mysql_fetch_array($sql);
}

// and update condition would be as follow ...

if(isset($_POST['btn-update']))
{
 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $city = $_POST['city_name'];
 
 $id=$_GET['edit_id'];
 $res=$con->update($table,$id,$fname,$lname,$city);
}
?>