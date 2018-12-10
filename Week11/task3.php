<?php
	$host = "localhost:3306";
	$username = "root";
	$password = "";
	$db = "cars";
	$con = mysqli_connect($host,$username,$password,$db);
	$connection_error = mysqli_connect_error();
	if($connection_error != null){
		echo "<p>We have a connection problem: " . $connection_error . "</p>";
	}
	$maker = "";
	if(isset($_REQUEST["id"])){
		$id = $_REQUEST["id"];
		$delete = "DELETE FROM cars WHERE id='$id' ";
		if(mysqli_query($con,$delete)){
			echo "Deleted ";
		}
	}
	if(isset($_REQUEST["maker"]) AND isset($_REQUEST["model"]) AND isset($_REQUEST["price"]) AND isset($_REQUEST["year"]) AND isset($_REQUEST["url"])){
		$maker=$_REQUEST["model"];
		$model=$_REQUEST["maker"];
		$price=(int)$_REQUEST["price"];
		$year=(int)$_REQUEST["year"];
		$url=$_REQUEST["url"];
		$insertion = "INSERT INTO cars (maker,model,price,year,url) VALUES ('$maker','$model','$price','$year','$url');";
		if(mysqli_query($con,$insertion)){
			echo "Added " . $maker . " ". $model;
		}
	}
	$query="SELECT * FROM cars WHERE 1";
	$result = mysqli_query($con, $query);
	$num = mysqli_num_rows($result);
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
	<div class="form">
		<form action="task3.php">
			<table>
			<tr><td><label>Maker: </label></td><td><input type="text" name="model"></td></tr>
			<tr><td><label>Model: </label></td><td><input type="text" name="maker"></td></tr>
			<tr><td><label>Price: </label></td><td><input type="number" name="price"></td></tr>
			<tr><td><label>Year: </label></td><td><input type="number" name="year"></td></tr>
			<tr><td><label>Image(URL): </label></td><td><input type="text" name="url"></td></tr>
			</table>
			<input type="submit" value="Add new">
		</form>
	</div>
	<div class="cars">
		<?php
		for ($i=0; $i < $num; $i++) { 
		$row = mysqli_fetch_assoc($result);
		?>
			<div class="car">
				<img height="80" width="100" src=<?=$row["url"]?>>
				<div class="right">
					<div class="title"><?=$row["maker"]." ".$row["model"]?></div>
					<div class="atr">
						<div class="row"><div>Year: <?=$row["year"]?></div></div>
						<div class="row"><div>Price: <?=$row["price"]?>
						<a href="task3.php?id=<?=$row["id"]?>">Delete</a>
						</div></div>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</body>
</html>