<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>form </title>
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["uname"])){
				$namereeor= "Name is required";
			}else{

			}

			function test_input($data) {
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
 			return $data;
		}

	?>
 <form action="showdata.php" method="post" enctype="multipart/form-data">
 	Name: <input type="text" name="uname"><br><br>
 	Email Id: <input type="text" name="email" required="required"><br><br>
 	Photo :<input type="file" name="fileToUpload" id="fileToUpload" multiple/><br><br>
 	<input type="submit" name="submit" value="submit">
 </form>
 	<h3>Show Details :-</h3>
 	Your Name : <?php echo $_POST["uname"]?><br>
 	Your Email : <?php echo $_POST["email"] ?><br>
 	Your Photo : <?php echo $_FILES["photo"]?>
</body>
</html>