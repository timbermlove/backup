<!DOCTYPE html>
<head>

<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "love210";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

</head>
<body>
	<?php
		$username = $_POST["username"];
		$password = $_POST["password"];
	?>
	
	<h2>Login Form Target Page</h2>
	
	<p>Welcome <?php echo $username; ?></p>
	<p>Your password is: <?php echo $password; ?> </p>

    <?php 
	
	// must also check for password
	// note: this example uses the customers table
	$sql = "SELECT * FROM auth WHERE Username = '" . $username . "' and Password = '" .$password . "';";
	echo $sql . "<br>";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "You are logged in!<br>";
		// copy dataset into a PHP array called $row
		$row = $result->fetch_assoc();  
		//$firstName = $row["CustName"];
		
		// the next line sets the session variable.  Now this value will be
		// available to use on any of the pages during this browsing session.
		//$_SESSION["custFirstName"] = $firstName;
		//echo "Welcome " . $_SESSION["custFirstName"] . "!<br>";
	} 
	else {
		echo "Incorrect username or password";
	}
	$conn->close();

	?>

</body>

</html>