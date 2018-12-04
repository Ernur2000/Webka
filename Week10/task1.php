<?php
	$usernames = ["billgates","johndoe","stevejobs"];
	// Enter your code here
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		if(isset($_POST["btn"])){
			$name = $_POST["user"];
			$pass = $_POST["pass"];
			$passconf = $_POST["passconf"];
			$errors = [];
			if(in_array($name, $usernames)){
				array_push($errors, "Username already has reserved");
			} 
			if(empty($name)){
				array_push($errors, "Username shouldnt be empty");
			}
			if(empty($pass) or empty($passconf)){
				array_push($errors, "Passwords shouldnt be empty");
			} 
			if($pass != $passconf){
				array_push($errors, "Passwords are not same");
			}
			for($i=0; $i<sizeof($errors); $i++){
				//echo $errors[$i];
				//echo "<br/>";
				echo '<p class=error>'. ($errors[$i]). '</p>';
				echo '<br>';
			}
		}
	}
?>
<html>
<head><style>
.error{
	border:1px solid red;
	font-weight:bold;
	padding:5px;
	width:400px;
	margin:4px;
}
input[type="text"]{	
	position: absolute;
	left: 10%;
}
</style></head>
<body>
<form action="task1.php" method="post">
		
	<span>Username:</span><input type="text" name="user" /><br/>
	<span>Password:</span><input type="text" name="pass" /><br/>
	<span>Confirm Password:</span><input type="text" name="passconf" /><br/>
	<input type="submit" name = "btn"/>
</form>
</body>
</html>