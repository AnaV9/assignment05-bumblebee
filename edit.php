<?php
	$connect = mysqli_connect("localhost", "urcscon3_a5bbee", "csc174", "urcscon3_a5bbee");  
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE myconnect SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>