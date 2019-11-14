<?php
include "dbcon.php";
$con = new DB_con();
$table = "students";
if(isset($_GET['delete_id']))
{
 $id=$_GET['delete_id'];
 $res=$con->delete($table,$id);
}
?>