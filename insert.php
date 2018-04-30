<?php
$connect = mysqli_connect("localhost", "urcscon3_a5bbee", "csc174", "urcscon3_a5bbee");
if(isset($_POST["first_visit"], $_POST["best_animal"], $_POST["info_finder"]))
{
 $first_visit = mysqli_real_escape_string($connect, $_POST["first_visit"]);
 $best_animal = mysqli_real_escape_string($connect, $_POST["best_animal"]);
 $info_finder = mysqli_real_escape_string($connect, $_POST["info_finder"]);
 $query = "INSERT INTO user(first_visit, best_animal, info_finder) VALUES('$first_visit', '$best_animal', '$info_finder')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
