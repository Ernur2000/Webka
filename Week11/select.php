<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
	<meta charset="utf-8" />
</head>
<body><p>
	<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "ecommerce";
	$db_conn = mysqli_connect($host,$username,$password,$db);
	$connection_error = mysqli_connect_error();
	if($connection_error != null){
		echo "<p>We have a connection problem: " . $connection_error . "</p>";
	}
	$query = "SELECT clients_id, last_name FROM clients";
	$result = mysqli_query($db_conn,$query);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			echo "ID: " . $row["clients_id"] . "</br>" . 
			"Last Name: " . $row["last_name"] . "</br><p>";
		}} else{
			echo "No results were found";
		}
	mysqli_close($db_conn);
	?>
</p>

</body>
</html>