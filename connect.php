<?php include "inc/html-top.inc";?>
<?php  
	$visit = $_POST['visit'];
	$animal = $_POST['animal'];
	$info_finder = $_POST['info_finder'];

	$sql = "INSERT INTO myconnect(visit, animal, info_finder) VALUES ('$visit', '$animal','$info_finder')";
	mysqli_query($connect, $sql);
	header("location: thankyou.php");

	mysqli_close($connect); 
 ?>