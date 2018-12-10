<?php
$cars = [["id"=>1,"maker"=>"Toyota","model"=>"Camry 50","price"=>30000],["id"=>2,"maker"=>"Mercedes","model"=>"C 100","price"=>20000],["id"=>3,"maker"=>"Daewoo","model"=>"Nexia","price"=>15000],["id"=>4,"maker"=>"Mercedes","model"=>"S 500","price"=>27000]];
$basket = null;
if (isset($_COOKIE["basket"])){
	$basket = json_decode($_COOKIE["basket"]);
}
else{
	$basket = [];
}
	echo "<html><head></head><body>";
	foreach($cars as $car){
		echo $car["maker"]." ".$car["model"]." ";
		if(!in_array($car["id"], $basket)){
			echo "<a href='task2add.php?id=".$car["id"]."'>"."Add item</a><br>";
		}
		else{
			echo "Already added<br>";
		}
		}
	echo "<h1>In Basket</h1>";
	echo "Items with id: ".implode(",",$basket);
	echo "</body></html>"
	
?>