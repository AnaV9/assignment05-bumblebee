<?php
$connect = mysqli_connect("localhost", "urcscon3_a5bbee", "csc174", "urcscon3_a5bbee");
if(isset($_POST["first_visit"], $_POST["website_finder"], $_POST["info_finder"], $_POST["email"]))
{
 $first_visit = mysqli_real_escape_string($connect, $_POST["first_visit"]);
 $website_finder = mysqli_real_escape_string($connect, $_POST["website_finder"]);
 $info_finder = mysqli_real_escape_string($connect, $_POST["info_finder"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $query = "INSERT INTO user(first_visit, website_finder, info_finder, email) VALUES('$first_visit', '$website_finder', '$info_finder', '$email')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
