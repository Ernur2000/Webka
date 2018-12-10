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
	$query = "SELECT * FROM clients INNER JOIN orders ON orders.clients_id = clients.clients_id";
	$result = mysqli_query($db_conn,$query);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row["clients_id"]."</br>".$row["last_name"]."</br>".$row["orders_id"]."</br>".$row["status"];
		}} else{
			echo "No results were found";
		}
	mysqli_close($db_conn);
	?>
</p>

</body>
</html>