<?php  
$connect = mysqli_connect("localhost", "urcscon3_a5bbee", "csc174", "urcscon3_a5bbee");
$sql = "INSERT INTO myconnect(visit, animal, info_finder) VALUES('".$_POST["visit", "animal", "info_finder"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>