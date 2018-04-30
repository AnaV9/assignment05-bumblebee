<?php
$connect = mysqli_connect("localhost", "urcscon3_a5bbee", "csc174", "urcscon3_a5bbee");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM admin WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>