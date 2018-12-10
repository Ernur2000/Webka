<?php
$carsdb = mysqli_connect("localhost", "root", "", "week12");
$connection_error = mysqli_connect_error();
	if($connection_error != null){
		echo "<p>We have a connection problem: " . $connection_error . "</p>";
	}
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$admin = $_COOKIE["admin"];
	if ($admin == 1) {
		$query = "DELETE FROM `cars` WHERE id = $id";
		mysqli_query($carsdb, $query);
		echo "Car with id ".$id." is deleted <br>";
	}
	else{
		echo "You don't have permission";
	}
	?>
		<a href="task3.php">Back</a>
	<?php
}
?>