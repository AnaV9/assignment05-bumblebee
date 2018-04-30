<?php include "inc/db.inc";?>
<?php  
	$sql = "DELETE FROM myconnect WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>