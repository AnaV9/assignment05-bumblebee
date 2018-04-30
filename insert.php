<?php include "inc/db.inc";?>
<?php  
$sql = "INSERT INTO myconnect(visit, animal, info_finder) VALUES('".$_POST["visit", "animal", "info_finder"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>