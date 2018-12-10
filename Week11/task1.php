<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "cars";
	$con = mysqli_connect($host,$username,$password,$db);
	$connection_error = mysqli_connect_error();
	if($connection_error != null){
		echo "<p>We have a connection problem: " . $connection_error . "</p>";
	}
	$query = "SELECT * FROM `cars` WHERE 1 ";
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
						<div class="row"><div>Price: <?=$row["price"]?></div></div>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</body>
</html>