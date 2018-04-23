<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "midterm1";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * FROM myTable";
	$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database Read</title>
</head>
<body>

	<h1>Database Read</h1>

<ul>
<?php
	// 3. Use returned data (if any)
	while($data = mysqli_fetch_assoc($result)) {
?>

<li><?php echo $data["email"]; ?></li>

<?php } ?>
</ul>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>