<?php
	include "dbcon.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Info</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style>
		body{
			padding: 0;
			margin: 0;
		}
		input[type="submit"]{
			float: right;
		}
		input[type="text"]{
			width: 100%;
		}
		tr{
			width: 100%;
		}
		td{
			width: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
			<table border="1"  cellpadding="0" cellspacing="0" style="width:100%">
				<tbody >
				<tr>
					<th><input type="button" name="Add" value="Add New" onclick="addNew()"></th>
				</tr>
				<tr >
					<th>Sr No.</th>
					<th>id</th>
					<th>Name</th>
					<th>Class</th>
					<th>Roll No</th>
					<th>Father Name</th>
					<th>Mother Name</th>
					<th>Contact</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
				
					<?php 

						
						$sql = "SELECT * FROM students";

						$result = $conn->query($sql);
						
						if($result->num_rows>0){
							$count=1;
							while($data = $result->fetch_assoc()){
								//print_r($data);die;
								?>
								<tr id="tr<?= $data['id']?>">
									<td id="sn<?= $data['id']?>" readonly="readonly"><?= $count ?></td>
									<td id="id<?= $data['id']?>" readonly="readonly"><?= $data["id"] ?></td>
									<td id="name<?= $data['id']?>" ><?= $data["name"] ?></td>
									<td id="class<?= $data['id']?>" ><?= $data["class"] ?></td>
									<td id="rollno<?= $data['id']?>"><?= $data["rollno"] ?></td>
									<td id="fname<?= $data['id']?>"><?= $data["fname"] ?></td>
									<td id="mname<?= $data['id']?>"><?= $data["mname"] ?></td>
									<td id="contact<?= $data['id']?>"><?= $data["contact"] ?></td>
									<td id="address<?= $data['id']?>"><?= $data["address"] ?></td>
									<td>
										<button id="edit<?php echo $data['id']?>" onclick="edit(<?php echo $data['id']?>)">edit</button>
										<button id="del<?php echo $data['id']?>" onclick="del(<?php echo $data['id']?>)">delete</button>
									</td>
								</tr>
								<?php
									$count++;

							}
						}
					?>
					<tr id="test"></tr>
				</tbody>
			</table>
	</div>

	<script>
		function addNew(){
				
				var	content='<td><input type="text" name="srno" readonly="readonly"/></td>\
							<td><input type="text" name="id" readonly="readonly"/></td>\
							<td><input type="text" name="sname"/></td>\
							<td><input type="text" name="class"/></td>\
							<td><input type="text" name="rollno"/></td>\
							<td><input type="text" name="fname"/></td>\
							<td><input type="text" name="mname"/></td>\
							<td><input type="text" name="contact"/></td>\
							<td><input type="text" name="address"/></td>\
							<td><input type="submit" onclick="submitForm()" value="save"/></td>';
				
				document.getElementById("test").innerHTML=content;
				//console.log(content);
		}

		// edit function
		function edit(id){
		var sn = document.getElementById('sn'+id).innerHTML;
		var id = document.getElementById('id'+id).innerHTML;
		var name = document.getElementById('name'+id).innerHTML;
		var classs = document.getElementById('class'+id).innerHTML;
		var rollno = document.getElementById('rollno'+id).innerHTML;
		var fname = document.getElementById('fname'+id).innerHTML;
		var mname = document.getElementById('mname'+id).innerHTML;
		var contact = document.getElementById('contact'+id).innerHTML;
		var address = document.getElementById('address'+id).innerHTML;
		console.log(name);
				
				var	content='<td><input id="sn'+id+'" type="text" name="srno" value="'+sn+'" readonly="readonly"/></td>\
							<td><input id="id'+id+'" type="text" name="id" value="'+id+'" readonly="readonly"/></td>\
							<td><input id="name'+id+'" type="text" name="sname" value="'+name+'"/></td>\
							<td><input id="class'+id+'" type="text" name="class" value="'+classs+'"/></td>\
							<td><input id="rollno'+id+'" type="text" name="rollno" value="'+rollno+'"/></td>\
							<td><input id="fname'+id+'" type="text" name="fname" value="'+fname+'"/></td>\
							<td><input id="mname'+id+'" type="text" name="mname" value="'+mname+'"/></td>\
							<td><input id="contact'+id+'" type="text" name="contact" value="'+contact+'"/></td>\
							<td><input id="address'+id+'" type="text" name="address" value="'+address+'"/></td>\
							<td><input type="submit" onclick="save('+id+')" value="save"/></td>';
				
				document.getElementById("tr"+id).innerHTML=content;
		}

		//save function 
		function save(id){
			var sn = document.getElementById('sn'+id).value;
			var id = document.getElementById('id'+id).value;
			var name = document.getElementById('name'+id).value;
			var classs = document.getElementById('class'+id).value;
			var rollno = document.getElementById('rollno'+id).value;
			var fname = document.getElementById('fname'+id).value;
			var mname = document.getElementById('mname'+id).value;
			var contact = document.getElementById('contact'+id).value;
			var address = document.getElementById('address'+id).value;
		
			var	content='<td id="sn'+id+'">'+sn+'</td>\
							<td id="id'+id+'">'+id+'</td>\
							<td id="name'+id+'">'+name+'</td>\
							<td id="class'+id+'">'+classs+'</td>\
							<td id="rollno'+id+'">'+rollno+'</td>\
							<td id="fname'+id+'">'+fname+'</td>\
							<td id="mname'+id+'">'+mname+'</td>\
							<td id="contact'+id+'">'+contact+'</td>\
							<td id="address'+id+'">'+address+'</td>\
							<td ><button id="edit'+id+'" onclick="edit('+id+')">edit</button>\
										<button id="del'+id+'" onclick="del('+id+')">delete</button></td>';
				
				

			var url = 'http://localhost/govind/studentform/edit.php?sid='+id+'&sname='+name+'&class='+classs+'&rollno='+rollno+'&fname='+fname+'&mname='+mname+'&address='+address+'&contact='+contact;
			var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	var res= JSON.parse(this.responseText);
            	if(res.success==1){
                 document.getElementById("tr"+id).innerHTML=content;
            	}
            }
	        }
	        xmlhttp.open("GET", url, true);
	        xmlhttp.send();
		}
		

		// saveData function
		function submitForm()
		{
			var id = document.getElementsByName("id")[0].value;
			var sname = document.getElementsByName("sname")[0].value;
			var classs = document.getElementsByName("class")[0].value;
			var rollno = document.getElementsByName("rollno")[0].value;
			var fname = document.getElementsByName("fname")[0].value;
			var mname = document.getElementsByName("mname")[0].value;
			var contact = document.getElementsByName("contact")[0].value;
			var address = document.getElementsByName("address")[0].value;
			
			var url = 'http://localhost/govind/studentform/insert.php?sname='+sname+'&class='+classs+'&rollno='+rollno+'&fname='+fname+'&mname='+mname+'&address='+address+'&contact='+contact;
			var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                location.reload(); 
            }
	        }
	        xmlhttp.open("GET", url, true);
	        xmlhttp.send();
		}
//delete id
		
		function del(id)
		{
			var url = 'http://localhost/govind/studentform/delete.php?sid='+id+'&success=success';
			var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                $('#tr'+id).remove();
            }
	        }
	        xmlhttp.open("GET", url, true);
	        xmlhttp.send();
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
  $("td").dblclick(function(){
    alert("The paragraph was double-clicked.");
  });
});
	</script>
	
</body>
</html>