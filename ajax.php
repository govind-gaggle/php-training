<?php

if(isset($_GET['action']) && $_GET['action'] == 'formvalue')
{

	if($_GET['name'] == 'govind')
	{
		$xml= "govind@gmail.com";
		echo json_encode($xml);
		
	}
	else{
		$xml= "santsoh@gmail.com";
		echo json_encode($xml);
		
	}

}


?>