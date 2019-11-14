<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Invest Habibi - Product Upload</title>
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
		<div class="container">
		<form>
		  	<div class="form-group">
			    <label>Name</label>
			    <input type="text" class="form-control" id="name">
			</div><br>
		  	<div class="form-group">
			    <label>Product Image</label>
			    <input type="text" class="form-control" id="productimg">
		 	</div><br>
		 	<div class="form-group">
			    <label>Description</label>
			    <input type="text" class="form-control" id="description">
			</div><br>
		  	<div class="form-group">
			    <label>Min return</label>
			    <input type="text" class="form-control" id="min_return">
		 	</div><br>
		 	<div class="form-group">
			    <label>Max return</label>
			    <input type="text" class="form-control" id="max_return">
			</div><br>
		  	<div class="form-group">
			    <label>Min Investement</label>
			    <input type="text" class="form-control" id="min_investment">
		 	</div><br>
		 	<div class="form-group">
			    <label>Risk</label>
			    <select id="risk" class="form-control" data-role="select-dropdown">
			    	<option>--select--</option>
			    	<option>Low</option>
			    	<option>Medium</option>
			    	<option>High</option>
  				</select>
			</div><br>
		  	<div class="form-group">
			    <label>Provider</label>
			    <select id="provider" class="form-control" data-role="select-dropdown">
			    	<?php
			    		
			    	?>
			    	<option>--select--</option>
			    	<option>Low</option>
			    	<option>Medium</option>
			    	<option>High</option>
  				</select>
		 	</div><br>
		 	<div class="form-group">
			    <label>Nav Value</label>
			    <input type="text" class="form-control" id="nav_value">
			</div><br>
		  	<div class="form-group">
			    <label>CAGR</label>
			    <input type="text" class="form-control" id="cagr">
		 	</div><br>
		 	<div class="form-group">
			    <label>Domicle</label>
			    <input type="text" class="form-control" id="domicle">
			</div><br>
		  	<div class="form-group">
			    <label>Rating</label>
			    <select id="rating" class="form-control" data-role="select-dropdown">
			    	<option>--select--</option>
			    	<option>1</option>
			    	<option>2</option>
			    	<option>3</option>
			    	<option>4</option>
			    	<option>5</option>
  				</select>
		 	</div><br>
		 	<div class="form-group">
			    <label>Currency</label>
			    <input type="text" class="form-control" id="currency">
		 	</div><br>
		 	<div class="form-group">
			    <label>Started From</label>
			    <input type="text" class="form-control" id="started_from">
		 	</div><br>
		 	<div class="form-group">
			    <label>Status</label>
			    <select id="status" class="form-control" data-role="select-dropdown">
			    	<option>--select--</option>
			    	<option>0</option>
			    	<option>1</option>
			    </select>
		 	</div><br>
		 	<div class="form-group">
			    <label>Category</label>
			    <select id="status" class="form-control" data-role="select-dropdown">
			    	<option>--select--</option>
			    	<option>0</option>
			    	<option>1</option>
			    </select>
		 	</div><br>
		 	<div class="form-group">
			    <label>Performance</label>
			    <input type="text" class="form-control" id="productimg">
		 	</div><br>
		 	<div class="form-group">
			    <label>Fund Size</label>
			    <input type="text" class="form-control" id="productimg">
		 	</div><br>
		 	<div class="form-group">
			    <label>Saria Compliant</label>
			    <input type="text" class="form-control" id="productimg">
		 	</div><br>
		 	<div class="form-group">
			    <label>Ethical Compliant</label>
			    <input type="text" class="form-control" id="productimg">
		 	</div><br>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
</body>
</html>