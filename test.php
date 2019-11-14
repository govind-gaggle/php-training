<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>check </title>
</head>
<body>
<pre>
	<?php
		$conn= new mysqli("localhost", "root", "password", "test");
		if ($conn->connect_error) {
   		 die("Connection failed: " . $conn->connect_error);
			}
		echo "Connected successfully";
		$sql = "select * from example";
		$data = $conn->query($sql);
		$data = $data->fetch_assoc();
		echo $data["Age"];

		$sql = "INSERT INTO example (u_id, id, name)
VALUES ('4', '5', 'Doe')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	?>

 <?php
class Fruit 
{
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function getdata1() {
    echo "<p>The fruit is <b>{$this->name}</b> and color is <b>{$this->color}</b>.</p> <br>";
  }
}

class student extends Fruit
{
	const message = "Welcome to OOP Concept.";
	function showMessage(){
		echo self ::message;
	}
public $name, $std, $rollno;
function get($sname,$standared, $rollno){
	echo "Hello <br>";
	$this->name= $sname." <br>";
	 $this->std= $standared. "<br>";
	 $this->rollno= $rollno ."<br>";
}
function getData(){
		echo "Your name is {$this->name}, Standared is {$this->std} and rollno is {$this->rollno}.";
	}
}

$max = new student("mango", "red");
//$max->getData();
$max->showMessage();
$max->getdata1();
?> 

</pre>
</body>
</html>




