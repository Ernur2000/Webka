<?php
$usersdb = mysqli_connect("localhost:3306", "root", "", "users");
$carsdb = mysqli_connect("localhost", "root", "", "cars");
$connection_error = mysqli_connect_error();
	if($connection_error != null){
		echo "<p>We have a connection problem: " . $connection_error . "</p>";
	}
$querycars = "SELECT * FROM `cars` WHERE 1";
$resultcars = mysqli_query($carsdb, $querycars);
$num = mysqli_num_rows($resultcars);
$username = "";
$password = "";
if (isset($_COOKIE["name"]) && isset($_COOKIE["password"])) {
	$username = $_COOKIE["name"];
	$password = $_COOKIE["password"];
}
if (isset($_GET["name"]) && isset($_GET["password"])){
	$username = $_GET["name"];
	$password = $_GET["password"];
	setcookie("name", $username);
	setcookie("password", $password);
}
$queryusers = "SELECT `admin` FROM `users` WHERE `username`= '$username' AND `password` = '$password'";
$resultusers = mysqli_query($usersdb, $queryusers);
$admin = mysqli_fetch_assoc($resultusers);
setcookie("admin", $admin["admin"]);
?>
<html>
<head>
	<title></title>
	<style>
		.cars{
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			justify-content: space-around;
		}
		.car{
		  display:flex;
		  border:1px solid red;
		  border-radius:5px;
		  width: 300px;
			margin: 20px;
		}
		.car .right{
			padding: 5px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  border-radius: 5px;
		}
	</style>
</head>
<body>
	<form action="Task3.php">
	Enter nickname:<input type="text" name="name"/><br>
	Enter password:<input type="password" name="password"><br>
	<input type="submit"/>
	</form>

	<div class="cars">
		<?php
		for ($i=0; $i < $num; $i++) { 
		$row = mysqli_fetch_assoc($resultcars);
		?>
			<div class="car">
				<img height="80" width="100" src=<?=$row["url"]?>>
				<div class="right">
					<div class="title"><?=$row["maker"]." ".$row["model"]?></div>
					<div class="atr">
						<div class="row"><div>Year: <?=$row["year"]?></div></div>
						<div class="row"><div>Price: <?=$row["price"]?></div></div>
						<?php
						if ($admin["admin"] == 1) {
							?><a href="task3del.php?id=<?=$row["id"]?>">Delete</a><?php
						}
						?>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</body>
</html>